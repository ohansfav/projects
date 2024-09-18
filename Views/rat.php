<?php
$userauth_mdl = new \App\Models\AuthModel();


wrapper_width("70%");
//pr($_SESSION['items_in_cart']);
$thumbnal_width = "70px";
$rat = new \App\Models\RatModel();
$reqs_count = null;

$reqs  = $rat->select("rat.*")
    ->where("users.role>=", $_SESSION['role'])
    ->join("users", " users.id = rat.user_id")
    ->orderBy("rat.created_at", "DESC")
    ->paginate($pager_num);

if (isset($search_text)) {
    $reqs  = $rat->select("rat.*")
        ->withDeleted(false)
        ->where("users.role>=", $_SESSION['role'])
        ->join("users", " users.id = rat.user_id")
        ->groupStart()
        ->like(['rat.user_id' => $search_text])
        ->orLike(['users.firstname' => $search_text])
        ->orLike(['users.lastname' => $search_text])
        ->orLike(['rat.action' => $search_text])
        ->orLike(['rat.ipaddress' => $search_text])
        ->groupEnd()
        ->orderBy("rat.created_at", "DESC")
        ->paginate($pager_num);

    $reqs_count  = $rat
        ->withDeleted(false)
        ->where("users.role>=", $_SESSION['role'])
        ->join("users", " users.id = rat.user_id")
        ->groupStart()
        ->like(['rat.user_id' => $search_text])
        ->orLike(['users.firstname' => $search_text])
        ->orLike(['users.lastname' => $search_text])
        ->orLike(['rat.action' => $search_text])
        ->orLike(['rat.ipaddress' => $search_text])
        ->groupEnd()
        ->orderBy("rat.created_at", "DESC")
        ->countAllResults();
}

$pager = $rat->pager;
$currentffset = ($pager->getCurrentPage() > 1) ? $pager->getCurrentPage() - 1 : 0;
$slno_start = $currentffset * $pager->getPerPage();
$_SESSION['cur_browse_search_item'] = (isset($search_text) && !empty($search_text)) ?  urlencode(base64_encode($search_text)) : '';
$_SESSION['cur_browse_page_no'] = $currentffset;
//$_SESSION['cur_browse_url'] = base_url() . "/dashboard/browse_items/" . urlencode(base64_encode($search_text));
//$_SESSION['cur_browse_url'] = "";    

//pr($reqs);
?>
<h2 class="text-center"><i class="fa fa-history text-info"></i> Realtime Action Tracker - RAT</h2>
<br>
<div class="container-fluid">
    <div id="table_hold">
        <div class="mx-auto col-md-8">
            <form action="<?= base_url() ?>/storestaff/rat" method="POST">

                <div class="input-group  input-group-lg mb-3">
                    <input type="text" required value="<?= (isset($search_text) && !empty($search_text)) ? $search_text : '' ?>" style="" class="form-control text-center" name="search_text" placeholder="Search for anything related to the action or name of the user" id="search_text">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-success" type="button" id="button-addon2">Search</button>
                    </div>
                </div>


                <?php
                if (!empty($search_text)) { ?>
                    <p class="text-center text-<?= $reqs_count > 0 ? "success" : "danger" ?> small"><?= counted(($reqs_count) ? $reqs_count : 0, "result") . " found for \"" . $search_text . "\"" ?></p>
                <?php }
                ?>
            </form>
        </div>
        <?php

        if (!empty($reqs)) {
            echo min_page_pagination($pager->links(),  $pager_num, "storestaff/rat");

        ?>
            <div class='table-responsive'>
                <table class="table table-bordered table-hover ">
                    <thead class="thead-dark">
                        <tr>
                            <th>
                                User Name
                            </th>
                            <th>
                                When
                            </th>
                            <th>
                                Action
                            </th>
                            <th>
                                IP&nbsp;Address
                            </th>

                        </tr>
                    </thead>
                    <tbody> <?php

                            $cnt = 0;

                            foreach ($reqs as $item) {
                                $usr = $userauth_mdl->GetUser($item->user_id);


                            ?><tr>
                                <td data-title='Name'>

                                    <?php

                                    if (isset($usr)) echo $usr->firstname . "&nbsp;" . $usr->lastname; ?>
                                </td>

                                <td data-title='When'>
                                    <?= date("d-m-Y&\\n\b\s\p\;h:iA", strtotime($item->created_at)) ?>
                                </td>

                                <td data-title='Action'>
                                    <?= $item->action ?>
                                </td>

                                <td data-title='IP Address'>

                                    <?= $item->ipaddress ?>
                                </td>

                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>

            </form>

            <?php
            echo min_page_pagination($pager->links(), $pager_num, "storestaff/rat");
            ?>
        <?php

        }
        ?>
    </div>

</div>

<br>
<script>
    jQuery(function() {

        var loader_show = function() {
            jQuery("#loadingdiv").fadeIn(300);
        };

        var loader_hide = function() {
            jQuery("#loadingdiv").fadeOut(300);
        };

        do_nav("a.rat_nav");




    });
</script>
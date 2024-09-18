<!-- Content -->
<section class="about">
    <header class="main display-3">
        <h1>My Books</h1>
    </header>

<style>
.wood_dark{
  background:url("assets/images/wooddark.jpg");
  min-height: 200px;
  margin-top:0.2em;
}
.book{
  background:url("assets/images/book-icon.png");
  background-size:contain;
  background-repeat: no-repeat;
  min-height: 100px;
}
.booktitle{
  margin-top: 110%;
  font-size: 1.3em;
  text-align: center;
}
.wood_light{
  background:url("assets/images/woodlight.jpg");
  margin-top: 1.4em !important;
}

</style>
    <div class='row wood_dark' >
        <div class='col-md-12 wood_light'>
            <div class='row'>
                <?php

                    $book_model = new \App\Models\BooksModel();
                    $book_model->where("author", $_SESSION['user_id']);
                    $my_books = $book_model->findAll();

                    foreach($my_books as $book){
                    ?>

                           <div class='col-md-2  book'>
                                <div class="booktitle"><a href="<?= $book->bookfile ?>"> <?= $book->title ?></a></div>
                            </div>
                    <?php
                    }


                ?>

            </div>
        </div>
    </div>


</section>
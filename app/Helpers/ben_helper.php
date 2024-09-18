<?php

/*
 * Benny for Benditas Y - 2018-04-24 11:45:44
 */

if (!defined('SYSTEMPATH')) {
    exit('No direct script access allowed');
}

//stuffs, models etc
use App\Models\Settings;
use App\Libraries\SendEmail;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

if (!function_exists('get_year_name')) {
    function get_year_name($id = '')
    {
        $CI = &get_instance();
        $CI->load->database();
        $year_row = $CI->db->get_where('years', ['year_id' => $id])->row();

        return $year_row->year_start . ' - ' . $year_row->year_end;
    }
}

if (!function_exists('abbreviate')) {
    function abbreviate($string)
    {
        return implode(
            array_map(
                function ($w) {
                    return substr($w, 0, 1);
                },
                explode(" ", $string)
            )
        );
    }
}

if (!function_exists('base64png_to_base64jpg')) {
    function base64png_to_base64jpg($base64png, $staff_id)
    {

        $jpg = WRITEPATH . "uploads/" . $staff_id . '_img.jpg';
        $png = WRITEPATH . "uploads/" . $staff_id . '_img.png';
        $data = base64_decode($base64png);
        file_put_contents($png, $data);
        $image = imagecreatefrompng($png);
        imagejpeg($image,  $jpg, 70);
        imagedestroy($image);
        $base64jpeg = base64_encode(file_get_contents($jpg));
        unlink($jpg);
        unlink($png);
        //$src = 'data: '.mime_content_type($img_file).';base64,'.$imgData;
        //echo '<img src="'.$src.'">';

        return $base64jpeg;
    }
}

if (!function_exists('base64_to_png_file')) {
    function base64_to_png_file($base64_string, $output_file = "")
    {

        if (empty($output_file)) {
            $output_file = 'uploads/templates/idcard_tmp/' . date("Ymdhis") . "_tmp_image.png";
        } else {
            $output_file = 'uploads/templates/idcard_tmp/' . strtolower(str_replace(" ", "", $output_file)) . "_tmp_image.png";
        }

        $output_file_name =  $output_file;

        file_put_contents($output_file, base64_decode($base64_string));

        return $output_file_name;
    }
}

if (!function_exists('min_page_pagination')) {
    function min_page_pagination($page_links, $sel_num, $url_submit)
    {


        $id_sel = uniqid();


        $output_div_min_records =  " 

        <style>
        
        
    ul.pagination li a {
        border: solid 1px;
        border-radius: 3px;
        border-color: #3b7415;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        padding: 6px 9px 6px 9px;
    }
    
    ul.pagination li {
        padding-bottom: 1px;
    }
    
    ul.pagination li a:hover,
    ul.pagination li a.current {
        color: #FFFFFF;
        box-shadow: 0px 1px #EDEDED;
        -moz-box-shadow: 0px 1px #EDEDED;
        -webkit-box-shadow: 0px 1px #EDEDED;
    }
    
    ul.pagination {
        margin: 4px 0;
        padding: 0px;
        height: 100%;
        overflow: hidden;
        font: 12px 'Tahoma';
        list-style-type: none;
    }
    
    ul.pagination li {
        float: left;
        margin: 0px;
        padding: 0px;
        margin-left: 5px;
        background-color: #fff;
    }
    
    ul.pagination li a {
        color: black;
        display: block;
        text-decoration: none;
        border-color: #a7b79d;
        padding: 7px 10px 7px 10px;
    }
    
    ul.pagination li a img {
        border: none;
    }
    
    ul.pagination li.active a {
        background-color: #099312;
        color: #fff;
    }
    
    ul.pagination li a:hover,
    ul.pagination li a.current {
        text-shadow: 0px 1px #38be55;
        border-color: #6fca33;
        background: #58e75f;
        color: #333;
        background: -moz-linear-gradient(top, #b4ffcb 1px, #63fe7d 1px, #64e758);
        background: -webkit-gradient(linear, 0 0, 0 100%, color-stop(0.02, #b4ffc4), color-stop(0.02, #63fea9), color-stop(1, #5de758));
    }
    
        </style>
         
        <div class='row'>
            <div class='col-md-auto'>
                " . $page_links . "
            </div> 
             <div class='col-md' style='float:right;clear:both;'>
               <div class='row'>
            <div class='col-md text-right'><label class='bennysmall'  for='" . $id_sel . "' >How many per page: </label> </div>
            <div class='col-md-auto'><form action='" . base_url($url_submit) . "' method='post'>
                   <select name='pager_num_rows' id='" . $id_sel . "'  onchange='javascript:this.form.submit()' class='form-control'>
                        <option selected value='1'>Pick a number</option>
                        <option " . (($sel_num == 5) ? " selected " : "") . " value='5'>5</option>
                        <option " . (($sel_num == 10) ? " selected " : "") . " value='10'>10</option>
                        <option " . (($sel_num == 50) ? " selected " : "") . " value='50'>50</option>
                        <option " . (($sel_num == 100) ? " selected " : "") . " value='100'>100</option>
                        <option " . (($sel_num == 200) ? " selected " : "") . " value='200'>200</option>
                        <option " . (($sel_num == 500) ? " selected " : "") . " value='500'>500</option>
                        <option " . (($sel_num == 100000000) ? " selected " : "") . " value='100000000'>ALL</option>
                    </select>
                </form></div>
                        
            </div>
                
            </div>
        </div>
          
            
            ";
        return $output_div_min_records;
    }
}


if (!function_exists('base64_to_jpeg')) {
    function base64_to_jpeg($base64_string, $output_file = "")
    {

        if (empty($output_file)) {
            $output_file = 'uploads/templates/idcard_tmp/' . date("Ymdhis") . "_tmp_image.jpg";
        } else {
            $output_file = 'uploads/templates/idcard_tmp/' . strtolower(str_replace(" ", "", $output_file)) . "_tmp_image.jpg";
        }
        $output_file_name =  $output_file;

        file_put_contents($output_file, base64_decode($base64_string));

        return $output_file_name;
    }
}
if (!function_exists('highlight')) {
    function highlight($needle, $haystack){ 
        $ind = stripos($haystack, $needle); 
        $len = strlen($needle); 
        if($ind !== false){ 
            return substr($haystack, 0, $ind) . "<span class='bg-warning'>" . substr($haystack, $ind, $len) . "</span>" . 
                highlight($needle, substr($haystack, $ind + $len)); 
        } else return $haystack; 
    } 
}


if (!function_exists('ben_object_sort_by_key')) {
    function ben_object_sort_by_key(&$object_in, $key_in="name"){ 

        uasort($object_in, function ($a, $b) use($key_in) {
            return strcmp($a->{$key_in}, $b->{$key_in});
        });

    } 
}


if (!function_exists('uploadedPhotoToDB')) {
    function uploadedPhotoToDB($photoFile)
    {
        $tempname = time();

        if ($photoFile->isValid() && !$photoFile->hasMoved())
            $photoFile->move('uploads/', $tempname);
        else
            return null;

        $path = 'uploads/cropped_upload_' . $tempname;

        $image = \Config\Services::image()
            ->withFile('uploads/' . $tempname)
            ->save($path,80);

        if (is_file('uploads/' . $tempname)) {
            unlink('uploads/' . $tempname);
        }

        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $filtered_photo = explode(',', $base64);
        $encoded_photo = $filtered_photo[1];
        if ($type == "png") {
            $encoded_photo = base64png_to_base64jpg($filtered_photo[1], $tempname);
        }

        unlink($path);
        return  $encoded_photo;
    }
}


if (!function_exists('checkUploadError')) {
    function checkUploadError($code)
    {
        switch ($code) {
            case UPLOAD_ERR_INI_SIZE:
                $message = 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
                break;
            case UPLOAD_ERR_FORM_SIZE:
                $message = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
                break;
            case UPLOAD_ERR_PARTIAL:
                $message = 'The uploaded file was only partially uploaded';
                break;
            case UPLOAD_ERR_NO_FILE:
                $message = 'No file was uploaded';
                break;
            case UPLOAD_ERR_NO_TMP_DIR:
                $message = 'Missing a temporary folder';
                break;
            case UPLOAD_ERR_CANT_WRITE:
                $message = 'Failed to write file to disk';
                break;
            case UPLOAD_ERR_EXTENSION:
                $message = 'File upload stopped by extension';
                break;

            default:
                $message = 'Unknown upload error';
                break;
        }
        return $message;
    }
}

if (!function_exists('diff_timestamp')) {
    function diff_timestamp($start, $end = false)
    {
        /*
        * For this function, i have used the native functions of PHP. It calculates the difference between two timestamp.
        *
        * Author: Toine
        *
        * I provide more details and more function on my website
        */

        // Checks $start and $end format (timestamp only for more simplicity and portability)
        if (!$end) {
            $end = time();
        }
        if (!is_numeric($start) || !is_numeric($end)) {
            return false;
        }
        // Convert $start and $end into EN format (ISO 8601)
        $start = date('Y-m-d H:i:s', $start);
        $end = date('Y-m-d H:i:s', $end);
        $d_start = new DateTime($start);
        $d_end = new DateTime($end);
        $diff = $d_start->diff($d_end);
        // return all data
        $dd = [];
        $dd['year'] = $diff->format('%y');
        $dd['month'] = $diff->format('%m');
        $dd['day'] = $diff->format('%d');
        $dd['hour'] = $diff->format('%h');
        $dd['min'] = $diff->format('%i');
        $dd['sec'] = $diff->format('%s');
        return $dd;
    }
}


if (!function_exists('grab_csv')) {
    function grab_csv($upload_name, $csv_input_name_requested, $model_to_use_in, $fields_to_store, $extras = [])
    {
        //$extras sample = ['receiver_id'=>$_SESSION['logged_in_user_id']]
        if ($csv_input_name_requested) {

            $model_to_use = $model_to_use_in; //new model()

            $file = $csv_input_name_requested; //$this->request->getFile($csv_input_name);

            // Valid
            if ($file) {
                if ($file->isValid() && !$file->hasMoved()) {
                    // Get random file name
                    $newName = $upload_name . "_uploaded.csv";
                    // Store file in public/csvfile/ folder
                    $file->move('uploads/', $newName);
                    // Reading file
                    $file = fopen("uploads/" . $newName, "r");
                    $i = 0;
                    $store_csv = [];

                    // Initialize $importData_arr Array
                    while (($filedata = fgetcsv($file, 1000, ",")) !== false) {

                        // Skip first row & check number of fields
                        if ($i > 0) {
                            // Key names are the insert table field names - name, email, city, and status
                            $val_num = 0;
                            foreach ($fields_to_store as $value) {
                                # code...
                                $store_csv[$i][$value] =  htmlspecialchars($filedata[$val_num]);

                                if (!empty($extras)) {
                                    //extras are just additional key - value fields that should be added to the db 
                                    foreach ($extras as $key => $value) {
                                        # code...
                                        $store_csv[$i][$key] = htmlspecialchars($value);
                                    }
                                }

                                $val_num++;
                            }
                        }
                        $i++;
                    }

                    try {
                        if ($model_to_use->insertBatch($store_csv, true) === false) {
                            echo ("An item could not be saved. Due to an error. Check it and try again please");
                        }
                    } catch (Exception $e) {
                        return (["status" => 0, "msg" => "Could not add all. Error: " . $e->getMessage()]);
                    }

                    fclose($file);
                    unlink("uploads/" . $newName);

                    return (["status" => 1, "msg" => "success"]);
                } else {

                    return (["status" => 0, "msg" => "File was not imported, please check that the file is correct and try again!"]);
                }
            } else {
                return (["status" => 0, "msg" => "File was not uploaded, please check and try again!"]);
            }
        } else {
            return (["status" => 0, "msg" => "No department data found, upload halted!"]);
        }
    }
}


if (!function_exists('rat')) {
    function rat($action)
    {

        $rat_model = new \App\Models\RatModel();
        $req = \Config\Services::request();


        $data = [
            "user_id" => (isset($_SESSION['logged_in_user_id'])) ? $_SESSION['logged_in_user_id'] : 0,
            "action" => $action,
            "ipaddress" => $req->getIPAddress()
        ];

        $rat_model->save($data);
    }
}


if (!function_exists('send_mail')) {
    function send_mail($addy_to, $toname, $addy_from_name = "", $addy_from = "", $subject, $msg)
    {


        $userauth_mdl = new \App\Models\AuthModel();

        if (isset($_SESSION['logged_in_user_id'])) {
            $usr = $userauth_mdl->GetUser($_SESSION['logged_in_user_id']);
            $data = [
                'firstname' => $usr->firstname,
                'lastname' => $usr->lastname,
                "toname" => $toname,
                'subject' => $subject,
                'message' => $msg,
            ];
        } else {
            $data = [
                'firstname' => "",
                'lastname' => "",
                "toname" => $toname,
                'subject' => $subject,
                'message' => $msg,
            ];
        }


        $SendEmail = new SendEmail();



        // SET DATA FOR EMAIL HEADERS
        $emaildata = [
            'to' => $addy_to,
            'subject' => $subject,
            'fromEmail' => $addy_from ? $addy_from : (isset($usr->email) ? "" : ""),
            'fromName' => $addy_from_name ? $addy_from_name : (isset($usr->firstname) ? $usr->firstname . " " . $usr->lastname : ""),
            'message_view' => 'plainmail.php',
            'messagedata' => $data,
        ];

        // SEND DATA TO SEND EMAIL LIBRARY
        $result = $SendEmail->build($emaildata);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}


if (!function_exists('get_time_ago')) {
    function get_time_ago($time)
    {
        $time_difference = time() - $time;

        if ($time_difference < 1) {
            return 'less than 1 second ago';
        }
        $condition = [
            12 * 30 * 24 * 60 * 60 => 'year',
            30 * 24 * 60 * 60 => 'month',
            24 * 60 * 60 => 'day',
            60 * 60 => 'hour',
            60 => 'minute',
            1 => 'second'
        ];

        foreach ($condition as $secs => $str) {
            $d = $time_difference / $secs;

            if ($d >= 1) {
                $t = round($d);
                return 'about ' . $t . ' ' . $str . ($t > 1 ? 's' : '') . ' ago';
            }
        }
    }
}

if (!function_exists('wrapper_width')) {
    function wrapper_width($width = "70%")
    {

        echo "<style>
                #wrapper {
                    width: $width !important;
                }
                </style>";
    }
}


if (!function_exists('benlog')) {
    function benlog($msg, $type = 'error')
    {
        log_message($type, $msg);
    }
}

if (!function_exists('benslashes')) {
    function benslashes($str)
    {
        $pattern = [
            '/\\\\/', "/\n/", "/\r/", '/"/',
            "/\'/", '/&/', '/</', '/>/'
        ];
        $replace = [
            '\\\\\\\\', '\\n', '\\r', '\\"',
            "\\'", '\\x26', '\\x3C', '\\x3E'
        ];
        return preg_replace($pattern, $replace, $str);
    }
}
if (!function_exists('alphanumericPass')) {
    function alphanumericPass()
    {
        // Do not modify anything below here
        $underscores = 0; // Maximum number of underscores allowed in password
        $length = 8; // Length of password

        $p = '';
        for ($i = 0; $i < $length; ++$i) {
            $c = mt_rand(1, 7);
            switch ($c) {
                case $c <= 2:
                    // Add a number
                    $p .= mt_rand(0, 9);
                    break;
                case $c <= 4:
                    // Add an uppercase letter
                    $p .= chr(mt_rand(65, 90));
                    break;
                case $c <= 6:
                    // Add a lowercase letter
                    $p .= chr(mt_rand(97, 122));
                    break;
                case 7:
                    $len = strlen($p);
                    if ($underscores > 0 && $len > 0 && $len < ($length - 1) && '_' != $p[$len - 1]) {
                        $p .= '_';
                        --$underscores;
                    } else {
                        --$i;
                    }
                    break;
            }
        }

        return $p;
    }
}

if (!function_exists('check_if_email_used')) {
    function check_if_email_used($email, $usr_id, $own_email = false)
    {
        $CI = &get_instance();
        $CI->load->database();

        $stuff = [];

        //loop through and check db
        $types = ['admin', 'sales', 'customer'];

        foreach ($types as $usr_table) {
            $check = '';
            $check = $CI->db->get_where($usr_table, ['email' => $email])->result_array();

            foreach ($check as $checkrow) {
                // code...

                if ($own_email) {
                    //exit("BOO OWN!");

                    if ($checkrow['email'] == $email && $checkrow[$usr_table . '_id'] == $usr_id) {
                        return false;
                    }
                } else {
                    //exit("BOO!");

                    if ($checkrow['email']) {
                        $stuff[] = 'Exists ' . $usr_table;
                    }
                }
            }
        }

        if ($stuff) {
            return true;
        }

        return false;
    }
}
if (!function_exists('fixtime')) {
    function fixtime($datetofix)
    {
        $datetofix = str_replace('/', '.', $datetofix);
        $datetofix = strtotime($datetofix);

        return date('Y-m-d', $datetofix);
    }
}

if (!function_exists('array_flatten')) {
    function array_flatten(array $array)
    {
        $return = [];
        array_walk_recursive($array, function ($a) use (&$return) {
            $return[] = $a;
        });

        return $return;
    }
}

if (!function_exists('array_flatten_1')) {
    function array_flatten_1($array)
    {
        $return = [];
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $return = array_merge($return, array_flatten($value));
            } else {
                $return[$key] = $value;
            }
        }

        return $return;
    }
}

if (!function_exists('filtermulti_get_key')) {
    function filtermulti_get_key($array, $key_in)
    {
        $newarr = [];
        $cnt = 0;

        foreach ($array as $key => $value) {
            // code...
            $newarr[$cnt][$key_in] = $value[$key_in];
            $cnt++;
        }

        return array_flatten($newarr);
    }
}

if (!function_exists('get_currency_sign')) {
    function get_currency_sign($amount = 0, $hide_sign = false)
    {


        $amount = (float) (str_replace(',', '', $amount));

        if ($hide_sign) {
            return format_price($amount, 2, '.', ',');
        }

        return "&#x20A6;" . format_price($amount, 2, '.', ',');
    }
}

if (!function_exists('get_offpay')) {
    function get_offpay($offpay = 0)
    {
        if ($offpay == 1) {
            return '[Off Payroll]';
        }
    }
}

if (!function_exists('format_price')) {

    function format_price($number, $decPlaces, $decSep, $thouSep)
    {



        //$number - number for format
        //$decPlaces - number of decimal places
        //$decSep - separator for decimals
        //$thouSep - separator for thousands
        $decPointIsHere = 0;

        //first remove all white spaces
        $number = str_replace(',', '', $number);
        $number = preg_replace('/\s+/', '', $number);
        //split string into array
        $numberArr = str_split($number);
        //reverse array and not preserve key, keys will help to find decimal place
        $numberArrRev = array_reverse($numberArr);

        //find first occurrence of non number character, that will be a decimal place
        //store $key into variable $decPointIsHere
        foreach ($numberArrRev as $key => $value) {
            if (!is_numeric($value)) {
                if ($decPointIsHere == "") {
                    $decPointIsHere = $key;
                }
            }
        }

        //decimal comma or whatever it is replace with dot
        //$decPointIsHere is the key of the element that will contain decimal separator dot
        if ($decPointIsHere != "") {
            $numberArrRev[$decPointIsHere] = ".";
        }

        //again check through array for non numerical characters but skipping allready processed keys
        //if is not number remove from array

        foreach ($numberArrRev as $key => $value) {
            if (!is_numeric($value) && $key > $decPointIsHere) {
                unset($numberArrRev[$key]);
            }
        }

        //reverse back, at the start reversed array $numberArrRev to $numberArr
        $numberArr = array_reverse($numberArrRev);

        //create string from array
        $numberClean = implode("", $numberArr);

        // apply php number_format function
        return number_format($numberClean, $decPlaces, $decSep, $thouSep);
    }
}

if (!function_exists('fixsqldate')) {
    function fixsqldate($date)
    {
        if ($date) {
            return date('Y-m-d H:i', strtotime($date));
        }

        return false;
    }
}

if (!function_exists('convertBytes')) {
    function convertBytes($value)
    {
        if (is_numeric($value)) {
            return $value;
        }
        $value_length = strlen($value);
        $qty = substr($value, 0, $value_length - 1);
        $unit = strtolower(substr($value, $value_length - 1));
        switch ($unit) {
            case 'k':
                $qty *= 1024;
                break;
            case 'm':
                $qty *= 1048576;
                break;
            case 'g':
                $qty *= 1073741824;
                break;
        }

        return $qty;
    }
}

if (!function_exists('datetotime')) {
    function datetotime($date, $format = 'DD-MM-YYYY')
    {
        if ('YYYY-MM-DD' == $format) {
            [$year, $month, $day] = explode('-', $date);
        }

        if ('YYYY/MM/DD' == $format) {
            [$year, $month, $day] = explode('/', $date);
        }

        if ('YYYY.MM.DD' == $format) {
            [$year, $month, $day] = explode('.', $date);
        }

        if ('DD-MM-YYYY' == $format) {
            [$day, $month, $year] = explode('-', $date);
        }

        if ('DD/MM/YYYY' == $format) {
            [$day, $month, $year] = explode('/', $date);
        }

        if ('DD.MM.YYYY' == $format) {
            [$day, $month, $year] = explode('.', $date);
        }

        if ('MM-DD-YYYY' == $format) {
            [$month, $day, $year] = explode('-', $date);
        }

        if ('MM/DD/YYYY' == $format) {
            [$month, $day, $year] = explode('/', $date);
        }

        if ('MM.DD.YYYY' == $format) {
            [$month, $day, $year] = explode('.', $date);
        }

        return mktime(0, 0, 0, $month, $day, $year);
    }
}
if (!function_exists('check_if_student_id_used')) {
    function check_if_student_id_used($roll)
    {
        $CI = &get_instance();
        $CI->load->database();
        $check = $CI->db->get_where('student', ['roll' => $roll])->row()->roll;

        if ('' != $check) {
            return true;
        }

        return false;
    }
}

if (!function_exists('get_setting')) {
    function get_setting($setting_type = '')
    {
        $settings = new Settings();

        return $settings->where('type', $setting_type)->first()['description'];
    }
}

if (!function_exists('ratty')) {
    function ratty($what)
    {
        try {
            $CI = &get_instance();
            $CI->load->database();

            if (empty($_SESSION['emd_id'])) {
                return;
            }

            $data = [
                'emd_employee_code' => $_SESSION['emd_id'],
                'created' => date('Y-m-d H:i:s'),
                'ipaddress' => $_SERVER['REMOTE_ADDR'],
                'action' => $what,
                'by_who' => $_SESSION['name'],
                'emp_type' => $_SESSION['employee_code'],
            ];

            $CI->db->insert('ratty', $data);
        } catch (Exception $e) {
            header('Location: ' . base_url()); // Redirect browser

            // Make sure that code below does not get executed when we redirect.
            exit('Your Session has expired, please refresh the browser!');
        }

        return true;
    }
}

if (!function_exists('getCountriesSelect')) {
    function getCountriesSelect($sel_name = '', $attr = '', $no_name = false)
    {
        include_once 'CountryState.php';

        $c_s = new CountryState();

        //african
        //$countries = ['Algeria', 'Benin', 'Burkina Faso', 'Burundi', 'Cameroon', 'Cape Verde',  'Central African Republic', 'Chad', "Cote d'Ivoire", 'Congo', 'Djibouti', 'Egypt',  'Equatorial Guinea', 'Eritrea', 'Ethiopia',  'Gabon', 'Gambia', 'Ghana', 'Guinea', 'Guinea-Bissau',  'Kenya', 'Liberia', 'Mali', 'Morocco', 'Mozambique', 'Namibia', 'Niger', 'Nigeria', 'Senegal', 'Sierra Leone', 'Somalia', 'South Africa',  'Swaziland', 'Togo', 'Tunisia', 'Uganda', 'Zambia', 'Zimbabwe'];

        //all
        $countries = $c_s->countries();

        $countries_options = '<option  value="" >Select a country</option>';
        foreach ($countries as $value) {
            // code...

            $country = $c_s->getCountry($value);

            $country[6] = $country[6] ?? '';

            $countries_options .= "<option data-states='" . json_encode($country[6], JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE) . "' value='" . htmlspecialchars($value, ENT_QUOTES) . "'>" . $value . '</option>';
        }

        return '<select ' . $attr . (($no_name) ? '' : ' name="' . $sel_name . '"') . ' id="' . $sel_name . '">' . $countries_options . '</select>';
    }
}

if (!function_exists('returnDatesBetween')) {
    function returnDatesBetween($begin, $end)
    {
        $begin = new DateTime($begin);

        $end = new DateTime($end . ' +1 day');

        $daterange = new DatePeriod($begin, new DateInterval('P1D'), $end);

        foreach ($daterange as $date) {
            $dates[] = $date->format('Y-m-d');
        }
        return $dates;
    }
}


if (!function_exists('Sleeper')) {
    function Sleeper($Sec)
    {
        usleep($Sec * 1000000);
        //    OCD
        return true;
    }
}

if (!function_exists('array_max_recursive')) {
    function array_max_recursive(array $array)
    {
        $max = null;
        $stack = [$array];

        do {
            $current = array_pop($stack);
            foreach ($current as $value) {
                if (is_array($value)) {
                    $stack[] = $value;
                } elseif (false !== filter_var($value, FILTER_VALIDATE_INT)) {
                    // max(NULL, 0) returns NULL, so cast it
                    $max = (int) max($max, $value);
                }
            }
        } while (!empty($stack));

        return $max;
    }
}

if (!function_exists('between_dates')) {
    function between_dates($check = '', $begin = '', $end = '')
    {
        $datetime_check = new DateTime($check);
        $datetime_begin = new DateTime($begin);
        $datetime_end = new DateTime($end);

        $dt_begin = $datetime_begin->format('Ymd');
        $dt_end = $datetime_end->format('Ymd');
        $checker = $datetime_check->format('Ymd');

        /* pr($dt_begin);
         pr($dt_end);
         pr($checker);

         exit("AAAAAAAAAAAAAA IN function");*/

        if ($checker < $dt_end && $checker > $dt_begin) {
            return true;
        }
        return false;
    }
}



if (!function_exists('output_csv')) {
    function output_csv($path, $response_obj,  $data, $download = 1)
    {

        try {
            $file = new \CodeIgniter\Files\File($path);

            // Write CSV rows to it.
            $csv = $file->openFile('w');

            foreach ($data as $row) {
                $csv->fputcsv($row);
            }

            if ($download) {
                return $response_obj->download($path, null, true);
            }
        } catch (Exception $e) {
            die($e);
        }
    }
}
if (!function_exists('get_template')) {
    function get_template($pdf_temp = 1, $xml_temp = 1)
    {
        if ($pdf_temp == 1) {
            $tempfile = "front_single.pdf";
        }
        if ($pdf_temp == 2) {
            $tempfile = "front_double.pdf";
        }

        if ($xml_temp == 1) {
            $xmlfile = file_get_contents("uploads/templates/frontsingle.xml");
        }

        if ($xml_temp == 2) {
            $xmlfile = file_get_contents("uploads/templates/frontdouble.xml");
        }

        $full_xml2 = str_replace('{pdf}', 'uploads/templates/' . $tempfile, $xmlfile);
        $full_xml = str_replace('{logo}', 'uploads/logo.png', $full_xml2);

        return $full_xml;
    }
}

if (!function_exists('get_ppdf')) {
    function get_ppdf($params = null)
    {
        require 'printpdf/printform-pdf.php';

        if ($params == null) {
            $params = ['output' => 'F', 'outname' => date("Y_m_d_h_i_A") . '_pdf_export.pdf'];
        }

        $pdf = new CPrintFormPdf($params);

        return $pdf;
    }
}

if (!function_exists('get_phpspreadsheet')) {
    function get_phpspreadsheet($params = "CSV")
    {
        require __DIR__ . "/simple-excel-php-master/src/SimpleExcel/SimpleExcel.php";


        $excel = new \SimpleExcel\SimpleExcel($params);

        return $excel;
    }
}

if (!function_exists('addOrdinalNumberSuffix')) {
    function addOrdinalNumberSuffix($num)
    {
        if (!in_array(($num % 100), [11, 12, 13], true)) {
            switch ($num % 10) {
                    // Handle 1st, 2nd, 3rd
                case 1:
                    return $num . 'st';
                case 2:
                    return $num . 'nd';
                case 3:
                    return $num . 'rd';
            }
        }

        return $num . 'th';
    }
}
if (!function_exists('array_orderby')) {
    function array_orderby()
    {
        $args = func_get_args();
        $data = array_shift($args);
        foreach ($args as $n => $field) {
            if (is_string($field)) {
                $tmp = [];
                foreach ($data as $key => $row) {
                    $tmp[$key] = $row[$field];
                }

                $args[$n] = $tmp;
            }
        }
        $args[] = &$data;
        call_user_func_array('array_multisort', $args);

        return array_pop($args);
    }
}

if (!function_exists('sumArray')) {
    function sumArray($array, $params = ['direction' => 'x', 'key' => 'xxx'], $exclusions = [])
    {
        if (!empty($array)) {
            $sum = 0;

            if ('x' == $params['direction']) {
                $keys = array_keys($array);

                for ($x = 0; $x < count($keys); ++$x) {
                    if (!in_array($keys[$x], $exclusions, true)) {
                        $sum += $array[$keys[$x]];
                    }
                }

                return $sum;
            } elseif ('y' == $params['direction']) {
                $keys = array_keys($array);

                if (array_key_exists($params['key'], $array[$keys[0]])) {
                    for ($x = 0; $x < count($keys); ++$x) {
                        if (!in_array($keys[$x], $exclusions, true)) {
                            $sum += $array[$keys[$x]][$params['key']];
                        }
                    }

                    return $sum;
                }

                return false;
            }

            return false;
        }

        return false;
    }
}

if (!function_exists('array_sum_key')) {
    function array_sum_key($arr, $index = null)
    {
        if (!is_array($arr) || count($arr) < 1) {
            return 0;
        }
        $ret = 0;
        foreach ($arr as $id => $data) {
            if (isset($index)) {
                $ret += (isset($data[$index])) ? $data[$index] : 0;
            } else {
                $ret += $data;
            }
        }

        return $ret;
    }
}
if (!function_exists('array_average_nonzero')) {
    function array_average_nonzero($arr)
    {
        return array_sum($arr) / count(array_filter($arr));
    }
}

if (!function_exists('add_select')) {
    function add_select($name_select, $table_model, $display_field, $value_field, $show_select = false, $attrib_extras = "")
    {
        $show = "";
        if ($show_select)
            $show = "_show";

        $out = "<select  name='$name_select'  id='$name_select' $attrib_extras class='form-control select2$show'>"
            . "<option selected value=''>Please make a selection</option>";
        $all = $table_model->asArray()->findAll();
        foreach ($all as $one) {
            $out .=   "<option value='$one[$value_field]'>$one[$display_field]</option>";
        }
        $out .= "</select>";

        return $out;
    }
}

if (!function_exists('get_model_rows_by_key')) {
    function get_model_rows_by_key($model, $keyfield, $keyfield_value)
    {
        return $model->where([$keyfield => $keyfield_value])->first();
    }
}


if (!function_exists('greet')) {
    function greet()
    {
        $date = date('H');

        if ($date < 6) {
            $greeting = 'Good morning';
        } elseif ($date < 7) {
            $greeting = 'Good morning';
        } elseif ($date < 12) {
            $greeting = 'Good morning';
        } elseif ($date < 18) {
            $greeting = 'Good afternoon';
        } elseif ($date < 22) {
            $greeting = 'Good evening';
        } elseif ($date < 24) {
            $greeting = 'Good evening';
        }

        return $greeting;
    }
}

if (!function_exists('get_progress_php')) {
    function get_progress_php()
    {
        require 'ProgressObj.php';

        $po = new ProgressObj();

        return $po;
    }
}

if (!function_exists('objectsIntoArray')) {
    function objectsIntoArray($arrObjData, $arrSkipIndices = [])
    {
        $arrData = [];

        // if input is object, convert into array
        if (is_object($arrObjData)) {
            $arrObjData = get_object_vars($arrObjData);
        }

        if (is_array($arrObjData)) {
            foreach ($arrObjData as $index => $value) {
                if (is_object($value) || is_array($value)) {
                    $value = objectsIntoArray($value, $arrSkipIndices); // recursive call
                }
                if (in_array($index, $arrSkipIndices, true)) {
                    continue;
                }
                $arrData[$index] = $value;
            }
        }

        return $arrData;
    }
}
//multi purpose function
if (!function_exists('pr')) {
    function pr($array = [], $return = false)
    {
        if (is_array($array)) {
            array_walk_recursive($array, function (&$v) {
                if (is_string($v)) {
                    $v = htmlspecialchars($v);
                }
            });
        } elseif (is_string($array)) {
            $array = htmlspecialchars($array);
        }
        if ($return) {
            return '<pre style="word-wrap:break-word; white-space:pre-wrap;">' . print_r($array, $return) . '</pre>';
        }
        echo '<pre style="word-wrap:break-word; white-space:pre-wrap;">';
        print_r($array, $return);
        echo '</pre>';
    }
}

if (!function_exists('in_object')) {
    function in_object($val, $obj)
    {
        if ('' == $val) {
            trigger_error('in_object expects parameter 1 must not empty', E_USER_WARNING);

            return false;
        }
        if (!is_object($obj)) {
            $obj = (object) $obj;
        }

        foreach ($obj as $key => $value) {
            if (!is_object($value) && !is_array($value)) {
                if ($value == $val) {
                    return true;
                }
            } else {
                return in_object($val, $value);
            }
        }

        return false;
    }
}

//--------------------pDF Reasdrt

function decodeAsciiHex($input)
{
    $output = '';

    $isOdd = true;
    $isComment = false;

    for ($i = 0, $codeHigh = -1; $i < strlen($input) && '>' != $input[$i]; ++$i) {
        $c = $input[$i];

        if ($isComment) {
            if ('\r' == $c || '\n' == $c) {
                $isComment = false;
            }

            continue;
        }

        switch ($c) {
            case '\0':
            case '\t':
            case '\r':
            case '\f':
            case '\n':
            case ' ':
                break;
            case '%':
                $isComment = true;
                break;

            default:
                $code = hexdec($c);
                if (0 === $code && '0' != $c) {
                    return '';
                }

                if ($isOdd) {
                    $codeHigh = $code;
                } else {
                    $output .= chr($codeHigh * 16 + $code);
                }

                $isOdd = !$isOdd;
                break;
        }
    }

    if ('>' != $input[$i]) {
        return '';
    }

    if ($isOdd) {
        $output .= chr($codeHigh * 16);
    }

    return $output;
}
function decodeAscii85($input)
{
    $output = '';

    $isComment = false;
    $ords = [];

    for ($i = 0, $state = 0; $i < strlen($input) && '~' != $input[$i]; ++$i) {
        $c = $input[$i];

        if ($isComment) {
            if ('\r' == $c || '\n' == $c) {
                $isComment = false;
            }

            continue;
        }

        if ('\0' == $c || '\t' == $c || '\r' == $c || '\f' == $c || '\n' == $c || ' ' == $c) {
            continue;
        }

        if ('%' == $c) {
            $isComment = true;
            continue;
        }
        if ('z' == $c && 0 === $state) {
            $output .= str_repeat(chr(0), 4);
            continue;
        }
        if ($c < '!' || $c > 'u') {
            return '';
        }

        $code = ord($input[$i]) & 0xff;
        $ords[$state++] = $code - ord('!');

        if (5 == $state) {
            $state = 0;
            for ($sum = 0, $j = 0; $j < 5; ++$j) {
                $sum = $sum * 85 + $ords[$j];
            }

            for ($j = 3; $j >= 0; --$j) {
                $output .= chr($sum >> ($j * 8));
            }
        }
    }
    if (1 === $state) {
        return '';
    } elseif ($state > 1) {
        for ($i = 0, $sum = 0; $i < $state; ++$i) {
            $sum += ($ords[$i] + ($i == $state - 1)) * 85 ** (4 - $i);
        }

        for ($i = 0; $i < $state - 1; ++$i) {
            $ouput .= chr($sum >> ((3 - $i) * 8));
        }
    }

    return $output;
}
function decodeFlate($input)
{
    return @gzuncompress($input);
}

function getObjectOptions($object)
{
    $options = [];
    if (preg_match('#<<(.*)>>#ismU', $object, $options)) {
        $options = explode('/', $options[1]);
        @array_shift($options);

        $o = [];
        for ($j = 0; $j < @count($options); ++$j) {
            $options[$j] = preg_replace("#\s+#", ' ', trim($options[$j]));
            if (false !== strpos($options[$j], ' ')) {
                $parts = explode(' ', $options[$j]);
                $o[$parts[0]] = $parts[1];
            } else {
                $o[$options[$j]] = true;
            }
        }
        $options = $o;
        unset($o);
    }

    return $options;
}
function getDecodedStream($stream, $options)
{
    $data = '';
    if (empty($options['Filter'])) {
        $data = $stream;
    } else {
        $length = !empty($options['Length']) ? $options['Length'] : strlen($stream);
        $_stream = substr($stream, 0, $length);

        foreach ($options as $key => $value) {
            if ('ASCIIHexDecode' == $key) {
                $_stream = decodeAsciiHex($_stream);
            }

            if ('ASCII85Decode' == $key) {
                $_stream = decodeAscii85($_stream);
            }

            if ('FlateDecode' == $key) {
                $_stream = decodeFlate($_stream);
            }
        }
        $data = $_stream;
    }

    return $data;
}
function getDirtyTexts(&$texts, $textContainers)
{
    for ($j = 0; $j < count($textContainers); ++$j) {
        if (preg_match_all("#\[(.*)\]\s*TJ#ismU", $textContainers[$j], $parts)) {
            $texts = array_merge($texts, @$parts[1]);
        } elseif (preg_match_all("#Td\s*(\(.*\))\s*Tj#ismU", $textContainers[$j], $parts)) {
            $texts = array_merge($texts, @$parts[1]);
        }
    }
}
function getCharTransformations(&$transformations, $stream)
{
    preg_match_all("#([0-9]+)\s+beginbfchar(.*)endbfchar#ismU", $stream, $chars, PREG_SET_ORDER);
    preg_match_all("#([0-9]+)\s+beginbfrange(.*)endbfrange#ismU", $stream, $ranges, PREG_SET_ORDER);

    for ($j = 0; $j < count($chars); ++$j) {
        $count = $chars[$j][1];
        $current = explode("\n", trim($chars[$j][2]));
        for ($k = 0; $k < $count && $k < count($current); ++$k) {
            if (preg_match("#<([0-9a-f]{2,4})>\s+<([0-9a-f]{4,512})>#is", trim($current[$k]), $map)) {
                $transformations[str_pad($map[1], 4, '0')] = $map[2];
            }
        }
    }
    for ($j = 0; $j < count($ranges); ++$j) {
        $count = $ranges[$j][1];
        $current = explode("\n", trim($ranges[$j][2]));
        for ($k = 0; $k < $count && $k < count($current); ++$k) {
            if (preg_match("#<([0-9a-f]{4})>\s+<([0-9a-f]{4})>\s+<([0-9a-f]{4})>#is", trim($current[$k]), $map)) {
                $from = hexdec($map[1]);
                $to = hexdec($map[2]);
                $_from = hexdec($map[3]);

                for ($m = $from, $n = 0; $m <= $to; $m++, $n++) {
                    $transformations[sprintf('%04X', $m)] = sprintf('%04X', $_from + $n);
                }
            } elseif (preg_match("#<([0-9a-f]{4})>\s+<([0-9a-f]{4})>\s+\[(.*)\]#ismU", trim($current[$k]), $map)) {
                $from = hexdec($map[1]);
                $to = hexdec($map[2]);
                $parts = preg_split("#\s+#", trim($map[3]));

                for ($m = $from, $n = 0; $m <= $to && $n < count($parts); $m++, $n++) {
                    $transformations[sprintf('%04X', $m)] = sprintf('%04X', hexdec($parts[$n]));
                }
            }
        }
    }
}
function getTextUsingTransformations($texts, $transformations)
{
    $document = '';
    for ($i = 0; $i < count($texts); ++$i) {
        $isHex = false;
        $isPlain = false;

        $hex = '';
        $plain = '';
        for ($j = 0; $j < strlen($texts[$i]); ++$j) {
            $c = $texts[$i][$j];
            switch ($c) {
                case '<':
                    $hex = '';
                    $isHex = true;
                    break;
                case '>':
                    $hexs = str_split($hex, 4);
                    for ($k = 0; $k < count($hexs); ++$k) {
                        $chex = str_pad($hexs[$k], 4, '0');
                        if (isset($transformations[$chex])) {
                            $chex = $transformations[$chex];
                        }

                        $document .= html_entity_decode('&#x' . $chex . ';');
                    }
                    $isHex = false;
                    break;
                case '(':
                    $plain = '';
                    $isPlain = true;
                    break;
                case ')':
                    $document .= $plain;
                    $isPlain = false;
                    break;
                case '\\':
                    $c2 = $texts[$i][$j + 1];
                    if (in_array($c2, ['\\', '(', ')'], true)) {
                        $plain .= $c2;
                    } elseif ('n' == $c2) {
                        $plain .= '\n';
                    } elseif ('r' == $c2) {
                        $plain .= '\r';
                    } elseif ('t' == $c2) {
                        $plain .= '\t';
                    } elseif ('b' == $c2) {
                        $plain .= '\b';
                    } elseif ('f' == $c2) {
                        $plain .= '\f';
                    } elseif ($c2 >= '0' && $c2 <= '9') {
                        $oct = preg_replace('#[^0-9]#', '', substr($texts[$i], $j + 1, 3));
                        $j += strlen($oct) - 1;
                        $plain .= html_entity_decode('&#' . octdec($oct) . ';');
                    }
                    ++$j;
                    break;

                default:
                    if ($isHex) {
                        $hex .= $c;
                    }

                    if ($isPlain) {
                        $plain .= $c;
                    }

                    break;
            }
        }
        $document .= "\n";
    }

    return $document;
}

function pdf2text($filename)
{
    $infile = @file_get_contents($filename, FILE_BINARY);
    if (empty($infile)) {
        return '';
    }

    $transformations = [];
    $texts = [];

    preg_match_all('#obj(.*)endobj#ismU', $infile, $objects);
    $objects = @$objects[1];

    for ($i = 0; $i < count($objects); ++$i) {
        $currentObject = $objects[$i];

        if (preg_match('#stream(.*)endstream#ismU', $currentObject, $stream)) {
            $stream = ltrim($stream[1]);

            $options = getObjectOptions($currentObject);
            if (!(empty($options['Length1']) && empty($options['Type']) && empty($options['Subtype']))) {
                continue;
            }

            $data = getDecodedStream($stream, $options);
            if (strlen($data)) {
                if (preg_match_all('#BT(.*)ET#ismU', $data, $textContainers)) {
                    $textContainers = @$textContainers[1];
                    getDirtyTexts($texts, $textContainers);
                } else {
                    getCharTransformations($transformations, $data);
                }
            }
        }
    }

    return getTextUsingTransformations($texts, $transformations);
}
//---------------PDF reader end

// ------------------------------------------------------------------------
// End of file language_helper.php
// Location: ./system/helpers/language_helper.php

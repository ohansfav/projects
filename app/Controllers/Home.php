<?php

namespace App\Controllers;

// edited start
use codeigniter\Controller;
use App\Models\MemberModel;
use App\views\alert;
use Error;

// edited ends

class Home extends BaseController
{
    // protected $usermail;
    public function index(): string
    {
        return view('home');
    }


    public function home(): string
    {
        return view('home');
    }
    public function about(): string
    {
        echo view('header');
        echo view('about');
        return view('footer');
    }

    public function contact(): string
    {
        echo view('header');
        echo view('contact');
        return view('footer');
    }

    public function map(): string
    {
        echo view('header');
        echo view('map');
        return view('footer');
    }

    public function register(): string
    {
        echo view('header');
        echo view('register');
        return view('footer');

        
    }
    public function welcome_message(): string
    {
        echo view('header');
        echo view('welcome_message');
        return view('footer');

        
    }

    public function alert(): string
    {
        return view('alert');   
    }

    public function sweetalert_notification(): string
    {
        return view('alert');   
    }

    public function dashboard(): string
    // or loginnow
    {
        echo view('header');
        echo view('dashboard');
        return view('footer');
    }

    public function addbook()
    {
        if(isset($_SESSION['user_id']) == false){
            $this->toaster->error('You need to login to view this page.');
            return redirect()->to(base_url() . 'signin');
        }
        echo view('header');
        echo view('addbook');
        return view('footer');
    }

    public function signin():string
    {
        echo view('header');
        echo view('signin');
        return view('footer');
    }


    public function signin_now()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        if (empty($email)) {
            $this->toaster->error('Please enter a valid email address');
            return redirect()->to(base_url() . 'signin');
        }

        if (empty($password)) {
            $this->toaster->error('Please enter a valid password');
            return redirect()->to(base_url() . 'signin');
        }

        // here

        $member_model = new \App\Models\MemberModel();
        $member_model->where("email", $email);
        $check_data = $member_model->first();

        if(!empty($check_data)) {
            $check_verify = password_verify($password, $check_data->password);

            if($check_verify == true) {
                $_SESSION['name'] = $check_data->first_name . " " .$check_data->last_name;
                $_SESSION['email'] = $check_data->email;
                $_SESSION['user_id'] = $check_data->id;
                $_SESSION['logged_in'] = true;
                $this->toaster->success('Welcome to your dashboard');
                return redirect()->to(base_url() . 'dashboard');
            }

        }

        $this->toaster->error('Incorrect email or password');
        return redirect()->to(base_url() . 'signin');


    }


    public function admindash(): string
    {
        return view('admindash');

    }

    // upload image
    // function do_upload()
    // {
    //     $config['upload_path'] = './uploads/';
    //     $config['allowed_types'] = 'gif|jpg|png';
    //     $config['max_size'] = '100';
    //     $config['max_width']  = '1024';
    //     $config['max_height']  = '768';
    //     $config['overwrite'] = TRUE;
    //     $config['encrypt_name'] = FALSE;
    //     $config['remove_spaces'] = TRUE;
    //     if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
    //     $this->load->library('upload', $config);
    //     if ( ! $this->upload->do_upload('userfile')) {
    //         echo 'error';
    //     } else {

    //         return array('upload_data' => $this->upload->data());
    //     }
    // }

    public function submit_register()
    {

        $membermodel = new MemberModel();
        // $db = db_connect();
        // $db->transStart();

        // session_start();

        $first_name = $this->request->getVar('first_name');
        $last_name = $this->request->getVar('last_name');
        $email = $this->request->getVar('email');
        $phone = $this->request->getVar('phone');
        $dob = $this->request->getVar('dob');
        $password = $this->request->getVar('password');
        $nationality= $this->request->getVar('nationality');
        $country= $this->request->getVar('country');
        $state = $this->request->getVar('state');
        $city = $this->request->getVar('city');
        $gender = $this->request->getVar('gender');
        $house_no = $this->request->getVar('house_no');
        $street_name = $this->request->getVar('street_name');
        $town = $this->request->getVar('town');
        $nearest_landmark = $this->request->getVar('nearest_landmark');
        $mat_no = $this->request->getVar('mat_no');
        $level = $this->request->getVar('level');
        $faculty = $this->request->getVar('faculty');
        $department = $this->request->getVar('department');
        $verify_email = $this->request->getVar('verify_email');
        $bank_name = $this->request->getVar('bank_name');
        $account_name = $this->request->getVar('account_name');
        $account_no = $this->request->getVar('account_no');
        $additional_info = $this->request->getVar('additional_info');
        $activated = $this->request->getVar('activated');
        $blocked = $this->request->getVar('blocked');

        $usermail = $email;

        if ($email == ""){
            $this->toaster->error("Email is required");
            return redirect()->to('/register');
        }

        if($last_name == ""){
            $this->toaster->error("Please enter last name!");
            return redirect()->to(base_url() . 'register');
        }

        if ($first_name == ""){
            $this->toaster->error("Please enter first name!");
            return redirect()->to(base_url() . 'register');
        }

        if ($phone == null){
            $this->toaster->error("Please enter phone number!");
            return redirect()->to(base_url() . 'register');
        }

        if ($mat_no == ""){
            $this->toaster->error("Please enter matric number!");
            return redirect()->to(base_url() . 'register');
        }
        if ($nationality == ""){
            $this->toaster->error("Please enter nationality!");
            return redirect()->to(base_url() . 'register');
            
        }
        
        $password_open = random_string();

        $password = password_hash($password_open, PASSWORD_DEFAULT);


        // first and last, phone, matricno..
        if ($first_name)

        $data = [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
            'phone' => $phone,
            'dob' => $dob,
            'password' => $password,
            'nationality' => $nationality,
            'country' => $country,
            'state' => $state,
            'city' => $city,
            'gender' => $gender,
            'house_no' => $house_no,
            'street_name' => $street_name,
            'town' => $town,
            'nearest_landmark' => $nearest_landmark,
            'mat_no' => $mat_no,
            'level' => $level,
            'faculty' => $faculty,
            'department' => $department,
            'verify_email' => $verify_email,
            'bank_name' => $bank_name,
            'account_name' => $account_name,
            'account_no' => $account_no,
            'additional_info' => $additional_info,
            'activated' => $activated,
            'blocked' => $blocked,


        ];
            // $this->$usermail = $email;



        $user_id = $membermodel->save($data);
        // $user_id = $membermodel->save($data);

        


        if ($user_id == true) {
            $this->toaster->success('Dear ' . $data['first_name'] . ',  Your registration was successfully!');
            $usermail = $email;



            $maildata = [
                'userid' => $user_id,
                'toname' => $first_name . " " . $last_name,
                'message' => "This is just a notification that your account has been created. You can now sign in to your account using your email address and this password = $password_open and enjoy all the available features. <br><br>Cheers with love from the elibrary team.",
                'subject' => "Your new elibrary account has been created!",
            ];

            $emaildata = [
                'to' => $data['email'],
                'subject' => "Your elibrary log in data",
                'fromEmail' => "no-reply@elibrary.in",
                'fromName' => "eLibrary Account Setup",
                'message_view' => 'plainmail.php',
                'messagedata' => $maildata,
            ];
            // $result = $this->send_email->build($emaildata);
            // $result = $emaillib->build($emaildata);
            $result = $this->send_email->build($emaildata);

            // $result - $this->send($emaildata)

            if ($result) {
                $this->toaster->success('An email has been sent to '. $data['email'].' with your account details');
            } else {
                $this->toaster->error('Failed to send email');
            }
            return redirect()->to(base_url() . 'signin');

                //         // Email configuration
                // $config = [
                //     'protocol' => 'smtp',
                //     'SMTPHost' => 'smtp.gmail.com', // Your SMTP server
                //     'SMTPUser' => '$email', // Your email
                //     'SMTPPass' => '', // Your email password
                //     'SMTPPort' => 587, // Usually 587 or 465 for SSL
                //     'mailType' => 'html',
                //     'charset'  => 'utf-8',
                //     'wordWrap' => true,
                // ];

                // // Load email library with config
                // $email = new Email($config);
                // $this->submit_register();
                
                // // return $this->$email;

                // $email->setFrom('library@elibrary', 'elibrary');
                // $email->setTo($usermail);
                // $email->setSubject('Test Email from CodeIgniter');
                // $email->setMessage(view('email_template'));

                // // Send email and check for success
                // if ($email->send()) {
                //     return 'Email sent successfully!';
                // } else {
                //     return 'Email not sent. Error: ' . $email->printDebugger(['headers']);
                // }


            // $email = \Config\Services::email();

            // $email->setFrom('your-from-email@example.com', 'Your Name');
            // $email->setTo('recipient-email@example.com');
            // $email->setSubject('Email Subject');
            // $email->setMessage($this->load->view('email/email_template', [], true));
            // $email->send();


                    // // SET DATA FOR EMAIL HEADERS
                    // $maildata = [
                    //     'userid' => $user_id,
                    //     'toname' => $first_name . " " . $last_name,
                    //     'message' => "This is just a notification that your account has been created. You can now sign in to your account using your email address and this password =" . $password_open . "and enjoy all the available features. <br> <br>Cheers with love from the elibrary team.",
                    //     'subject' => "Your new elibrary account has been created!",
                        
                    // ];


                    // $emaildata = [
                    //     'to' => $email,
                    //     'subject' => "Your elibrary log in data",
                    //     'fromEmail' => "no-reply@elibrary.in",
                    //     'fromName' => "eLibrary Account Setup",
                    //     'message_view' => 'plainmail.php',
                    //     'messagedata' => $maildata,
                    // ];

                    // // SEND DATA TO SEND EMAIL LIBRARY
                    // $result =  $this->$maildata->build($emaildata);

                    // if ($result) {
                    //     $this->toaster->success('Account created successfully. Email notification sent.');
                    //     rat("New account created");
                    // } else {
                    //     $this->toaster->error('Account creation mail failed, please try again later.');
                    // }

        // } else {
        //     $this->toaster->error('Student Registration Failed');
        // }
        // return redirect()->to(base_url() . 'register');
        
        //for mine
        // if ($_SESSION == true) {
        //     echo " Thanks for registering";
        //     $_SESSION['SUCCESS'] = "Thanks for registering\n". $first_name ." ". $last_name;

        //     $session = \config\Services::session();
        //     $session->setFlashdata('SUCCESS', $first_name ." ". $last_name . " Thanks for registering");
        // }
        // elseif ($_SESSION =! true) {
        //     echo "wrong input";
        // }
        // else{
        //     if ($_SESSION =! true && $_SESSION =! false){
        //         echo " how is that even posssible?";
        //     }
        // };

        // return redirect()->to(base_url() . '/');
        
    }

//     public function send_email()
// {
//     $this->load->library('email');

//     $this->email->from('your_email_address', 'Your Name');
//     $this->email->subject('Your Email Subject');
//     $this->email->message('Your email message');

//     $this->email->attach('path/to/your/file.PNG');

//     if (!$this->email->send()) {
//         show_error($this->email->print_debugger());
//     }


    }

    public function logout()
    {
        
        if(isset($_SESSION['user_id']) == false){
            $this->toaster->error('You need to login to view this page.');
            return redirect()->to(base_url() . 'signin');
        }

        session_destroy();
        return redirect()->to(base_url() . 'home');

    }

    public function login_page()
    {

        echo view('header');
        echo view('login_page');
        return view('footer');
    }

    public function mybooks()
    {
        
        if(isset($_SESSION['user_id']) == false){
            $this->toaster->error('You need to login to view this page.');
            return redirect()->to(base_url() . 'signin');
        }

        echo view('header');
        echo view('mybooks');
        return view('footer');
    }

    public function addbook_now()
    {
        
        if(isset($_SESSION['user_id']) == false){
            $this->toaster->error('You need to login to view this page.');
            return redirect()->to(base_url() . 'login');
        }
        
        $title = $this->request->getVar('title');
        $category = $this->request->getVar('category');
        $book_type = $this->request->getVar('book_type');

        $uploaded_book = $this->request->getFile('bookfile');
        $file_path = 'uploads/books/';
        $file_name = $title . $_SESSION['user_id'] . "_book." . $uploaded_book->getClientExtension();

        if ($uploaded_book->isValid()) {

            $megabytes = $uploaded_book->getSizeByUnit('mb');

            if ($megabytes > 10) {

                $this->toaster->error("This file is too large, upload a file under 1MB (resize images to smaller resolutions please) ");
                return redirect()->to(base_url() . '/dashboard');

            }

            if (is_file($file_path . $file_name)) {
                unlink($file_path . $file_name);
            }

            $uploaded_book->move($file_path, $file_name);
        }


        $author = $_SESSION['user_id'];

        $data = [
            "title"=>$title,
            "category"=>$category,
            "book_type"=>$book_type,
            "author"=>$author,
            "bookfile"=>$file_path . $file_name
        ];

        $books_model = new \App\Models\BooksModel();
        $books_model->save($data);

        $this->toaster->success("Your book $title uploaded successfully");
        return redirect()->to(base_url() . 'mybooks');

    }



}

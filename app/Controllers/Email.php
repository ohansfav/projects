<?php
// ADEL CODEIGNITER 4 CRUD GENERATOR

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\I18n\Time;

class Email extends BaseController
{
    protected $validation;
    
    public function __construct()
    {
        $this->validation =  \Config\Services::validation();
    }
    

    public function send()
    {
        $accesscode =  $this->request->getVar('vercheck');
        $accesscode_ans =  $this->request->getVar('vercheck_answer');

        //pr(date("dm"));
       // exit("KKKKKKKKKKKKKKK");

        if ($accesscode != $accesscode_ans) {
            exit(json_encode(["success"=>0, "msg"=>"Incorrect verification answer. Try again please!"]));
        }

        $subj = "Create an email for ";
        $msg = "Email request details<br>=====================";
        
        $sender = send_mail("support@fmcasaba.wifi", "Email Request Submission", "info@fmcasaba.wifi",$subj, $msg );
		if($sender){
            exit(json_encode(["success"=>1, "msg"=>"Submitted! We will get back to you as soon as humanly possible!"]));
        }else{
            exit(json_encode(["success"=>0, "msg"=>"For some awkward reason the submission was unsuccessful. Please try again later!"]));
        }
        
		
    }
}

<? php
defined('BASEPATH') OR exit('No direct script access allowed');
use PHPMailer\Message\PHPMailer;
use PHPMailer\Message\Exception;

class PHPMailer_Lib
{
    public function __construct(){
        log_message('debug', 'PHPMailer class is loaded');
    }

    public function load(){
        require_once APPPATH.'third_party/mailer/src/Exception.php';
        require_once APPPATH.'third_party/mailer/src/PHPMailer.php';
        require_once APPPATH.'third_party/mailer/src/SMTP.php';

        $mail = new PHPMailer();
        return $mail;
    }
}
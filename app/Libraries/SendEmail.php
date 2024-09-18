<?php

namespace App\Libraries;

use CodeIgniter\Config\Services;

/**
 * SendEmail
 */
class SendEmail
{

    /**
     * build
     *
     * @param  array $emaildata
     * @return bool
     */
    public function build(array $emaildata): bool
    {
        $email = Services::email();

        $config['mailType'] = "html";

        $email->initialize($config);

        $email->setTo($emaildata['to']);
        $email->setFrom($emaildata['fromEmail'], $emaildata['fromName']);
        $email->setSubject($emaildata['subject']);
        $email->setMessage(view('emails/' . $emaildata['message_view'], $emaildata['messagedata']));

        if (!$email->send()) {
            
            $this->error = 'Email not sent';
            return false;
        }

        return true;
    }
}
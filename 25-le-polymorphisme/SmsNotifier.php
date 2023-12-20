<?php 
namespace App;
class SmsNotifier implements NotifierInterface{
    public function send($to)
    {
        echo 'Sending sms to '. $to.php_eol;
    }
}

?>
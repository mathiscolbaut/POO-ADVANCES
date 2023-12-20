<?php 
namespace App;
class SmsNotifier{
    public function send($to)
    {
        echo 'Sending sms to '. $to.php_eol;
    }
}

?>
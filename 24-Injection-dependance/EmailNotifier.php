<?php 
namespace App;
class EmailNotifier{
    public function send($to)
    {
        echo 'Sending email to '. $to.php_eol;
    }
}

?>
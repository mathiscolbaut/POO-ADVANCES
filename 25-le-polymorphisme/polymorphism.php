<?php
require_once 'vender/autoload.php';
$order = new \App\Order();
$orderController = new \App\OrderController();

$notifier = new App\SmsNotifier();
$orderController->create($order, $notifier);
?>
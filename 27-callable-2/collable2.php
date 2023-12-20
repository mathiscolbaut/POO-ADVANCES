<?php
require_once 'vendor/autoload.php';

$listener = fn ($order) => print 'Sending confirmation to' . $order->getOrdere().PHP_EOL;

$order = new \App\Order();

$orderPlacedEvent = new \App\Event\OrderPlaced();

$orderPlacedEvent->registerListener([new \App\Listener\OrderNotificationMailer(), 'send']);
$orderPlacedEvent->registerListener($listener);
$orderPlacedEvent->register(new \App\Listener\OrderLogger());

$orderPlacedEvent->trigger($order);
?>

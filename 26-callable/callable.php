<?php
require_once 'vender/autoload.php';

$listener = static function (\App\Order $order)
{
    echo 'Sendin confirmation to ' .$order->getOrderer().PHP_EOL;
};

$order = new \App\Order();

$orderPlacedEvent = new \App\Event\OrderPlaced();
$orderPlacedEvent->registerListenener($listener);

$orderPlacedEvent->trigger($order);

?>

<?php
namespace App;
class OrderController
{
    public function create(Order $order, NotifierInterface $notifier)
    {
        echo 'saving order to the db'.PHP_EOL;
        $customer = $order->getOrderer();

        $notifier->send($customer);
    }
}
?>
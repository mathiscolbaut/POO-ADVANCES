<?php
namespace App\Listener;
class OrderNotificationMailer
{
    public function send(\App\Order $order)
    {
        print 'Order notification sent to '. $order->getOrderer();
    }
}
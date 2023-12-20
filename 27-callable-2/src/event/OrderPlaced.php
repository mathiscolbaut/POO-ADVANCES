<?php
namespace App\Event;
use App\Order;
class OrderPlaced{
    private array $listeners = [];

    public function registerListener(callable $listener):void
    {
        $this->listeners[]=$listener
    }

    public function trigger(Order $order):void{
        foreach ($this->listeners as $listener) {
            # code...
            $listener($order);
        }
    }

}
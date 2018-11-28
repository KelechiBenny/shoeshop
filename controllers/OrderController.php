<?php
namespace Controllers;

use Models\Order;

class OrderController
{

   

    public function index()
    {
    	$orders = Order::all();

    	return $orders;
    }

   
}
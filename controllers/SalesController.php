<?php
namespace Controllers;

use Models\Buy;

class SalesController extends BuyController
{

    public function view()
    {
        // die('here');
        // (new Buy)->fees();
        
        $buy = new BuyController;
        $buy->sell();
    }

    
}


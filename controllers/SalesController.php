<?php
namespace Controllers;

use Models\Buy;

class SalesController extends BuyController
{

    public function view()
    {
        // (new Buy)->fees();
        
        $buy = new BuyController;
        $buy->sell();
    }

    
}

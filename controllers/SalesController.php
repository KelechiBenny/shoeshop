<?php
namespace Controllers;

use Models\Buy;

class SalesController extends BuyController
{

    public function view()
    {
        // die('here');
        //(new Buy)->view();
        //$this->sale();

        $buy = new BuyController;
        $buy->sale();
    }

    
}
<?php
namespace Controllers;

use Models\Buy;

class BuyController
{

    public function view()
    {
        // die('here');
        (new Buy)->fees();
    }
    
    protected function sell(){

        die("#100");
    }
}
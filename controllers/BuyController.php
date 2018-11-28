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

    public function sell(){
        die("100 naira");
    }

    protected function sale()
    {   
        die('#100');
    }
}
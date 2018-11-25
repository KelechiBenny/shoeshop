<?php
namespace Controllers;

use Models\Buy;

class BuyController
{

    public function view()
    {
        // die('here');
        (new Buy)->view();
    }
}
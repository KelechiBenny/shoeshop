<?php
namespace Controllers;

use Models\Buy;
use Illuminate\Database\Eloquent\Model;

class BuyController
{

    public function view()
    {
        // die('here');
        (new Buy)->view();
    }
}
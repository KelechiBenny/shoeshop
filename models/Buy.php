<?php
namespace Models;

class Buy extends Connection
{

    function __construct()
    {
        $this->conn = $this->getConnection();
    }
    
    public function view()
    {
        die('here');
    }
}
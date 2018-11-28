<?php
namespace Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

use Models\User;

class Order extends Eloquent
{

    function __construct()
    {
        $this->conn = $this->getConnection();
    }
    
    
    public function user()
    {
    	 return $this->belongsTo(User::class);
    }
}
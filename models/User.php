<?php

namespace Models;
use Illuminate\Database\Eloquent\Model as Eloquent;
use Models\Order;

class User extends Eloquent
{

	public $timestamps = false;

	protected $fillable = ['fullname', 'email', 'password'];

    function __construct()
    {
        $this->conn = $this->getConnection();
    }
    
   
    public function order()
	{
		return $this->hasMany(Order::class);
	}    
}
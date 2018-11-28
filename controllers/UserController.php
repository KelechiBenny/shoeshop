<?php

namespace Controllers;


use Models\User;


class UserController
{

    public function index()
    {
    	$users = User::all();

    
    	return $users;
    }

    public function findOrder($id){

    	$users = User::find($id);

    	return $users->order;
    }

    
}
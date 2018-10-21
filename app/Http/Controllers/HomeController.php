<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\role;
use App\country;

class HomeController extends Controller
{
    public function index()
    {
    	$user = user::find(1)->passport;
    	return $user;
    }

    public function mobile()
    {
    	$numbers = user::find(1)->numbers;
    	return $numbers;
    }

    public function roles()
    {
        $roles = user::find(1)->roles;
        return $roles;
    }

    public function user()
    {
        //$users = role::find(1)->users;
        $users = country::all();
        return $users;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\event\userCreated;
class UsersAuth extends Controller
{
    //
    public function index()
    {
    	event(new UserCreated("your account has been send"));
    }
}

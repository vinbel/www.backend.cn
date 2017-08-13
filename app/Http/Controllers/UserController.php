<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class UserController extends Controller
{
    //
    public function login() {
        return view('user.login');
    }

    public function postLogin() {
        print_r($_POST);
        Cookie::
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.dashboard_user');
    }
    public function forms()
    {
        return view('user.forms');
    }
    public function transcript()
    {
        return view('user.transcript');
    }
}

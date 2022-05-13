<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
        return view('auth.dashboard.home');
    }

    public function profile(){
        return view('auth.dashboard.profile');
    }

    public function history(){
        return view('auth.dashboard.history');
    }

    public function privacy(){
        return view('auth.dashboard.privacy');
    }
}

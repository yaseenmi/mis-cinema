<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function movie()
    {
        return view('admin.movie.index');
    }
    public function seat()
    {
        return view('admin.seat.index');
    }
    public function screen()
    {
        return view('admin.screen.index');
    }
    public function user()
    {
        return view('admin.user.index');
    }
    public function statistics()
    {
        return view('admin.index');
    }
}

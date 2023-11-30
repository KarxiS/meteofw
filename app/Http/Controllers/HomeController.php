<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function contact()
    {
        return view('contact');
    }
    public function devices()
    {
        return view('devices');
    }
}
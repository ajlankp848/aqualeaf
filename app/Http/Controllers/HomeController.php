<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('about');
    }
    public function services()
    {
        return view('service');
    }
    public function team()
    {
        return view('team');
    }
    public function contact()
    {
        return view('contact');
    }
}

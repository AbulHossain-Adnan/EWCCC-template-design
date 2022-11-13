<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function register() {
        return view('auth/register');
    }

    public function resources() {
        return view('resources');
    }
     public function job_area() {
        return view('pages/job_area');
    
    }
    public function multimedia() {
        return view('pages/multimedia');
    
    }
}

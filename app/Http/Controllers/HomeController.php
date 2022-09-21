<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        return view('home',
        ['user' => $user],['type_menu' => '']);
    }

    public function profile()
    {
        $user = Auth::user();
        return view('profile',
        ['user' => $user],['type_menu' => 'features']);
    }

    public function activity()
    {
        $user = Auth::user();
        return view('activity',
        ['user' => $user],['type_menu' => 'features']);
    }
    
}
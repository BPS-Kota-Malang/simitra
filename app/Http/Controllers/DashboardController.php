<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function general_dashboard()
    {
        $user = Auth::user();
        return view('dashboard.general_dashboard',
        ['user' => $user],['type_menu' => 'dashboard']);
    }

    public function survey_dashboard()
    {
        $user = Auth::user();
        return view('dashboard.survey_dashboard',
        ['user' => $user],['type_menu' => 'dashboard']);
    }

    public function rekrutment_dashboard()
    {
        $user = Auth::user();
        return view('dashboard.rekrutment_dashboard',
        ['user' => $user],['type_menu' => 'components']);
    }


    
}

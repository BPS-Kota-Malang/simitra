<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
use Auth;

class DaftarSurveyController extends Controller
{
    public function daftarSurvey() {

        $user = Auth::user();
        $kegiatan = Kegiatan::all();

        return view('daftar_survey.index', compact('kegiatan'),['user' => $user, 'type_menu' => '']);
    }
}

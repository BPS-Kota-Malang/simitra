<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
use App\Models\SubKecamatan;
use App\Models\Kecamatan;
use Auth;

class DaftarSurveyController extends Controller
{
    public function daftarSurvey() {

        $user = Auth::user();
        $kegiatan = Kegiatan::all();
        $sub_kecamatan = SubKecamatan::all();
        $kecamatan = Kecamatan::all();

        return view('daftar_survey.index', compact('kegiatan','sub_kecamatan','kecamatan'),
            ['user' => $user, 'type_menu' => '']);
    }
}

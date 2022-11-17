<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
use App\Models\SubKecamatan;
use App\Models\Kecamatan;
use App\Models\Product;
use App\Models\Nilai;
use Auth;
use App\Models\User;

class DaftarSurveyController extends Controller
{
    public function daftarSurvey() {

        $user = Auth::user();
        $kegiatan = Kegiatan::all();
        $sub_kecamatan = SubKecamatan::all();
        $kecamatan = Kecamatan::all();
        $products = Kegiatan::join('products','kegiatan.id_products','=','products.id')
            ->select('kegiatan.id as id_kegiatan','products.name as name' , 'kegiatan.jenis as jenis' , 'kegiatan.tanggal as tanggal')
            ->get();

        return view('daftar_survey.index', compact('sub_kecamatan','kecamatan','products'),
            ['user' => $user, 'type_menu' => '']);
    }

    public function saveGuest(Request $request){
        // dd($request->all());

        $user = Auth::user();

        $nilai = new Nilai();
        $
        $nilai->id_kegiatan=$request->name;
        $nilai->id_kecamatan=$request->kecamatan;
        $nilai->id_sub_kecamatan=$request->sub_kecamatan;
        $nilai->save();

        // Alert::success("Success", "Terimakasih  $name  Sudah menggunakan layanan kami");
        return view('daftar_survey.index', compact('nilai','user'), ['user' => $user, 'type_menu' => '']);
    }
}

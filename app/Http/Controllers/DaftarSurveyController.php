<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
use App\Models\SubKecamatan;
use App\Models\Kecamatan;
use App\Models\Product;
use App\Models\Nilai;
use App\Models\Pembayaran;
use App\Models\Pendaftar;
use Auth;
use Alert;
use App\Models\User;

class DaftarSurveyController extends Controller
{
    public function daftarSurvey() {

        $user = Auth::user();
        $kegiatan = Kegiatan::all();
        $sub_kecamatan = SubKecamatan::all();
        $kecamatan = Kecamatan::all();
        $products = Kegiatan::join('products','kegiatan.id_products','=','products.id')
            ->select('kegiatan.id as id_kegiatan','products.name as name' , 'kegiatan.jenis as jenis' , 'kegiatan.gaji as gaji' ,
            'kegiatan.jenis_mitra as jenis_mitra','kegiatan.tanggal as tanggal')
            ->get();

        return view('daftar_survey.index', compact('sub_kecamatan','kecamatan','products'),['user' => $user, 'type_menu' => '']);
    }

    public function saveGuest(Request $request){

        $user = Auth::user();

        $nilai = new Nilai();
        $nilai->id_users=$user->id;
        $nilai->id_kegiatan=$request->kegiatan;
        $nilai->id_kecamatan=$request->kecamatan;
        $nilai->id_sub_kecamatan=$request->sub_kecamatan;
        $nilai->save();

        $pembayaran = new Pembayaran();
        $pembayaran->id_users=$user->id;
        $pembayaran->id_kegiatan=$request->kegiatan;
        $pembayaran->id_kecamatan=$request->kecamatan;
        $pembayaran->id_sub_kecamatan=$request->sub_kecamatan;
        $pembayaran->gaji=$request->gaji;
        $pembayaran->save();

        Alert::success("Success", "Pendaftaran Berhasil");
        return redirect('/daftar_survei');
    }
}

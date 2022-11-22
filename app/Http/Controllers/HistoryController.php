<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Kegiatan;
use App\Models\SubKecamatan;
use App\Models\Kecamatan;
use App\Models\Product;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function history()
    {
        $user = Auth::user();
        $kegiatan = Kegiatan::all();
        $sub_kecamatan = SubKecamatan::all();
        $kecamatan = Kecamatan::all();
        $products = Kegiatan::join('products','kegiatan.id_products','=','products.id')
            ->select('kegiatan.id as id_kegiatan','products.name as name' , 'kegiatan.jenis as jenis' , 'kegiatan.tanggal as tanggal')
            ->get();

        return view('history.index', compact('sub_kecamatan','kecamatan','products'),
            ['user' => $user, 'type_menu' => '']);
    }

   
}

<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\KegiatanRequest;
use App\Models\Kegiatan;
use App\Models\Product;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $kegiatan = Kegiatan::all();
        $products = Product::all();
        return view('kegiatan.index',compact('kegiatan','products'),['user' => $user, 'type_menu' => ''])
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $kegiatan = Kegiatan::all();
        $products = Product::all();
        return view('kegiatan.create', compact('kegiatan','products'), ['user' => $user, 'type_menu'=> '']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KegiatanRequest $request)
    {
        Kegiatan::create($request->all());

        return redirect()->route('kegiatan.index')->with('success','Data Kegiatan Survei Berhasil Dibuat');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();
        $kegiatan = Kegiatan::find($id);
        $products = Product::find($id);
        return view('kegiatan.show', compact('kegiatan','products'),['user' => $user, 'type_menu' => '']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        $products = Product::all();
        $kegiatan = Kegiatan::find($id);
        return view('kegiatan.edit', compact('kegiatan','products'),['user' => $user, 'type_menu' => '']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KegiatanRequest $request, $id)
    {
        $kegiatan= Kegiatan::with('product')->find($id);
        $kegiatan->id_products=$request->id_products;
        $kegiatan->jenis=$request->jenis;
        $kegiatan->tanggal=$request->tanggal;

        $kegiatan->save();
        return redirect()->route('kegiatan.index')->with('success', 'Data Kegiatan Survei Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kegiatan  = Kegiatan::find($id);
        $kegiatan ->delete();


        return redirect()->route('kegiatan.index')
                        ->with('success','Data Kegiatan Survei Berhasil Dihapus');
    }
}

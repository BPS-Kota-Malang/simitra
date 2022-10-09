<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubKecamatanRequest;
use App\Http\Requests\KecamatanRequest;
use App\Models\Kecamatan;
use App\Models\SubKecamatan;
use Auth;

class SubKecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $user = Auth::user();
        $sub_kecamatan = SubKecamatan::all();
        $kecamatan = Kecamatan::all();
        return view('sub_kecamatan.index',compact('sub_kecamatan','kecamatan'), ['user' => $user, 'type_menu' => 'components']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        $user = Auth::user();
        $kecamatan = Kecamatan::all();
        $sub_kecamatan = SubKecamatan::all();
        return view('sub_kecamatan.create',compact('kecamatan','sub_kecamatan'), ['user' => $user, 'type_menu' => 'components']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubKecamatanRequest $request)
    {
        SubKecamatan::create([
            'sub_kecamatan' => $request->sub_kecamatan,
            'id_kecamatan' => $request->id_kecamatan,
        ]);

        return redirect()->route('sub_kecamatan.index')->with('status', 'Data Kelurahan Berhasil Disimpan');
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
        $sub_kecamatan = SubKecamatan::find($id);
        $kecamatan = Kecamatan::find($id);
        return view('sub_kecamatan.show', compact('kecamatan','sub_kecamatan'),['user' => $user, 'type_menu' => 'components']);
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
        $kecamatan= Kecamatan::all();
        $sub_kecamatan= SubKecamatan::find($id);
        return view('sub_kecamatan.edit', compact('sub_kecamatan','kecamatan'),['user' => $user, 'type_menu' => 'components']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubKecamatanRequest $request, $id)
    {
        $sub_kecamatan= SubKecamatan::with('guestKecamatan')->find($id);
        $sub_kecamatan->sub_kecamatan=$request->sub_kecamatan;
        $sub_kecamatan->id_kecamatan=$request->id_kecamatan;

        $sub_kecamatan->save();

        return redirect()->route('sub_kecamatan.index')->with('status', 'Data Kelurahan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sub_kecamatan  = SubKecamatan::find($id);
        $sub_kecamatan ->delete();

        return redirect()->route('sub_kecamatan.index')->with('status', 'Data Kelurahan Berhasil Dihapus');
    }
}

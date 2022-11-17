<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\User;
use App\Models\Kecamatan;
use App\Models\SubKecamatan;
use Illuminate\Http\Request;
use Auth;
use DB;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        $nilai = Nilai::all();
        return view('nilai.index', compact('nilai'), ['user' => $user, 'type_menu' => 'dashboard']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $nilai = Nilai::all();
        return view('nilai.create', compact('nilai'),['user' => $user, 'type_menu' => 'dashboard']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Nilai::create($request->only(['nilai_ketepatan' , 'nilai_kualitas', 'nilai_sikap']));
        return redirect()->route('nilai.index')->with('success', 'Nilai berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $nilai = Nilai::find($id);
        return view('nilai.edit', compact('nilai'),['user' => $user, 'type_menu' => 'dashboard']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nilai= Nilai::find($id);
        $nilai->nilai_ketepatan=$request->nilai_ketepatan;
        $nilai->nilai_kualitas=$request->nilai_kualitas;
        $nilai->nilai_sikap=$request->nilai_sikap;

        $nilai->save();
        return redirect()->route('nilai.index')->with('success', 'Data Nilai berhasil di Simpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nilai  = Nilai::find($id);
        $nilai ->delete();
        return redirect()->route('nilai.index')
                        ->with('success','Data Nilai Berhasil Dihapus');
    }
}

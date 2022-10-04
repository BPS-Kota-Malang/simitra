<?php

namespace App\Http\Controllers;

use App\Http\Requests\KecamatanRequest;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use Auth;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $data = Kecamatan::paginate(10);
        return view('kecamatan.index', compact('data'),['user' => $user, 'type_menu' => 'components']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KecamatanRequest $request)
    {
        Kecamatan::create($request->only(['name']));
        return redirect()->route('kecamatan.index')->with('success', 'Data Kecamatan Berhasil Disimpan');
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
        $data = Kecamatan::findOrFail($id);
        return view('kecamatan.edit', compact('data'), ['user' => $user, 'type_menu' => 'components']);
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
        Kecamatan::findOrFail($id)->update($request->only(['name']));
        return redirect()->route('kecamatan.index')->with('success', 'Data Kecamatan Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kecamatan::findOrFail($id)->delete();
        return redirect()->route('kecamatan.index')->with('success', 'Data Kecamatan Berhasil Dihapus');
    }
}

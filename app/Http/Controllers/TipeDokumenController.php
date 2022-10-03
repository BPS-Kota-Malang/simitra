<?php

namespace App\Http\Controllers;

use App\Http\Requests\TipeRequest;
use App\Models\TipeDokumen;
use Illuminate\Http\Request;
use Auth;

class TipeDokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $data = TipeDokumen::paginate(10);
        return view('tipe.index', compact('data'),['user' => $user, 'type_menu' => 'components']);
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
    public function store(TipeRequest $request)
    {
        TipeDokumen::create($request->only(['name']));
        return redirect()->route('tipe_dokumen.index')->with('success', 'Jenis Dokumen berhasil disimpan');
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
        $data = TipeDokumen::findOrFail($id);
        return view('tipe.edit', compact('data'), ['user' => $user, 'type_menu' => 'components']);
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
        TipeDokumen::findOrFail($id)->update($request->only(['name']));
        return redirect()->route('tipe_dokumen.index')->with('success', 'Jenis Dokumen berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TipeDokumen::findOrFail($id)->delete();
        return redirect()->route('tipe_dokumen.index')->with('success', 'Jenis Dokumen berhasil dihapus');
    }
}

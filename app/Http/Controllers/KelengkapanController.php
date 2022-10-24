<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelengkapan;
use App\Models\User;
use App\Models\TipeDokumen;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class KelengkapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        $tipe = TipeDokumen::all();

        if ($request->keywords) {
            $key = $request->keywords;
            $data = Kelengkapan::whereYear('created_at', $key)
                ->with('user', 'tipe')->paginate(10);
            $data->appends(['keywords' => $key]);
            return view('repository.index', compact('data', 'key'));
        }
        $data = Kelengkapan::where('user_id', Auth::user()->id)->with('user')->with('user', 'tipe')->paginate(10);
        return view('kelengkapan.index', compact('data','user','tipe'), ['user' => $user, 'type_menu' => 'layout']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $tipe = TipeDokumen::all();
        return view('kelengkapan.create', compact('tipe','user'), ['user' => $user, 'type_menu' => 'layout']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $fileName=time().'.'.$request->file->extension();
        $request->file('file')->storeAs('public',$fileName);

        $payload = $request->only(['user_id','jenis', 'tipe_id']);
        $payload['user_id'] = Auth::user()->id;
        Kelengkapan::create($payload)->with($fileName);
        return redirect()->route('kelengkapan.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Kelengkapan::with('user', 'tipe')->findOrFail($id);
        return view('kelengkapan.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Kelengkapan::findOrFail($id);
        $tipe = TipeDokumen::all();
        return view('kelengkapan.edit', compact('data', 'tipe'));
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
        $payload = $request->only(['user_id', 'tipe_id']);
        $data = Kelengkapan::findOrFail($id);
        if ($request->hasFile('file')) {
            $payload['file'] = updateFile($data->file, 'dokumen', $request->file('file'), 'dokumen');
        } else {
            $payload['file'] = $data->file;
        }
        $data->update($payload);
        return redirect()->route('kelengkapan.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Kelengkapan::findOrFail($id);
        $data->delete();
        return redirect()->route('kelengkapan.index')->with('success', 'Data berhasil dihapus');
    }

}

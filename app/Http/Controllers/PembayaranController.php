<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use Auth;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $pembayaran = Pembayaran::all();
        return view('pembayaran.index', compact('pembayaran'), ['user' => $user, 'type_menu' => '']);
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
        $pembayaran = Pembayaran::find($id);
        return view('pembayaran.show', compact('pembayaran'),['user' => $user, 'type_menu' => '']);
    }

    public function edit($id)
    {
        $user = Auth::user();
        $pembayaran = Pembayaran::find($id);
        return view('pembayaran.edit', compact('pembayaran'),['user' => $user, 'type_menu' => 'dashboard']);
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
        $pembayaran= Pembayaran::find($id);
        // $pembayaran->id_users=$user->id;
        $pembayaran->id_kegiatan=$request->kegiatan;
        $pembayaran->id_kecamatan=$request->kecamatan;
        $pembayaran->gaji=$request->gaji;
        $pembayaran->save();

        $pembayaran->save();
        return redirect()->route('pembayaran.index')->with('success', 'Data Pembayaarn berhasil di Simpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembayaran  = Pembayaran::find($id);
        $pembayaran ->delete();
        return redirect()->route('pembayaran.index')
                        ->with('success','Data Pembayaran Berhasil Dihapus');
    }

    public function changeStatus($id){
        $getStatus = Pembayaran::select('status')->where('id',$id)->first()  ;
        if($getStatus->status==1){
            $status = 0;
        }else{
            $status = 1;
        }
        Pembayaran::where('id',$id)->update(['status'=>$status]);
        return redirect()->route('pembayaran.index')->with('status', 'Status berhasil diubah');
        return $getStatus;
    }
}

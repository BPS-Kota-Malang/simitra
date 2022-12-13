<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubKecamatan;
use App\Models\Kecamatan;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\DB;
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
        $sub_kecamatan = SubKecamatan::all();
        $kecamatan = Kecamatan::all();
        $pembayaran = Pembayaran::find($id);
        return view('pembayaran.edit', compact('pembayaran','kecamatan','sub_kecamatan'),['user' => $user, 'type_menu' => 'dashboard']);
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
        // dd($request->all());
        $pembayaran= Pembayaran::with('kecamatan')->find($id);
        $pembayaran->gaji=$request->gaji;
        $pembayaran->id_kecamatan=$request->id_kecamatan;
        $pembayaran->id_sub_kecamatan=$request->id_sub_kecamatan;
        $pembayaran->save();

        return redirect()->route('pembayaran.index')->with('success', 'Data Pembayaran berhasil di Update');
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

    public function changeStatusPembayaran($id){
        $getStatus = Pembayaran::select('status_pembayaran')->where('id',$id)->first()  ;
        if($getStatus->status_pembayaran==1){
            $status_pembayaran = 0;
        }else{
            $status_pembayaran = 1;
        }
        Pembayaran::where('id',$id)->update(['status_pembayaran'=>$status_pembayaran]);
        return redirect()->route('pembayaran.index')->with('status', 'Status berhasil diubah');
        return $getStatus;
    }

    public function changeStatusPenerimaan($id){
        $getStatus = Pembayaran::select('status_penerimaan')->where('id',$id)->first()  ;
        if($getStatus->status_penerimaan==1){
            $status_penerimaan = 0;
        }else{
            $status_penerimaan = 1;
        }
        Pembayaran::where('id',$id)->update(['status_penerimaan'=>$status_penerimaan]);
        return redirect()->route('pembayaran.index')->with('status', 'Status berhasil diubah');
        return $getStatus;
    }

}

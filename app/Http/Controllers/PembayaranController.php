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

    public function getTotalGaji(){
         /**
         *  Get Total Gaji for every fucking user
         */
        // $gaji = Pembayaran::where('id_users', 1)->sum('gaji');
        // dd($gaji);



        $gaji = DB::table('pembayaran')
                ->selectRaw('count(id_users) as jumlah_kegiatan, id_users, sum(gaji) as total_gaji')
                ->groupBy('id_users')
                ->get();
        dd($gaji);
    }
}

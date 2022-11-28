<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Kegiatan;
use App\Models\Pendaftar;
use App\Models\Pembayaran;
use DB;

class PendaftarController extends Controller
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
        $pendaftar = Pendaftar::all();

        
        
        return view('pendaftar.index',compact('kegiatan','pendaftar'), ['user' => $user, 'type_menu' => '']);

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
    public function store(Request $request)
    {
        //
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
        $pendaftar = Pendaftar::where('id_kegiatan',$id)->get();
    
        $data = DB::table('pembayaran')
                ->selectRaw('count(id_users) as jumlah_kegiatan, id_users, sum(gaji) as total_gaji')
                ->groupBy('id_users')
                ->get();

        // $pembayaran = Pembayaran::count();
        // $bayar = Pembayaran::select(
        //     'count(id_users) as jumlah_kegiatan, id_users, sum(gaji) as total_gaji
        //      groupBy(id_users)')
        //      ->get();
        
        // dd($data);

        // $data = [];
        // $data.name;
        
        return view('pendaftar.show', compact('pendaftar'),['user' => $user, 'type_menu' => '','bayar' => $data]);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function changeStatus(Request $request, $id){
        $getStatus = Pendaftar::select('status')->where('id',$id)->first()  ;
        if($getStatus->status==1){
            $status = 0;
        }else{
            $status = 1;

            $user = Auth::user();

        }
        Pendaftar::where('id',$id)->update(['status'=>$status]);
        return redirect()->back()->with('status', 'Status berhasil diubah');
        return $getStatus;
    }
}

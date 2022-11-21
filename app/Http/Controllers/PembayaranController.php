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

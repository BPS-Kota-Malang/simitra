<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Product;
use App\Models\Pendaftar;

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
        $products = Product::all();
        $pendaftar = Pendaftar::all();
        return view('pendaftar.index',compact('products','pendaftar'), ['user' => $user, 'type_menu' => '']);

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
        $pendaftar = Pendaftar::all();
        return view('pendaftar.show', compact('pendaftar'),['user' => $user, 'type_menu' => '']);
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

    public function changeStatus($id){
        $getStatus = Pendaftar::select('status')->where('id',$id)->first()  ;
        if($getStatus->status==1){
            $status = 0;
        }else{
            $status = 1;
        }
        Pendaftar::where('id',$id)->update(['status'=>$status]);
        return redirect()->route('pendaftar.show',$id)->with('status', 'Status berhasil diubah');
        return $getStatus;
    }
}

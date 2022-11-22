<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Pembayaran;


class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function history()
    {
        $user = Auth::user();
        $pembayaran = Pembayaran::all();
        return view('history.index', compact('pembayaran'), ['user' => $user, 'type_menu' => '']);
       
    }
}

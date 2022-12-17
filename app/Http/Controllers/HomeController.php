<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use Auth;
use App\Models\Kecamatan;
use App\Models\SubKecamatan;
use App\Models\User;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        return view('home',
        ['user' => $user],['type_menu' => '']);
    }

    public function profile()
    {
        $user = Auth::user();
        $kecamatan = Kecamatan::all();
        $role = Role::all();
        $sub_kecamatan = SubKecamatan::all();
        // $roles = Role::pluck('name','name')->all();
         return view('profile',compact('kecamatan','sub_kecamatan','role'), ['user' => $user, 'type_menu' => 'layout']);
    }

    public function profileStore(ProfileRequest $request) {

            // dd($request->all());
            $user = User::find(Auth::user()->id);

            if($user->foto && file_exists(storage_path('app/public/'
            . $user->foto))){
            Storage::delete('public/' . $user->foto);
            }
            $image_name = $request->file('image')->store('images', 'public');

            $user -> update([
            'name' => $request->name,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'jabatan' => $request->jabatan,
            'agama' => $request->agama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'pgl_sensus' => implode(',', $request -> pengalaman),
            'foto' => $image_name,

        ]);

        $user->save();
        return redirect()->route('profile')->with('status', 'Data Profile berhasil di update');
    }

    public function activity()
    {
        $user = Auth::user();
        return view('activity',
        ['user' => $user],['type_menu' => 'features']);
    }

    public function settings()
    {
        $user = Auth::user();
        return view('settings',
        ['user' => $user],['type_menu' => 'features']);
    }

}

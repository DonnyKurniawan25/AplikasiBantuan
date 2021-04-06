<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\users;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class userController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user = users::all();
        return view('user.index',compact('user'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $user = users::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'hak_akses' => $request->hak_akses
        ]);

        return redirect()->route('user.index')->with('success','Data Berhasil Ditambahkan');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = users::where('id',$id)->first();
        return view('user.edit',compact('data'));
    }

    public function update(Request $request, $id)
    {
        $ubah = users::where('id',$id)->update([
           'name' => $request->name,
           'email' => $request->email,
           'password' => Hash::make($request->password),
           'hak_akses' => $request->hak_akses
       ]);

        return redirect()->route('user.index')->with('success','DATA BERHASIL DI UPDATE');
    }

    public function destroy($id)
    {

        users::where('id',$id)->delete();
        return redirect()->route('user.index')->with('success','Data Berhasil Dihapus');
    }
}

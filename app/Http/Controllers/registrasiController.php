<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Registrasi;

class registrasiController extends Controller
{
    public function index()
    {
        $register = Registrasi::all();
        return view('Registrasi.index',compact('register'));
    }

    public function create()
    {
        return view('Registrasi.create');
    }

    public function store(Request $request)
    {
       $register = Registrasi::create([
        'Nama' => $request->Nama,
        'Email' => $request->Email,
        'Alasan' => $request->Alasan
    ]);

       return view('Registrasi.create')->with('success','Data anda Berhasil Dikirimkan Mohon ditunggu konfirmasi melalui email');
   }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        Registrasi::where('id',$id)->delete();
        return redirect()->route('registrasi.index')->with('success','Data Berhasil Dihapus');
    }
}

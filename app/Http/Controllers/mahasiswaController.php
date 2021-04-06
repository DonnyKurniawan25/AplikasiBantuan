<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\mahasiswa;
use App\Imports\mahasiswaImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class mahasiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = mahasiswa::all();
        return view('mahasiswa.index',compact('data'));
    }
    public function create()
    {
        return view('mahasiswa.index');
    }

    public function store(Request $request)
    {
      $nim = $request->Nim;
      $valid = mahasiswa::where('Nim',$nim)->first();

      if($valid) {

        return redirect()->route('mahasiswa.index')->with('gagal','Nim Sudah Pernah Diinputkan');

    }else{
        $simpan = mahasiswa::create([
            'Nim'=>$request->Nim,
            'Nama_mhs'=>$request->Nama_mhs,
            'Jk'=>$request->Jk,
            'Ip_S1'=>$request->Ip_S1,
            'Ip_S2'=>$request->Ip_S2,
            'Ip_S3'=>$request->Ip_S3,
            'Ip_S4'=>$request->Ip_S4,
            'Ip_S5'=>$request->Ip_S5,
            'IPK'=>$request->Ipk,
            'Ket_lulus'=>$request->Ket_lulus,
        ]);
        return redirect()->route('mahasiswa.index')->with('success','Data Berhasil Ditambahkan');
    }
}

public function show($id)
{

}

public function edit($id)
{
   $data = mahasiswa::where('id',$id)->first();
   return view('mahasiswa.edit',compact('data'));
}

public function update(Request $request, $id)
{
  $ubah = mahasiswa::where('id',$id)->update([

    'Nim'=>$request->Nim,
    'Nama_mhs'=>$request->Nama_mhs,
    'Jk'=>$request->Jk,
    'Ip_S1'=>$request->Ip_S1,
    'Ip_S2'=>$request->Ip_S2,
    'Ip_S3'=>$request->Ip_S3,
    'Ip_S4'=>$request->Ip_S4,
    'Ip_S5'=>$request->Ip_S5,
    'IPK'=>$request->Ipk,
    'Ket_lulus'=>$request->Ket_lulus,
]);

  return redirect()->route('mahasiswa.index')->with('success','DATA BERHASIL DI UPDATE');
}

public function destroy($id)
{
    mahasiswa::where('id',$id)->delete();
    return redirect()->route('mahasiswa.index')->with('success','Data Berhasil Dihapus');
}
}

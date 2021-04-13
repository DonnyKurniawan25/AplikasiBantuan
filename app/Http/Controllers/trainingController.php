<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\training;

class trainingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = training::all();
        return view('training.index',compact('data'));
    }

    public function create()
    {
        return view('training.create');
    }

    public function store(Request $request)
    {
        $training = training::create([
            'NIK' => $request->NIK,
            'Nama' => $request->Nama,
            'Jenis_kelamin' => $request->Jenis_kelamin,
            'Umur' => $request->Umur,
            'Status_perkawinan' => $request->Status_perkawinan,
            'Pendidikan' => $request->Pendidikan,
            'Pekerjaan' => $request->Pekerjaan,
            'Jumlah_tanggungan' => $request->Jumlah_tanggungan,
            'Keputusan' => $request->Keputusan
        ]);
        return redirect()->route('training.index')->with('success','DATA BERHASIL DITAMBAHKAN');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = training::where('id',$id)->first();
   		return view('training.edit',compact('data'));
    }

    public function update(Request $request, $id)
    {
         $ubah = training::where('id',$id)->update([

		'NIK' => $request->NIK,
        'Nama' => $request->Nama,
        'Jenis_kelamin' => $request->Jenis_kelamin,
        'Umur' => $request->Umur,
        'Status_perkawinan' => $request->Status_perkawinan,
        'Pendidikan' => $request->Pendidikan,
        'Pekerjaan' => $request->Pekerjaan,
        'Jumlah_tanggungan' => $request->Jumlah_tanggungan,
        'Keputusan' => $request->Keputusan

		]);

  		return redirect()->route('training.index')->with('success','DATA BERHASIL DI UPDATE');
    }

    public function destroy($id)
    {
        training::where('id',$id)->delete();
        return redirect()->route('training.index')->with('success','Data Berhasil Dihapus');
    }
}

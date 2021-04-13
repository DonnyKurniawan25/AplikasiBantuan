@extends('layout1.app')

@section('content')

<!-- BREADCRUMB-->
<section class="au-breadcrumb2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="au-breadcrumb-content">
                    <div class="au-breadcrumb-left">
                        <span class="au-breadcrumb-span">You are here:</span>
                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                            <li class="list-inline-item active">
                                <a href="#">Data Training</a>
                            </li>
                            <li class="list-inline-item seprate">
                                <span>/</span>
                            </li>
                            <li class="list-inline-item">Edit Data Training</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END BREADCRUMB-->

<div class="col-md-8 offset-md-2">
    <div class="card">
        <div class="card-header">
            <strong>Edit</strong> Data Training
        </div>
        <div class="card-body card-block">
            <form method="post" action="{{ route('training.update', [$data->id]) }}" class="form-horizontal">
      			{{ csrf_field() }}
                {{ method_field('PUT')}}
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">NIK</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="text-input" value="{{ $data->NIK }}" name="NIK" required placeholder="NIK" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Nama</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="Nama" value="{{ $data->Nama }}" required placeholder="Nama" class="form-control">
                    </div>
                </div>
                 <div class="row form-group">
                    <div class="col col-md-3">
                        <label class=" form-control-label">Jenis Kelamin</label>
                    </div>
                    <div class="col col-md-9">
                        <div class="form-check">
                            <div class="radio">
                                <label for="radio1" class="form-check-label ">
                                    <input type="radio" checked readonly id="radio10" name="Jenis_kelamin" value="{{ $data->Jenis_kelamin }}" class="form-check-input">{{ $data->Jenis_kelamin }}
                                </label>
                            </div>
                            <div class="radio">
                                <label for="radio1" class="form-check-label ">
                                    <input type="radio" id="radio1" name="Jenis_kelamin" required value="L" class="form-check-input">Laki-Laki
                                </label>
                            </div>
                            <div class="radio">
                                <label for="radio2" class="form-check-label ">
                                    <input type="radio" id="radio2" required name="Jenis_kelamin" value="P" class="form-check-input">Perempuan
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Umur</label>
                    </div>
                    <div class="col-12 col-md-2">
                        <input type="number" value="{{ $data->Umur }}" id="text-input" name="Umur" required placeholder="Umur" class="form-control">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Status Perkawinan</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="Status_perkawinan" id="select" class="form-control">
                            <option value="{{ $data->Status_perkawinan }}" selected>{{ $data->Status_perkawinan }}</option>
                            <option value="Belum Kawin">Belum Kawin</option>
                            <option value="Kawin">Kawin</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class=" form-control-label">Pendidikan</label>
                    </div>
                    <div class="col col-md-9">
                        <div class="form-check">
                            <div class="radio">
                                <label for="radio3" class="form-check-label ">
                                    <input type="radio" checked id="radio11" name="Pendidikan" required value="{{ $data->Pendidikan }}" class="form-check-input">{{ $data->Pendidikan }}
                                </label>
                            </div>
                            <div class="radio">
                                <label for="radio3" class="form-check-label ">
                                    <input type="radio" id="radio3" name="Pendidikan" required value="Belum/Tidak Tamat" class="form-check-input">Belum/Tidak Tamat
                                </label>
                            </div>
                            <div class="radio">
                                <label for="radio4" class="form-check-label ">
                                    <input type="radio" id="radio4" required name="Pendidikan" value="SD/Sederajat" class="form-check-input">SD/Sederajat
                                </label>
                            </div>
                            <div class="radio">
                                <label for="radio5" class="form-check-label ">
                                    <input type="radio" id="radio5" required name="Pendidikan" value="SD/MI/Sederajat" class="form-check-input">SD/MI/Sederajat
                                </label>
                            </div>
                            <div class="radio">
                                <label for="radio6" class="form-check-label ">
                                    <input type="radio" id="radio6" required name="Pendidikan" value="SLTP/MTs/Sederajat" class="form-check-input">SLTP/MTs/Sederajat
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Pekerjaan</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="Pekerjaan" id="select" class="form-control">
                            <option value="{{ $data->Pekerjaan }}" selected>{{ $data->Pekerjaan }}</option>
                            <option value="Tidak Bekerja">Tidak Bekerja</option>
                            <option value="Buruh">Buruh</option>
                            <option value="Petani">Petani</option>
                            <option value="Usaha Sendiri">Usaha Sendiri</option>
                        </select>
                    </div>
                </div>
                 <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Jumlah Tanggungan</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" id="text-input" value="{{ $data->Jumlah_tanggungan }}" name="Jumlah_tanggungan" required placeholder="Jumlah Tanggungan" class="form-control">
                    </div>
                </div>
                 <div class="row form-group">
                    <div class="col col-md-3">
                        <label for="select" class=" form-control-label">Keputusan</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <select name="Keputusan" id="select" class="form-control">
                            <option value="{{ $data->Keputusan }}" selected>{{ $data->Keputusan }}</option>
                            <option value="DITERIMA" >DITERIMA</option>
                            <option value="DITOLAK">DITOLAK</option>
                        </select>
                    </div>
                </div>
		        <div class="card-footer">
		            <button type="submit" class="btn btn-primary btn-sm">
		                <i class="fa fa-dot-circle-o"></i> Submit
		            </button>
		            <button type="reset" class="btn btn-danger btn-sm">
		                <i class="fa fa-ban"></i> Reset
		            </button>
		        </div>
		    </div>
		</div>
@endsection

 @extends('layout.app')

 @section('content') 

 @include('pesan')

 <section class="vbox">
  <section class="scrollable padder">
    <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
      <li><a href="index.html"><i class="fa fa-home"></i>Dashboard</a></li>
      <li><a href="#">Data Training</a></li>
      <li><a href="#">Data Mahasiswa</a></li>
      <li class="active">Edit Data Mahasiswa</li>
    </ul>
    <div class="m-b-md">
      <h3 class="m-b-none">Form Edit Data Mahasiswa</h3>
    </div>
    <div class="panel panel-default">
      <div class="wizard clearfix" id="form-wizard">
        <ul class="steps">
          <li data-target="#step1" class="active"><span class="badge badge-info">1</span>Data Mahasiswa</li>
          <li data-target="#step2"><span class="badge">2</span>Nilai Mahasiswa</li>
          <li data-target="#step3"><span class="badge">3</span>Keputusan kelulusan</li>
        </ul>
      </div>
      <div class="step-content col-sm-9" style="padding-left: 400px">
        <form method="post" action="{{ route('mahasiswa.update',[$data->id]) }}" >
          {{ csrf_field() }}
          {{ method_field('PUT')}}
          <div class="step-pane active" id="step1">
            <p>NIM</p>
            <input type="text" name="Nim" value="{{ $data->Nim }}" class="form-control" data-trigger="change" data-required="true" placeholder="NIM">
            <p class="m-t">Nama Mahasiswa</p>
            <input type="text" name="Nama_mhs" value="{{ $data->Nama_mhs }}" class="form-control" data-trigger="change" data-required="true" placeholder="Nama Mahasiswa">
            <p class="m-t">Jenis Kelamin</p>
            <select name="Jk" class="form-control m-b" required>
              <option value="{{ $data->Jk }}">{{ $data->Jk }}</option>
              <option value="L">Laki-Laki (L)</option>
              <option value="P">Perempuan (P)</option>
            </select>
          </div>
          <div class="step-pane" id="step2">
            <p class="m-t">IP SEMESTER 1</p>
            <input type="text" name="Ip_S1" value="{{ $data->Ip_S1 }}" class="form-control" data-trigger="change" data-required="true" placeholder="IP Semester 1">
            <p class="m-t">IP SEMESTER 2</p>
            <input type="text" name="Ip_S2" value="{{ $data->Ip_S2 }}" class="form-control" data-trigger="change" data-required="true" placeholder="IP Semester 2">
            <p class="m-t">IP SEMESTER 3</p>
            <input type="text" name="Ip_S3" value="{{ $data->Ip_S3 }}" class="form-control" data-trigger="change" data-required="true" placeholder="IP Semester 3">
            <p class="m-t">IP SEMESTER 4</p>
            <input type="text" name="Ip_S4" value="{{ $data->Ip_S4 }}" class="form-control" data-trigger="change" data-required="true" placeholder="IP Semester 4">
            <p class="m-t">IP SEMESTER 5</p>
            <input type="text" name="Ip_S5" value="{{ $data->Ip_S5 }}" class="form-control" data-trigger="change" data-required="true" placeholder="IP Semester 5">
            <p class="m-t">IPK</p>
            <input type="text" name="Ipk" value="{{ $data->Ipk }}" class="form-control" data-trigger="change" data-required="true" placeholder="IPK">
          </div>
          <div class="step-pane" id="step3">
            <p class="m-t">KETERANGAN LULUS</p>
            <select name="Ket_lulus" class="form-control m-b" required>
             <option value="{{ $data->Ket_lulus }}">{{ $data->Ket_lulus }}</option>
             <option value="Tepat Waktu">Tepat Waktu</option>
             <option value="Tidak Tepat Waktu">Tidak Tepat Waktu</option>
           </select>
           <button type="submit" class="btn btn-primary">Simpan</button>
         </div>                
       </form>
       <div class="actions m-t">
        <button type="button" class="btn btn-default btn-sm btn-prev" data-target="#form-wizard" data-wizard="previous" disabled="disabled">Prev</button>
        <button type="button" class="btn btn-default btn-sm btn-next" data-target="#form-wizard" data-wizard="next" data-last>Next</button>
      </div>
    </div>
  </div>
</section>
</section>
<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
@endsection

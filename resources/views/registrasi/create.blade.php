@extends('layout.form')

@section('content') 

@include('pesan') 

<section class="scrollable padder">
  <div class="m-b-md">
    <h3 class="m-b-none" style="padding-left: 650px">FORM REGISTRASI</h3>
  </div>
  <div class="col-sm-9" style="padding-left: 450px">
    <form data-validate="parsley" method="post" action="{{ route('registrasi.store') }}">
      @csrf
      <section class="panel panel-default">
        <header class="panel-heading">
          <span class="h4">Contact</span>
        </header>
        <div class="panel-body">
          <p class="text-muted">Belum Terdaftar? Isi Data data anda</p>                        
          <div class="form-group pull-in clearfix">
            <div class="col-sm-6">
              <label>Nama</label>
              <input type="text" class="form-control" placeholder="Nama" name="Nama" required="true">
            </div>
            <div class="col-sm-6">
              <label>Email</label>
              <input type="email" name="Email" class="form-control" placeholder="Enter email" required="true">
            </div>
          </div>

          <div class="form-group">
            <label>Alasan</label>
            <textarea class="form-control" name="Alasan" rows="6" data-minwords="6" required="true" placeholder="Alasan"></textarea>
          </div>
        </div>
        <footer class="panel-footer text-right bg-light lter">
          <button type="submit" class="btn btn-success btn-s-xs">Simpan</button>
        </footer>
        <footer class="panel-footer text-left bg-light lter">
          <a href="/" class="btn btn-info btn-s-xs" style="">Beranda</a>
        </footer>
      </section>
    </form>
  </div>
</section>
@endsection

@extends('layout.app')

@section('content') 

@include('pesan')

<section class="scrollable padder">
  <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
    <li><a href="#"><i class="fa fa-home"></i>Dashboard</a></li>
    <li><a href="#">User</a></li>
    <li><a href="#">Edit User</a></li>
  </ul>
  <div class="m-b-md">
    <h3 class="m-b-none">Edit User</h3>
  </div>
  <div class="col-sm-9" style="padding-left: 350px">
    <form data-validate="parsley" method="POST" action="{{ route('user.update',[$data->id]) }}" >
      {{ csrf_field() }}
      {{ method_field('PUT')}}
      <section class="panel panel-default">
        <header class="panel-heading">
          <span class="h4">Register User</span>
        </header>
        <div class="panel-body">
          <p class="text-muted">Please fill the information to continue</p>
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $data->name }}" required="true" autocomplete="email">

            @error('name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror    

          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" data-type="email" name="email" value="{{ $data->email }}" required autocomplete="new-password">            
          </div>

          @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror

          <div class="form-group pull-in clearfix">
            <div class="col-sm-6">
              <label>Enter password</label>
              <input type="password" class="form-control @error('password') is-invalid @enderror" data-required="true" id="pwd" name="password" required>   
            </div>

            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror

            <div class="col-sm-6">
              <label>Confirm password</label>
              <input type="password" class="form-control" data-equalto="#pwd" data-required="true" name="password_confirmation" required>      
            </div>   

            @if(Auth::user()->hak_akses=="Admin")
            <div class="form-group">
              <div class="col-sm-12" >
                <label>Hak Akses</label>
                <select class="form-control" name="hak_akses" required>
                  <option value="{{ $data->hak_akses }}">{{ $data->hak_akses }}</option>
                  <option value="Admin">Admin</option>
                  <option value="Mahasiswa">Mahasiswa</option>
                </select>
              </div>
            </div>
          </div>
          @endif
        </div>
        <footer class="panel-footer text-right bg-light lter">
          <button type="submit" class="btn btn-success btn-s-xs">Simpan</button>
        </footer>
      </section>
    </form>
  </div>
</section>
@endsection
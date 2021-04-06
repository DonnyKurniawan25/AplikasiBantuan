  @extends('layout1.app')

  @section('content') 

  <section class="scrollable padder">
    <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
      <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
      <li class="active">Dashboard</li>
    </ul>
    <div class="m-b-md">
      <h3 class="m-b-none">Dashboard</h3>
      <br>
      <strong>Welcome Back, {{ Auth::user()->name }} </strong>
    </div>
    <section class="panel panel-default">
      <div class="row m-l-none m-r-none bg-light lter">
        <div class="col-sm-6 col-md-3 padder-v b-r b-light">
          <span class="fa-stack fa-2x pull-left m-r-sm">
            <i class="fa fa-circle fa-stack-2x text-info"></i>
            <i class="fa fa-fire-extinguisher fa-stack-1x text-white"></i>
          </span>
          <a class="clear" href="/training">
            <span class="h3 block m-t-xs"><strong>{{ $data }}</strong></span>
            <small class="text-muted text-uc"><b>Data Training</b></small>
          </a>
        </div>
        <div class="col-sm-6 col-md-3 padder-v b-r b-light lt">
          <span class="fa-stack fa-2x pull-left m-r-sm">
            <i class="fa fa-circle fa-stack-2x text-warning"></i>
            <i class="fa fa-bug fa-stack-1x text-white"></i>
          </span>
          <a class="clear" href="/testing">
            <span class="h3 block m-t-xs"><strong id="bugs">{{ $data2 }}</strong></span>
            <small class="text-muted text-uc"><b>Data Testing</b></small>
          </a>
        </div>
        <div class="col-sm-6 col-md-3 padder-v b-r b-light">
          <span class="fa-stack fa-2x pull-left m-r-sm">
            <i class="fa fa-circle fa-stack-2x text-success"></i>
            <i class="fa fa-fire-extinguisher fa-stack-1x text-white"></i>
          </span>
          <a class="clear" href="/mahasiswa">
            <span class="h3 block m-t-xs"><strong>{{ $data3 }}</strong></span>
            <small class="text-muted text-uc"><b>Data Mahasiswa</b></small>
          </a>
        </div>
        <div class="col-sm-6 col-md-3 padder-v b-r b-light lt">
          <span class="fa-stack fa-2x pull-left m-r-sm">
            <i class="fa fa-circle fa-stack-2x icon-muted"></i>
            <i class="fa fa-clock-o fa-stack-1x text-white"></i>
          </span>
          <a class="clear" href="{{ route('logout') }}" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          <span class="h3 block m-t-xs"><strong>{{ __('Logout') }}</strong></span>
          <small class="text-muted text-uc"><b>Left to exit</b></small>
        </a>
      </div>
      @if(Auth::user()->hak_akses=="Admin")
      <div class="col-sm-6 col-md-3 padder-v b-r b-light">                     
        <span class="fa-stack fa-2x pull-left m-r-sm">
          <i class="fa fa-circle fa-stack-2x text-danger"></i>
          <i class="fa fa-male fa-stack-1x text-white"></i>
        </span>
        <a class="clear" href="/user">
          <span class="h3 block m-t-xs"><strong id="firers">{{ $data1 }}</strong></span>
          <small class="text-muted text-uc"><b>User</b></small>
        </a>
      </div>
      <div class="col-sm-6 col-md-3 padder-v b-r b-light lt">
        <span class="fa-stack fa-2x pull-left m-r-sm">
          <i class="fa fa-circle fa-stack-2x text-info"></i>
          <i class="fa fa-bug fa-stack-1x text-white"></i>
        </span>
        <a class="clear" href="/laporan">
          <span class="h3 block m-t-xs"><strong id="bugs">{{ $data4 }}</strong></span>
          <small class="text-muted text-uc"><b>Data Laporan</b></small>
        </a>
      </div>
      <div class="col-sm-6 col-md-3 padder-v b-r b-light">                     
        <span class="fa-stack fa-2x pull-left m-r-sm">
          <i class="fa fa-circle fa-stack-2x text-warning"></i>
          <i class="fa fa-male fa-stack-1x text-white"></i>
        </span>
        <a class="clear" href="/registrasi">
          <span class="h3 block m-t-xs"><strong id="firers">{{ $data5 }}</strong></span>
          <small class="text-muted text-uc"><b>Registrasi</b></small>
        </a>
      </div>
      @endif

    </div>
  </section>
</section>
@endsection
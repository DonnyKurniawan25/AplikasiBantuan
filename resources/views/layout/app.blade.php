<!DOCTYPE html>
<html lang="en" class="app">
<head>
  <meta charset="utf-8" />
  <title>PREDIKSI KELULUSAN</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 

  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" >
  <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css" >
  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css" >
  <link rel="stylesheet" href="{{ asset('css/font.css') }}" type="text/css" >

  <link rel="stylesheet" href="{{ asset('js/select2/select2.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('js/select2/theme.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('js/fuelux/fuelux.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('js/datepicker/datepicker.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('js/slider/slider.css') }}" type="text/css" />

  <link rel="stylesheet" type="text/css" href="{{ asset('jstable/jquery.dataTables.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('jstable/buttons.dataTables.min.css') }}">

  <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css" >

</head>
<body>
  <section class="vbox">
    <header class="bg-dark dk header navbar navbar-fixed-top-xs">
      <div class="navbar-header aside-md">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
          <i class="fa fa-bars"></i>
        </a>
        <a href="#" class="navbar-brand" data-toggle="fullscreen"><img src="{{ asset('images/logo.png') }}" class="m-r-sm">PREDIKSI</a>
        <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user">
          <i class="fa fa-cog"></i>
        </a>
      </div>
      <ul class="nav navbar-nav hidden-xs">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle dker" data-toggle="dropdown">
            <i class="fa fa-building-o"></i> 
            <span class="font-bold">Activity</span>
          </a>
          <section class="dropdown-menu aside-xl on animated fadeInLeft no-borders lt">
            <div class="wrapper lter m-t-n-xs">
              <a href="#" class="thumb pull-left m-r">
                <img src="{{ asset('images/avatar.png') }}" class="img-circle">
              </a>
              <div class="clear">
                <a href="#"><span class="text-white font-bold">{{ Auth::user()->name }}</a></span>
                <small class="block">{{ Auth::user()->hak_akses }}</small>
              </div>
            </div>
          </section>
        </li>
      </ul>      
      <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
       <li class="hidden-xs">
        <a href="#" class="dropdown-toggle dk" data-toggle="dropdown">
          <i class="fa fa-bell"></i>
          <span class="badge badge-sm up bg-danger m-l-n-sm count">2</span>
        </a>
        <section class="dropdown-menu aside-xl">
          <section class="panel bg-white">
            <header class="panel-heading b-light bg-light">
              <strong>You have <span class="count">2</span> notifications</strong>
            </header>
            <div class="list-group list-group-alt animated fadeInRight">
              <a href="#" class="media list-group-item">
                <span class="media-body block m-b-none">
                  1.0 initial released<br>
                  <small class="text-muted">1 hour ago</small>
                </span>
              </a>
            </div>
            <footer class="panel-footer text-sm">
              <a href="#" class="pull-right"><i class="fa fa-cog"></i></a>
              <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
            </footer>
          </section>
        </section>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="thumb-sm avatar pull-left">
            <img src="{{ asset('images/avatar.png') }}">
          </span>
          {{ Auth::user()->name }}
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
          <b class="caret"></b>
        </a>
        <ul class="dropdown-menu animated fadeInRight">
          <span class="arrow top"></span>
          <li>
            <a href="{{ route('user.edit',Auth::user()->id) }}">Settings</a>
          </li>
          <li>
            <a href="#">Help</a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="{{ route('logout') }}" data-toggle="ajaxModal"  onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" > {{ __('Logout') }}</a>
          </li>
        </ul>
      </li>
    </ul>      
  </header>
  <section>
    <section class="hbox stretch">
      <!-- .aside -->
      <aside class="bg-dark lter aside-md hidden-print" id="nav">          
        <section class="vbox">            
          <section class="w-f scrollable">
            <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">

              <!-- nav -->
              <nav class="nav-primary hidden-xs">
                <ul class="nav">
                  <li>
                    <a href="/" class="active">
                      <i class="fa fa-home icon">
                        <b class="bg-danger"></b>
                      </i>
                      <span>Home</span>
                    </a>
                  </li>
                  <li>
                    <a href="/Beranda" class="active">
                      <i class="fa fa-dashboard icon">
                        <b class="bg-danger"></b>
                      </i>
                      <span>Dashboard</span>
                    </a>
                  </li>
                  <li >
                    <a href="#"  >
                      <i class="fa fa-archive icon">
                        <b class="bg-warning"></b>
                      </i>
                      <span class="pull-right">
                        <i class="fa fa-angle-down text"></i>
                        <i class="fa fa-angle-up text-active"></i>
                      </span>
                      <span>Data Training</span>
                    </a>
                    <ul class="nav lt">
                      <li>
                        <a href="/mahasiswa" >                                                     
                          <i class="fa fa-angle-right"></i>
                          <span>Data Mahasiswa</span>
                        </a>
                      </li>
                      <li>
                        <a href="/training">
                          <i class="fa fa-angle-right"></i>
                          <span>Data Training</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="/testing" class="active">
                      <i class="fa fa-book icon">
                        <b class="bg-success"></b>
                      </i>
                      <span>Data Testing</span>
                    </a>
                  </li>
                  <li>
                    <a href="/Rules" class="active">
                      <i class="fa fa-briefcase icon">
                        <b class="bg-info"></b>
                      </i>
                      <span>Rules C4.5</span>
                    </a>
                  </li>
                  <li>
                    <a href="/akurasi" class="active">
                      <i class="fa fa-rss-square icon">
                        <b class="bg-success"></b>
                      </i>
                      <span>Akurasi</span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <i class="fa fa-wrench icon">
                        <b class="bg-info"></b>
                      </i>
                      <span>-----------------------------</span>
                    </a>
                  </li>
                  @if(Auth::user()->hak_akses=="Admin")
                  <li>
                    <a href="/user" class="active">
                     <i class="fa fa-key icon">
                      <b class="bg-danger"></b>
                    </i>
                    <span>User</span>
                  </a>
                </li>
                <li>
                  <a href="/registrasi" class="active">
                   <i class="fa fa-info icon">
                    <b class="bg-danger"></b>
                  </i>
                  <span>Info Registrasi</span>
                </a>
              </li>
              <li>
                <a href="/laporan" class="active">
                  <i class="fa fa-folder-open icon">
                    <b class="bg-danger"></b>
                  </i>
                  <span>Laporan</span>
                </a>
              </li>
              @endif
              <li>
                <a href="/layout" class="active">
                  <i class="fa fa-suitcase icon">
                    <b class="bg-danger"></b>
                  </i>
                  <span>Tentang Aplikasi</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </section>
      <footer class="footer lt hidden-xs b-t b-dark">
        <div id="chat" class="dropup">
          <section class="dropdown-menu on aside-md m-l-n">
            <section class="panel bg-white">
              <header class="panel-heading b-b b-light">Active chats</header>
              <div class="panel-body animated fadeInRight">
                <p class="text-sm"></p>
                <p><a href="https://wa.me/6282359166749" class="btn btn-sm btn-default">Start a chat</a></p>
              </div>
            </section>
          </section>
        </div>
        <div id="invite" class="dropup">                
          <section class="dropdown-menu on aside-md m-l-n">
            <section class="panel bg-white">
              <header class="panel-heading b-b b-light">
                Donny Kurniawan <i class="fa fa-circle text-success"></i>
              </header>
              <div class="panel-body animated fadeInRight">
                <p class="text-sm"></p>
                <p><a href="https://web.facebook.com/donythecapricorn.twentyfive" class="btn btn-sm btn-facebook"><i class="fa fa-fw fa-facebook"></i> Invite from Facebook</a></p>
              </div>
            </section>
          </section>
        </div>
        <a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-dark btn-icon">
          <i class="fa fa-angle-left text"></i>
          <i class="fa fa-angle-right text-active"></i>
        </a>
        <div class="btn-group hidden-nav-xs">
          <button type="button" title="Chats" class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown" data-target="#chat"><i class="fa fa-comment-o"></i></button>
          <button type="button" title="Contacts" class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown" data-target="#invite"><i class="fa fa-facebook"></i></button>
        </div>
      </footer>
    </section>
  </aside>
  <!-- /.aside -->
  <section id="content">
    <section class="vbox">          
      @yield('content')
    </section>
  </section>
  <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
</section>
<aside class="bg-light lter b-l aside-md hide" id="notes">
  <div class="wrapper">Notification</div>
</aside>
</section>
</section>
</section>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('js/bootstrap.js') }}"></script>
<!-- App -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/app.plugin.js') }}"></script>
<script src="{{ asset('js/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('js/charts/easypiechart/jquery.easy-pie-chart.js') }}"></script>
<script src="{{ asset('js/charts/sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('js/charts/flot/jquery.flot.min.js') }}"></script>
<script src="{{ asset('js/charts/flot/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ asset('js/charts/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('js/charts/flot/jquery.flot.grow.js') }}"></script>
<script src="{{ asset('js/charts/flot/demo.js') }}"></script>

<!-- fuelux -->
<script src="{{ asset('js/fuelux/fuelux.js') }}"></script>
<script src="{{ asset('js/parsley/parsley.min.js') }}"></script>
<!-- datepicker -->
<script src="{{ asset('js/datepicker/bootstrap-datepicker.js') }}"></script>
<!-- slider -->
<script src="{{ asset('js/slider/bootstrap-slider.js') }}"></script>
<!-- file input -->  
<script src="{{ asset('js/file-input/bootstrap-filestyle.min.js') }}"></script>
<!-- combodate -->
<script src="{{ asset('js/libs/moment.min.js') }}"></script>
<script src="{{ asset('js/combodate/combodate.js') }}"></script>
<!-- select2 -->
<script src="{{ asset('js/select2/select2.min.js') }}"></script>
<!-- wysiwyg -->
<script src="{{ asset('js/wysiwyg/jquery.hotkeys.js') }}"></script>
<script src="{{ asset('js/wysiwyg/bootstrap-wysiwyg.js') }}"></script>
<script src="{{ asset('js/wysiwyg/demo.js') }}"></script>
<!-- markdown -->
<script src="{{ asset('js/markdown/epiceditor.min.js') }}"></script>
<script src="{{ asset('js/markdown/demo.js') }}"></script>

<script type="text/javascript" src="{{ asset('jstable/jquery-3.3.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('jstable/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('jstable/dataTables.buttons.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('jstable/buttons.flash.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('jstable/jszip.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('jstable/pdfmake.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('jstable/vfs_fonts.js') }}"></script>
<script type="text/javascript" src="{{ asset('jstable/buttons.html5.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('jstable/buttons.print.min.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('.datatable').DataTable( {
      dom: 'Bfrtip',
      buttons: [
      'copy', 'csv', 'excel', 'pdf', 'print'
      ]
    } );
  } );
</script>

<script src="{{ asset('js/sortable/jquery.sortable.js') }}"></script>

</body>
</html>
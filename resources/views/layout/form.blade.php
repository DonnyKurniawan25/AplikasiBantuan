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

  <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/media/css/jquery.dataTables.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/media/css/dataTables.bootstrap.css') }}">

  <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css" >
</head>
<body>

  @yield('content')

</body>

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

<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('js/bootstrap.js') }}"></script>
<!-- App -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/app.plugin.js') }}"></script>
<script src="{{ asset('js/slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- fuelux -->
<script src="{{ asset('js/fuelux/fuelux.js') }}"></script>
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


<script type="text/javascript" src="{{ asset('DataTables/media/js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('DataTables/media/js/jquery.dataTables.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.datatabel').DataTable();
  });
</script>

<script src="{{ asset('js/sortable/jquery.sortable.js') }}"></script>

</body>
</html>
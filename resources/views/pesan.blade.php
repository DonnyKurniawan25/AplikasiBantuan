<link rel="stylesheet" type="text/css" href="{{ asset('sweetalert/sweetalert2.css')}}">
<script type="text/javascript" src="{{ asset('sweetalert/sweetalert2.js') }}"></script>


@if ($message = Session::get('success'))
<script>
	
	Swal.fire({
		position: 'center',
		type: 'success',
		title: '<?= $message ?>',
		showConfirmButton: false,
		timer: 2000
	})

</script>
@endif

@if ($message = Session::get('gagal'))
<script>
	
	Swal.fire({
		position: 'center',
		type: 'error',
		title: '<?= $message ?>',
		showConfirmButton: false,
		timer: 3000
	})

</script>
@endif



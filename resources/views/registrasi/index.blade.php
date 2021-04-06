@extends('layout.app')

@section('content')

@include('pesan') 

<section class="scrollable padder">
	<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
		<li><a href="#"><i class="fa fa-home"></i>Dashborad</a></li>
		<li><a href="#">Info Registrasi</a></li>
	</ul>
	<div class="m-b-md">
		<h3 class="m-b-none">Info Registrasi</h3>
	</div>
	<section class="panel panel-default">
		<header class="panel-heading">
			<b>Info Registrasi</b>
			<i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i> 
		</header>
		<div class="table-responsive">
			<table class="table table-striped table-bordered datatabel">
				<thead>
					<tr>
						<th>No</th>
						<th>Email</th>
						<th>Nama</th>
						<th>Alasan</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; ?>
					@foreach ($register as $p)
					<tr>
						<td><?= $no; ?></td>
						<td>{{ $p->Email }}</td>
						<td>{{ $p->Nama }}</td>
						<td>{{ $p->Alasan }}</td>
						<td>
							<form onsubmit="event.preventDefault()" id="myForm-{{ $p->id }}" action="{{ route('registrasi.destroy',$p->id)}}" method="post">
								{{ csrf_field() }}
								{{method_field('DELETE')}}
								<button class="btn btn-danger fa fa-trash-o" onclick="Hapus({{ $p->id }} )"></button>
							</form>
						</td>
					</tr>
					<?php $no++; ?>
					@endforeach
				</tbody>
			</table>
		</div>
	</section>
</section>
<script type="text/javascript">
	function Hapus(id) {
		Swal.fire({
			title: 'DELETE',
			text: 'Apakah anda yakin ingin menghapus data ini ?',
			type: 'Warning',
			showCancelButton: true,
			confirmButtonColor: '#57cce6',
			cancelButtonColor: '#ea6d3d',
			confirmButtonTexxt: 'Ya, Hapus'
		}).then((result)=> {
			if(result.value){
				document.getElementById('myForm-'+id).submit();
			}
		})
	}   

</script>
@endsection
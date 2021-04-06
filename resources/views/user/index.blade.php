@extends('layout.app')

@section('content') 

@include('pesan')

<section class="scrollable padder">
	<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
		<li><a href="#"><i class="fa fa-home"></i>Dashboard</a></li>
		<li><a href="#">User</a></li>
	</ul>
	<div class="m-b-md">
		<h3 class="m-b-none">User</h3>
	</div>
	<section class="panel panel-default">
		<header class="panel-heading">
			<b>User</b>
			<i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i> 
		</header>
		<section class="panel panel-default">
			<div class="panel-body">
				<form class="form-inline" role="form">
					<div class="form-group">
						<a href="{{ route('user.create')}}" class="btn btn-block btn-success fa fa-plus"></a>
					</div>
				</form>         
			</div>       
		</section>
		<div class="table-responsive">
			<table class="table table-responsive datatable">
				<thead>
					<tr>
						<th>Nama</th>
						<th>Email</th>
						<th>Hak Akses</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($user as $p)
					<tr>
						<td>{{ $p->name}}</td>
						<td>{{ $p->email }}</td>
						<td>{{ $p->hak_akses }}</td>
						<td>
							<form onsubmit="event.preventDefault()" id="myForm-{{ $p->id }}" action="{{ route('user.destroy',$p->id)}}" method="post">
								<a href="{{ route('user.edit',$p->id) }}" class="btn btn-primary fa fa-edit"></a>
								{{ csrf_field() }}
								{{method_field('DELETE')}}
								<button class="btn btn-danger fa fa-trash-o" onclick="Hapus({{ $p->id }} )"></button>
							</form>
						</td>
					</tr>
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
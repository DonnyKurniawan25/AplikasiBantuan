@extends('layout.app')

@section('content') 

@include('pesan')

<section class="scrollable padder">
	<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
		<li><a href="#"><i class="fa fa-home"></i>Dashborad</a></li>
		<li><a href="#">Data Mahasiswa</a></li>
	</ul>
	<div class="m-b-md">
		<h3 class="m-b-none">Data Mahasiswa</h3>
	</div>
	<section class="panel panel-default">
		<header class="panel-heading">
			<b>Data Mahasiswa</b>
			<i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i> 
		</header>
		@if(Auth::user()->hak_akses=="Admin")
		<div style="padding-left: 20px; padding-top: 20px" class="form-group">
			<a href="#modal-form" class="btn btn-info fa fa-plus" data-toggle="modal"></a>
		</div>
		@endif  
		<div class="table-responsive">
			<table class="table table-striped table-bordered datatable">
				<thead>
					<tr>
						<th>No</th>
						<th>Nim</th>
						<th>Nama Mahasiswa</th>
						<th>Jk</th>
						<th>IP S1</th>
						<th>IP S2</th>
						<th>IP S3</th>
						<th>IP S4</th>
						<th>IP S5</th>
						<th>IPK</th>
						<th>Keterangan Lulus</th>
						@if(Auth::user()->hak_akses=="Admin")
						<th>Action</th>
						@endif
					</tr>
				</thead>
				<tbody>
					<?php $no=1; ?>
					@foreach ($data as $p)
					<tr>
						<td><?= $no; ?></td>
						<td>{{ $p->Nim}}</td>
						<td>{{ $p->Nama_mhs }}</td>
						<td>{{ $p->Jk }}</td>
						<td>{{ $p->Ip_S1 }}</td>
						<td>{{ $p->Ip_S2 }}</td>
						<td>{{ $p->Ip_S3 }}</td>
						<td>{{ $p->Ip_S4 }}</td>
						<td>{{ $p->Ip_S5 }}</td>
						<td>{{ $p->Ipk }}</td>
						<td>{{ $p->Ket_lulus }}</td>
						@if(Auth::user()->hak_akses=="Admin")
						<td>
							<form onsubmit="event.preventDefault()" id="myForm-{{ $p->id }}" action="{{ route('mahasiswa.destroy',$p->id)}}" method="post">
								<a href="{{ route('mahasiswa.edit',$p->id) }}" class="btn btn-primary fa fa-edit"></a>
								{{ csrf_field() }}
								{{method_field('DELETE')}}
								<button class="btn btn-danger fa fa-trash-o" onclick="Hapus({{ $p->id }} )"></button>
							</form>
						</td>
						@endif
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
<div class="modal fade" id="modal-form">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<div class="row">
					<form method="post" action="{{ route('mahasiswa.store') }}">
						{{ csrf_field() }}
						<div class="col-sm-6 b-r">
							<h3 class="m-t-none m-b">Tambah Data</h3>
							<p>Tambah Data Mahasiswa</p>
							<div class="form-group">
								<label>NIM</label>
								<input type="text" name="Nim" class="form-control" placeholder="Enter NIM" required>
							</div>
							<div class="form-group">
								<label>Nama</label>
								<input type="text" name="Nama_mhs" class="form-control" placeholder="Enter Nama" required>
							</div>
							<div class="form-group">
								<label>Jenis Kelamin</label>
								<select name="Jk" class="form-control m-b" required>
									<option></option>
									<option value="L">Laki-Laki</option>
									<option value="P">Perempuan</option>
								</select>
							</div>	
						</div>
						<div class="col-sm-6 b-r">
							<div class="form-group">
								<label>IP Semester 1</label>
								<input type="text" name="Ip_S1" class="form-control" placeholder="Enter IP Semester 1" required>
							</div>
							<div class="form-group">
								<label>IP Semester 2</label>
								<input type="text" name="Ip_S2" class="form-control" placeholder="Enter IP Semester 2" required>
							</div>
							<div class="form-group">
								<label>IP Semester 3</label>
								<input type="text" name="Ip_S3" class="form-control" placeholder="Enter IP Semester 3" required>
							</div>
							<div class="form-group">
								<label>IP Semester 4</label>
								<input type="text" name="Ip_S4" class="form-control" placeholder="Enter IP Semester 4" required>
							</div>
							<div class="form-group">
								<label>IP Semester 5</label>
								<input type="text" required name="Ip_S5" class="form-control" placeholder="Enter IP Semester 5">
							</div>
							<div class="form-group">
								<label>IPK</label>
								<input type="text" required name="Ipk" class="form-control" placeholder="Enter IPK">
							</div>
						</div>
						<div class="form-group">
							<label style="padding-left: 14px">Keterangan Lulus</label>
							<div class="col-sm-12">
								<select name="Ket_lulus" class="form-control m-b" required>
									<option></option>
									<option value="Tepat Waktu">Tepat Waktu</option>
									<option value="Tidak Tepat Waktu">Tidak Tepat Waktu</option>
								</select>
							</div>
						</div>
						<br>
						<div class="checkbox m-t-lg">
							<button type="submit" class="btn btn-sm btn-success pull-center text-uc m-t-n-xs"><strong>Simpan</strong></button>
						</div>                
					</form>
				</div>          
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>

<!-- MODAL UBAH -->
<div class="modal fade" id="modal-form">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<div class="row">
					<form method="post" action="">
						{{ csrf_field() }}
						{{ method_field('PUT')}}
						<div class="col-sm-6 b-r">
							<h3 class="m-t-none m-b">Tambah Data</h3>
							<p>Tambah Data Mahasiswa</p>
							<div class="form-group">
								<label>NIM</label>
								<input type="text" name="Nim" class="form-control" placeholder="Enter NIM" required>
							</div>
							<div class="form-group">
								<label>Nama</label>
								<input type="text" name="Nama_mhs" class="form-control" placeholder="Enter Nama" required>
							</div>
							<div class="form-group">
								<label>Jenis Kelamin</label>
								<select name="Jk" class="form-control m-b" required>
									<option>--- Jenis Kelamin ---</option>
									<option value="L">Laki-Laki</option>
									<option value="P">Perempuan</option>
								</select>
							</div>	
						</div>
						<div class="col-sm-6 b-r">
							<div class="form-group">
								<label>IP Semester 1</label>
								<input type="text" name="Ip_S1" class="form-control" placeholder="Enter IP Semester 1" required>
							</div>
							<div class="form-group">
								<label>IP Semester 2</label>
								<input type="text" name="Ip_S2" class="form-control" placeholder="Enter IP Semester 2" required>
							</div>
							<div class="form-group">
								<label>IP Semester 3</label>
								<input type="text" name="Ip_S3" class="form-control" placeholder="Enter IP Semester 3" required>
							</div>
							<div class="form-group">
								<label>IP Semester 4</label>
								<input type="text" name="Ip_S4" class="form-control" placeholder="Enter IP Semester 4" required>
							</div>
							<div class="form-group">
								<label>IP Semester 5</label>
								<input type="text" required name="Ip_S5" class="form-control" placeholder="Enter IP Semester 5">
							</div>
							<div class="form-group">
								<label>IPK</label>
								<input type="text" required name="Ipk" class="form-control" placeholder="Enter IPK">
							</div>
						</div>
						<div class="form-group">
							<label style="padding-left: 14px">Keterangan Lulus</label>
							<div class="col-sm-12">
								<select  name="Ket_lulus" class="form-control m-b" required>
									<option>--- Keterangan Lulus ---</option>
									<option value="Tepat Waktu">Tepat Waktu</option>
									<option value="Tidak Tepat Waktu">Tidak Tepat Waktu</option>
								</select>
							</div>
						</div>
						<br>
						<div class="checkbox m-t-lg">
							<button type="submit" class="btn btn-sm btn-success pull-center text-uc m-t-n-xs"><strong>Simpan</strong></button>
						</div>                
					</form>
				</div>          
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
@endsection

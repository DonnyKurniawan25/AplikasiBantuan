@extends('layout.app')

@section('content') 

<section class="scrollable padder">
	<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
		<li><a href="#"><i class="fa fa-home"></i>Dashboard</a></li>
		<li><a href="#">Data Training</a></li>
	</ul>
	<div class="m-b-md">
		<h3 class="m-b-none">Data Training</h3>
	</div>
	<section class="panel panel-default">
		<header class="panel-heading">
			<b>Data Training</b>
			<i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i> 
		</header>
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
					</tr>
				</thead>
				<tbody>
					@foreach ($data as $p)
					<tr>
						<td>{{ $p->id}}</td>
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
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</section>
</section>
@endsection


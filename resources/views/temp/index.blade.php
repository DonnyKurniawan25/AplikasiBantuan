@extends('layout.app')

@section('content') 

<section class="scrollable padder">
	<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
		<li><a href="#"><i class="fa fa-home"></i>Dashboard</a></li>
		<li><a href="#">Laporan</a></li>
	</ul>
	<div class="m-b-md">
		<h3 class="m-b-none">Laporan</h3>
	</div>
	<section class="panel panel-default">
		<header class="panel-heading">
			<b>Laporan</b>
			<i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i> 
		</header>
		<div class="table-responsive">
			<table class="table table-striped table-bordered datatable">
				<thead>
					<tr>
						<th rowspan="2">No</th>
						<th rowspan="2" >Nim</th>
						<th rowspan="2" >Nama Mahasiswa</th>
						<th rowspan="2" >Jk</th>
						<th colspan="5" style="text-align: center;">IP SEMESETER</th>
						<th rowspan="2">IPK</th>
						<th rowspan="2">Keterangan Lulus</th>
					</tr>
					<tr>
						<th>1</th>
						<th>2</th>
						<th>3</th>
						<th>4</th>
						<th>5</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; ?>
					@foreach ($temp as $p)
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
						<td>{{ $p->testing->Ket_lulus }}</td>
					</tr>
					<?php $no++; ?>
					@endforeach
				</tbody>
			</table>
		</div>
	</section>
</section>

@endsection

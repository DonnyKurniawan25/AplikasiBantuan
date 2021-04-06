@extends('layout.app')

@section('content')

<section class="scrollable padder">
	<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
		<li><a href="#"><i class="fa fa-home"></i>Dashboard</a></li>
		<li><a href="#">Rules C4.5 (Pohon Keputusan)</a></li>
	</ul>
	<section class="panel panel-default">
		<header class="panel-heading">
			<b>RULES C4.5 (Pohon Keputusan)</b>
			<i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i> 
		</header><br>
		<div class="card-content collapse show">
			<div class="card-body" style="font-family: courier new; margin-left: 50px">
				@include('c45')

				<?php

				$data2 = [];

				$attributes = [1 => "Jk", 2 => "Ips1", 3 => "Ips2", 4 => "Ips3", 5 => "Ips4", 6 => "Ips5", 7 => "Ipk"]; 

				$no = 0;
				foreach ($data as $dt_train) {
					$data2[$no][0] = $dt_train->Jk;
					$data2[$no][1] = $dt_train->Ip_S1;
					$data2[$no][2] = $dt_train->Ip_S2;
					$data2[$no][3] = $dt_train->Ip_S3;
					$data2[$no][4] = $dt_train->Ip_S4;
					$data2[$no][5] = $dt_train->Ip_S5;
					$data2[$no][6] = $dt_train->Ipk;
					$data2[$no][7] = $dt_train->Ket_lulus;
					$no++;
				}  

				$c45 = new C45; 

				$c45->setData($data2)->setAttributes($attributes); 

				$c45->hitung(); 

				$c45->printRules();

				?>
			</div>
		</div>
	</section>
</section>

@endsection
@extends('layout.app')

@section('content') 

@include('c45')

<?php 
$koneksi = mysqli_connect("localhost","root","","db_prediksikelulusan");
$sql = "SELECT * FROM tbl_training WHERE id IN('77','54','116','157','163','146','139','68','126','38','98','44','4','133','76','190','92','84','40','81','60','1','167','107','138','123','29','131','168')";

$query = mysqli_query($koneksi,$sql);

$sql2 = "SELECT * FROM tbl_training";


$query2 = mysqli_query($koneksi,$sql2);
$data2 = [];

$attributes = [1 => "Jk", 2 => "Ips1", 3 => "Ips2", 4 => 'Ips3', 5 => 'Ips4', 6 => 'Ips5', 7 => 'Ipk']; 

$no = 0;
while($dt_train = mysqli_fetch_array($query2)) {
	$data2[$no][0] = $dt_train['Jk'];
	$data2[$no][1] = $dt_train['Ip_S1'];
	$data2[$no][2] = $dt_train['Ip_S2'];
	$data2[$no][3] = $dt_train['Ip_S3'];
	$data2[$no][4] = $dt_train['Ip_S4'];
	$data2[$no][5] = $dt_train['Ip_S5'];
	$data2[$no][6] = $dt_train['Ipk'];	
	$data2[$no][7] = $dt_train['Ket_lulus'];
	$no++;
}  

$c45 = new C45; 

$c45->setData($data2)->setAttributes($attributes); 

$c45->hitung(); 

?>
<?php 

$TrueP = 0;
$TrueN = 0;
$FalseP = 0;
$FalseN = 0;

?>
<section class="scrollable padder">
	<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
		<li><a href="#"><i class="fa fa-home"></i>Dashborad</a></li>
		<li><a href="#">Akurasi</a></li>
	</ul>
	<div class="m-b-md">
		<h3 class="m-b-none">Akurasi</h3>
	</div>
	<section class="panel panel-default">
		<header class="panel-heading">
			<b>Akurasi</b>
			<i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i> 
		</header>
		<div class="table-responsive">
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
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
						<th>Hasil Klasifikasi</th>
					</tr>
				</thead>
				<tbody>

					<?php while ($data = mysqli_fetch_array($query)) :?>
						<?php  
						$data_testing = [$data['Jk'],$data['Ip_S1'],$data['Ip_S2'],$data['Ip_S3'],$data['Ip_S4'],$data['Ip_S5'],$data['Ipk']]; 

						$keputusan = $c45->predictDataTesting($data_testing);
						
						if ($keputusan == "TEPAT WAKTU" && $data['Ket_lulus'] == "Tepat Waktu") {
							$TrueP = $TrueP + 1;
						}elseif ($keputusan == "TIDAK TEPAT WAKTU" && $data['Ket_lulus'] == "Tidak Tepat Waktu") {
							$TrueN += 1;
						}elseif ($keputusan == "TEPAT WAKTU" && $data['Ket_lulus'] == "Tidak Tepat Waktu") {
							$FalseP +=1;
						}elseif ($keputusan == "TIDAK TEPAT WAKTU" && $data['Ket_lulus'] == "Tepat Waktu") {
							$FalseN += 1;
						}
						?>
						<tr>
							<td><?= $data['Nim'] ?></td>
							<td><?= $data['Nama_mhs'] ?></td>
							<td><?= $data['Jk'] ?></td>
							<td><?= $data['Ip_S1'] ?></td>
							<td><?= $data['Ip_S2'] ?></td>
							<td><?= $data['Ip_S3'] ?></td>
							<td><?= $data['Ip_S4'] ?></td>
							<td><?= $data['Ip_S5'] ?></td>
							<td><?= $data['Ipk'] ?></td>
							<td><?= $data['Ket_lulus'] ?></td>
							<td><?= $keputusan ?></td>
						</tr>
					</tbody>
					<?php
				endwhile;
				?>
			</table>
		</div>
	</section>
	<div class="table-responsive">
		<table class="table table-border">
			<thead>
				<tr>
					<td rowspan="2" align="center">Aktual</td>
					<td colspan="2" align="center"> Classified as</td>
				</tr>
				<tr>
					<td align="center">Positif</td>
					<td align="center">Negatif</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td align="center">Positif</td>
					<td align="center">True Positives (TP)</td>
					<td align="center">False Negatives (FN)</td>
				</tr>
				<tr>
					<td align="center">Negatif</td>
					<td align="center">False Positives (FP)</td>
					<td align="center">True Negatives (FN)</td>
				</tr>
			</tbody>
		</table>
	</div>
	<?php $akurasi = ($TrueP + $TrueN)/($TrueP + $TrueN + $FalseP + $FalseN) * 100 ?>
	<?php $sensitivitas = ($TrueP)/($TrueP + $FalseN) * 100 ?>
	<?php $spesifitas = ($TrueN)/($TrueN + $FalseP) * 100 ?>
	<section class="panel panel-default">
		<header class="panel-heading">
			<b>Tingkat Akurasi</b>
			<i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i> 
		</header>
		<img style="padding-left: 20px" src="{{ asset('akurasi.png') }}"><br><br>
		<div style="padding-left: 20px">
			<h5>True Positif (TP) = <?= $TrueP ?></h5>
			<h5>True Negatif (TN) = <?= $TrueN ?></h5>
			<h5>False Positif (FP) = <?= $FalseP ?></h5>
			<h5>False Negatif (FN) = <?= $FalseN ?></h5>
		</div><br>
		<h4 style="padding-left: 20px">Akurasi = ( <?= $TrueP ?> + <?= $TrueN ?> )/(<?= $TrueP ?> + <?= $FalseN ?> + <?= $FalseP ?> + <?= $TrueN ?> ) * 100% = <?= $akurasi ?>%</h4>
		<h4 style="padding-left: 20px">Sensitivitas = ( <?= $TrueP ?> )/(<?= $TrueP ?> + <?= $FalseN ?>) * 100% = <?= $sensitivitas ?>%</h4>
		<h4 style="padding-left: 20px">Spesifitas = ( <?= $TrueN ?> )/(<?= $TrueN ?> + <?= $FalseP ?>) * 100% = <?= $spesifitas ?>%</h4><br>
		<h2 align="center">AKURASI = <?= $akurasi ?>%</h2>
		<h2 align="center">SENSITIVITAS = <?= $sensitivitas ?>%</h2>
		<h2 align="center">SPESIFITAS = <?= $spesifitas ?>%</h2>
	</section>
</section>


@endsection
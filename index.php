<?php 
include "conf.php";

$url = $model_url."?table=data_vaksin";
$json = file_get_contents($url);
$arr = json_decode($json);
$num = 1;

function generateGender($g) {
	if ($g == 'l') {
		return 'Laki-laki';
	} else if ($g == 'p') {
		return 'Perempuan';
	} else {
		return 'Tidak diketahui';
	}
}
?>
<html>
<head>
	<title>Vaksinasi Covid</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<body>
<noscript>You need to enable JavaScript to run this app.</noscript>
	<div class="container col-md-6 mt-4">
		<center><h3>Data Vaksinasi Covid-19</h3></center>
		<div class="card">
			<div class="card-header bg-success text-white ">
				Data Peserta <a href="tambah.php" class="btn btn-sm btn-primary float-right">Tambah</a>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Faskes</th>
							<th>Nama</th>
							<th>NIK</th>
							<th>Jenis Kelamin</th>
							<th>Umur</th>
							<th>No Hp</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($arr as $key=>$val): ?>
						<tr>
							<th><?=$num++;?></th>
							<th><?=$val->faskes_name;?></th>
							<th><?=$val->name;?></th>
							<th><?=$val->identity_number;?></th>
							<th><?=generateGender($val->gender);?></th>
							<th><?=$val->age;?></th>
							<th><?=$val->phone_number;?></th>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>


<script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>
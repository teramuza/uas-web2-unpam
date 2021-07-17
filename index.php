<?php 
include "conf.php";

if (isLoggedin() == false) {
	logout();
	die();
}

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
	<style>
    @media print {
        button.noPrint {
            display: none;
        }
        a.noPrint {
            display: none;
   		}
   		th.noPrint{
   			display: none;
   		}
	}
    </style>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<body>
<noscript>You need to enable JavaScript to run this app.</noscript>
	<div class="container col-md-10 mt-2">
		<center><h3>Data Vaksinasi Covid-19</h3></center>
		<div class="card">
			<div class="card-header bg-success text-white ">
				Data Peserta <a href="tambah.php" class="noPrint btn btn-sm btn-primary float-right">Tambah</a>
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
							<th class="noPrint">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php if(!empty($arr)): ?>
						<?php foreach ($arr as $val): ?>
						<tr>
							<th><?=$num++;?></th>
							<th><?=$val->faskes_name;?></th>
							<th><?=$val->name;?></th>
							<th><?=$val->identity_number;?></th>
							<th><?=generateGender($val->gender);?></th>
							<th><?=$val->age;?></th>
							<th><?=$val->phone_number;?></th>
							<th class="noPrint">
								<a href="edit.php" class="noPrint btn-warning btn">Ubah</a>
								<a href="hapus.php" class="noPrint btn-danger btn">Hapus</a>
								<button type="button" class="noPrint btn btn-primary" value="Cetak Nota" onclick="window.print()">Cetak</button><br>
							</th>
						</tr>
						<?php endforeach; ?>
						<?php endif; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
<script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>
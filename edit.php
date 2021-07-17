<!DOCTYPE html>
<html>
<head>
	<title>Vaksinasi Covid</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<body>
	<div class="container col-md-6 mt-4">
		<center><h3>Form Edit Data Peserta</h3></center>
		<div class="card">
			<div class="card-header bg-success text-white">
				Edit Data Peserta
			</div>
			<div class="card-body">
				<form action="" method="post" role="form">
					<div class="form-group">
		              <label>Provinsi</label>
		                	<select name="role" class="form-control select2" style="width: 100%;">
			                  <option value="User" selected="selected">-- Pilih Provinsi --</option>
			                  <option value="">x</option>
			                  <option value="">x</option>
		                	</select>
		            </div>
					<div class="form-group">
		              <label>Kabupaten/Kota</label>
		                	<select name="role" class="form-control select2" style="width: 100%;">
			                  <option value="User" selected="selected">-- Pilih Kab/Kota --</option>
			                  <option value="">x</option>
			                  <option value="">x</option>
		                	</select>
		            </div>
					<div class="form-group">
		              <label>Kecamatan</label>
		                	<select name="role" class="form-control select2" style="width: 100%;">
			                  <option value="User" selected="selected">-- Pilih Kecamatan --</option>
			                  <option value="">x</option>
			                  <option value="">x</option>
		                	</select>
		            </div>
		            <div class="form-group">
		              <label>Jenis Faskes</label>
		                	<select name="role" class="form-control select2" style="width: 100%;">
			                  <option value="User" selected="selected">-- Pilih Jenis Faskes --</option>
			                  <option value="">x</option>
			                  <option value="">x</option>
		                	</select>
		            </div>
		            <div class="form-group">
		              <label>Nama Faskes</label>
		                	<select name="role" class="form-control select2" style="width: 100%;">
			                  <option value="User" selected="selected">-- Pilih Nama Faskes --</option>
			                  <option value="">x</option>
			                  <option value="">x</option>
		                	</select>
		            </div>
					<div class="form-group">
						<label>NIK</label>
						<input class="form-control" type="text" name="" placeholder="Masukan NIK" required="">
					</div>
					<div class="form-group">
						<label>Nama</label>
						<input class="form-control" type="text" name="" placeholder="Masukan Nama" required="">
					</div>
					<div class="form-group">
						<label>Jenis Kelamin</label><br>
						<input type="radio" name="jenkel" id="jenkel" value="Laki-laki"> Laki-laki
						<input type="radio" name="jenkel" id="jenkel" value="Perempuan"> Perempuan
					</div>
					<div class="form-group">
						<label>Umur</label>
						<input class="form-control" type="number" name="" placeholder="Masukan Umur" required="">
					</div>
					<div class="form-group">
						<label>Tanggal Lahir</label>
						<input class="form-control" type="number" name="" placeholder="Masukan Tanggal Lhir" required="">
					</div>
					<div class="form-group">
						<label>No Hp</label>
						<input class="form-control" type="text" name="" placeholder="Masukan No Hp" required="">
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<textarea class="form-control" type="text" name="" placeholder="Masukan Alamat" required=""></textarea>
					</div>
					<button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>
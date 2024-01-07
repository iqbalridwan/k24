<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
		<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js' ?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js' ?>"></script>
	</head>
<div class="container">
	<div class="card">
		<div class="card-header text-center"><h4>Daftar Member Baru</h4></div>
		<div class="card-body">
			<a href="<?php echo base_url().'login/index' ?>" class='btn btn-sm btnlight btn-outline-dark pull-right'>
				<i class="fa fa-arrow-left"></i>Kembali</a>
			<br/><br/>
					<form method="post" action="<?php echo base_url().'login/registrasi_aksi'; ?>">					
					<div class="form-group">
						<label class="font-weight-bold" for="nama">Nama Lengkap</label>
						<input type="text" class="form-control" name="name" placeholder="Masukan Nama Lengkap" required="required" >
					</div>
					<div class="form-group">
						<label class="font-weight-bold" for="password">Password</label>
						<input type="password" class="form-control" name="password" placeholder="Masukan Password">
						<small class="form-text text-muted">Masukan password.</small>
					</div>
					<div class="form-group">
						<label class="font-weight-bold" for="phone">Nomor Telepon</label>
						<input type="text" class="form-control" name="phone" placeholder="Masukan Nomor Telepon" required="required">
					</div>
					<div class="form-group">
						<label class="font-weight-bold" for="nama">Tanggal Lahir</label>
		                    <div class='input-group date' id='date'>
							<input class="form-control" type="date" name="birthdate">
						</div>
					</div>
					<div class="form-group">
						<label class="font-weight-bold" for="email">E-mail</label>
						<input type="text" class="form-control" name="email" placeholder="Masukan E-mail" required="required">
					</div>
					<div class="form-group">
						<label class="font-weight-bold" for="gender">Jenis Kelamin</label>
						<select name="gender" class="form-control">
							<option value="male">Male</option>
							<option value="female">Female</option>
						</select>
					</div>
					<div class="form-group">
						<label class="font-weight-bold" for="nama">Nomor Induk Kepegawaian</label>
						<input type="hidden">
						<input type="text" class="form-control" name="id_card_no" placeholder="Masukan NIK" required="required">
					</div>
					<div class="form-group">
						<label class="font-weight-bold" for="photo">Foto</label>
						<input type="file" name="photo_path">
					</div>
					<input type="submit" class="btn btn-primary" value="Simpan">
					</form>
		</div>
	</div>
</div>
</html>

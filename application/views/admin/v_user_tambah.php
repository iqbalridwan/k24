<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
		<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js' ?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js' ?>"></script>
	</head>
<div class="container">
	<div class="card">
		<div class="card-header text-center"><h4>Tambah Anggota Baru</h4></div>
		<div class="card-body">
			<a href="<?php echo base_url().'admin/user' ?>" class='btn btn-sm btnlight btn-outline-dark pull-right'>
				<i class="fa fa-arrow-left"></i>Kembali</a>
			<br/><br/>
					<form method="post" action="<?php echo base_url().'admin/user_tambah_aksi'; ?>">					
					<div class="form-group">
						<label class="font-weight-bold" for="username">Username</label>
						<input type="text" class="form-control" name="username" placeholder="Masukan username" required="required" >
					</div>
					<div class="form-group">
						<label class="font-weight-bold" for="password">Password</label>
						<input type="password" class="form-control" name="password" placeholder="Masukan Password">
						<small class="form-text text-muted">Masukan password.</small>
					</div>
					<input type="submit" class="btn btn-primary" value="Simpan">
					</form>
		</div>
	</div>
</div>
</html>

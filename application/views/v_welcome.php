<!DOCTYPE html>
<html>
	<head>
		<title>  Sistem Informasi PT. K-24 Indonesia  </title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
		<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js' ?>"></script>
		<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js' ?>"></script>
	</head>
	<body class="bg-dark">
		<div class="container">
			<br/>
			<h3 class="font-weight-normal text-center text-white">SISTEM INFORMASI PT. K-24 Indonesia</h3>
			<h2 class="font-weight-normal text-center text-white mb-5"><b>SISTEM INFORMASI PT. K-24 Indonesia</b></h2>
			<div class="col-md-4 offset-md-4">
				<div class="card">
					<div class="card-body">
					<form method="post" action="<?php echo
					base_url().'login/login'; ?>">
					<button type="submit" class="btn btn-primary">Login</button>
					<b> belum punya akun?	</b>
				<div class="card-body"><a href="<?php echo base_url().'login/registrasi' ?>"
			class='btn btn-sm btn-success pull-right'><i class="fa fa-plus"></i>Daftar</a><br/><br/>
			</div>
				<div class="card-body"><a href="<?php echo base_url().'login/member_json' ?>"
			class='btn btn-sm btn-success pull-right'><i class="fa fa-plus"></i>Data Member Json</a><br/><br/>
			</div>
				</form>
		</div>
	</div>
</div>
</body>
</html>


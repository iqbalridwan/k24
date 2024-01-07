<div class="container">
	<div class="card">
		<div class="card-header text-center"><h4>Edit Anggota</h4></div>
		<div class="card-body">
			<a href="<?php echo base_url().'admin/user' ?>" class='btn btn-sm btnlight btn-outline-dark pull-right'>
				<i class="fa fa-arrow-left"></i>Kembali</a>
				<br/><br/>
				<?php foreach ($user as $p) {
					?>
					<form method="post" action="<?php echo base_url().'admin/user_update'; ?>">					
					<div class="form-group">
						<label class="font-weight-bold" for="username">Username</label>
						<input type="text" class="form-control" name="username" placeholder="Edit Username" required="required" 
							value="<?php echo $p->username; ?>">
					</div>
					<div class="form-group">
						<label class="font-weight-bold" for="password">Password</label>
						<input type="password" class="form-control" name="password" placeholder="Masukan Password">
						<small class="form-text text-muted">Kosongkan jika tidak ingin mengubah password.</small>
					<input type="submit" class="btn btn-primary" value="Simpan">
					</form>
			<?php } ?>			
		</div>
	</div>
</div>
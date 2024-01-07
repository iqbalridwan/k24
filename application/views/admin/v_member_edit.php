<div class="container">
	<div class="card">
		<div class="card-header text-center"><h4>Edit Member</h4></div>
		<div class="card-body">
			<a href="<?php echo base_url().'admin/member' ?>" class='btn btn-sm btnlight btn-outline-dark pull-right'>
				<i class="fa fa-arrow-left"></i>Kembali</a>
				<br/><br/>
				<?php foreach ($member as $p) {
					?>
					<form method="post" action="<?php echo base_url().'admin/member_update'; ?>">					
					<div class="form-group">
						<label class="font-weight-bold" for="nama">Nama Lengkap</label>
						<input type="text" class="form-control" name="nama" placeholder="Masukan Nama Lengkap" required="required" 
							value="<?php echo $p->name; ?>">
					</div>
					<div class="form-group">
						<label class="font-weight-bold" for="password">Password</label>
						<input type="password" class="form-control" name="password" placeholder="Masukan Password">
						<small class="form-text text-muted">Kosongkan jika tidak ingin mengubah password.</small>
					</div>
					<div class="form-group">
						<label class="font-weight-bold" for="phone">Nomor Telepon</label>
						<input type="text" class="form-control" name="phone" placeholder="Masukan Nomor Telepon" required="required"
							value="<?php echo $p->phone; ?>">
					</div>
					<div class="form-group">
						<label class="font-weight-bold" for="nama">Tanggal Lahir</label>
						<input type="date" class="form-control" name="birthdate" placeholder="Masukan Tanggal Lahir" required="required" 
							value="<?php echo $p->birthdate; ?>">
					</div>
					<div class="form-group">
						<label class="font-weight-bold" for="email">E-mail</label>
						<input type="text" class="form-control" name="email" placeholder="Masukan E-mail" required="required" 
							value="<?php echo $p->email; ?>">
					</div>
					<div class="form-group">
						<label class="font-weight-bold" for="gender">Jenis Kelamin</label>
						<input type="text" class="form-control" name="gender" placeholder="Masukan Jenis Kelamin" required="required"
							value="<?php echo $p->gender; ?>">
					</div>
					<div class="form-group">
						<label class="font-weight-bold" for="nama">Nomor Induk Kepegawaian</label>
						<input type="hidden" value="<?php echo $p->id; ?>" name="id">
						<input type="text" class="form-control" name="nik" placeholder="Masukan NIK" required="required" 
							value="<?php echo $p->id_card_no; ?>">
					</div>
					<div class="form-group">
						<label class="font-weight-bold" for="photo">Foto</label>
						<input type="file" class="form-control" name="photo" placeholder="Foto" required="required"
							value="<?php echo $p->photo_path; ?>">
					</div>
					<input type="submit" class="btn btn-primary" value="Simpan">
					</form>
			<?php } ?>			
		</div>
	</div>
</div>
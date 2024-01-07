<div class="container">
	<div class="card">
		<div class="card-header text-center"><h4>Data Member</h4></div>
			<table class="table table-bordered table-striped tbale-hover">
				<tr><th width="1%">No</th> <th>Nama</th> <th>Password</th> <th>Nomor Telepon</th> <th>Tanggal Lahir</th> <th>E-mail</th> <th>Jenis Kelamin</th> <th>NIK</th> <th>Foto</th> <th width="16%">Opsi</th></tr>
				<?php
				$no = 1;
				foreach ($member as $p) {
					?>
					<tr><td><?php echo $no++;?></td>
						<td><?php echo $p->username; ?></td>
						<td><?php echo $p->password; ?></td>
						<td><?php echo $p->phone; ?></td>
						<td><?php echo $p->birthdate; ?></td>
						<td><?php echo $p->email; ?></td>
						<td><?php echo $p->gender; ?></td>
						<td><?php echo $p->id_card_no; ?></td>
						<td><?php echo $p->photo_path; ?></td>
						<td><a href="<?php echo base_url().'admin/member_edit/'.$p->id; ?>" class="btn btn-sm btn-warning">
								<i class="fa fa-wrench"></i>Edit</a>
							<a href="<?php echo base_url().'admin/member_hapus/'.$p->id; ?>" class="btn btn-sm btn-danger">
								<i class="fa fa-trash"></i>Hapus</a>
						</td>
					</tr>
					<?php
				}
				?>
			</table>
		</div>
	</div>
</div>
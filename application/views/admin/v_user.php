<div class="container">
	<div class="card">
		<div class="card-header text-center"><h4>Data Anggota</h4></div>
		<div class="card-body"><a href="<?php echo base_url().'admin/user_tambah' ?>"
			class='btn btn-sm btn-success pull-right'><i class="fa fa-plus"></i>Anggota Baru</a><br/><br/>
			<table class="table table-bordered table-striped tbale-hover">
				<tr><th width="1%">No</th> <th>Username</th> <th>Password</th> <th width="16%">Opsi</th></tr>
				<?php
				$no = 1;
				foreach ($user as $p) {
					?>
					<tr><td><?php echo $no++;?></td>
						<td><?php echo $p->username; ?></td>
						<td><?php echo $p->password; ?></td>
						<td><a href="<?php echo base_url().'admin/user_edit/'.$p->id; ?>" class="btn btn-sm btn-warning">
								<i class="fa fa-wrench"></i>Edit</a>
							<a href="<?php echo base_url().'admin/user_hapus/'.$p->id; ?>" class="btn btn-sm btn-danger">
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
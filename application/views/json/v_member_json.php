<div class="container">
	<div class="card">
		<div class="card-header text-center"><h4>Data Member</h4></div>
			<table class="table table-bordered table-striped tbale-hover">
				<tr><th width="1%">No</th> <th>Nama</th> <th>Password</th> <th>Nomor Telepon</th> <th>Tanggal Lahir</th> <th>E-mail</th> <th>Jenis Kelamin</th> <th>NIK</th> <th>Foto</th></tr>
				<?php
				$no = 1;
				foreach ($member as $p) {
					?>
					<tr><td><?php echo $no++;?></td>
						<td><?php echo json_encode($p->username); ?></td>
						<td><?php echo json_encode($p->password); ?></td>
						<td><?php echo json_encode($p->phone); ?></td>
						<td><?php echo json_encode($p->birthdate); ?></td>
						<td><?php echo json_encode($p->email); ?></td>
						<td><?php echo json_encode($p->gender); ?></td>
						<td><?php echo json_encode($p->id_card_no); ?></td>
						<td><?php echo json_encode($p->photo_path); ?></td>
	
					</tr>
					<?php
				}
				?>
			</table>
		</div>
	</div>
</div>
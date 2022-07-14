<div class="container">
	<div class="row">
		<div class="col-6">
			<h4>Detail Mahasiswa</h4>
			<ul class="list-group">
			  <li class="list-group-item"><?=$data['mhs']['nama']; ?></li>
			  <li class="list-group-item"><?=$data['mhs']['nim']; ?></li>
			  <li class="list-group-item"><?=$data['mhs']['email']; ?></li>
			  <li class="list-group-item"><?=$data['mhs']['jurusan']; ?></li>
			  <a href="<?= BASEURL; ?>/mahasiswa" class="mt-2"><button class="btn btn-primary">Kembali</button></a>

			</ul>
		</div>
	</div>
</div>
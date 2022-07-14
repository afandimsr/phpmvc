<div class="container mt-3">
	<div class="row">
		<div class="col-lg-6"><?php FLasher::flash(); ?></div>
	</div>
	<div class="row">
		<div class="col-lg-6 mb-2">
			<button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
			  Tambah Mahasiswa
			</button>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6 mb-2">
			<form action="<?=BASEURL; ?>/mahasiswa/cari" method="POST">
				<div class="input-group">
				  <input type="text" class="form-control" placeholder="cari mahasiswa..." aria-label="Recipient's username" name="keyword" id="keyword" autocomplete="off">
				  <div class="input-group-append">
				    <button class="btn btn-primary" type="submit">Cari</button>
				  </div>
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<h4 class="mb-3 mt-1">Daftar Mahasiswa</h4>
			<ul class="list-group">
			<?php foreach ($data['mhs'] as $mhs) :?>
			  <li class="list-group-item "><?= $mhs['nama']; ?>
			  		<a href="<?= BASEURL; ?>/mahasiswa/hapus/<?=$mhs['id']; ?>" class="badge badge-danger float-lg-right ml-1" onclick="return confirm('yakin ingin hapus ?')">Hapus</a>
			  		<a href="<?= BASEURL; ?>/mahasiswa/ubah/<?=$mhs['id']; ?>" class="badge badge-success float-right ml-1 tombolUbahData" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">Ubah</a>
			  		<a href="<?= BASEURL; ?>/mahasiswa/detail/<?=$mhs['id']; ?>" class="badge badge-primary float-right ml-1">Detail</a></li></li>
			  		
			<?php endforeach; ?>
			</ul>
			
		</div>
	</div>
</div>
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="POST">
        	<input type="hidden" name="id" id="id">
        	<div class="form-group">
			    <label for="nama">Nama</label>
			    <input type="text" name="nama" class="form-control" id="nama" >
			</div>
			<div class="form-group">
				<label for="nim">NIM</label>
				<input type="number" name="nim" class="form-control" id="nim" >
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" name="email" class="form-control" id="email" >
			</div>
			<div class="form-group">
				<label for="jurusan">Jurusan</label>
				<select name="jurusan" id="jurusan" class="form-control">
					<option value="Pendidikan Teknik Informatika dan Komputer">Pendidikan Teknik Informatika dan Komputer</option>
					<option value="Pendidikan Teknik Elektro">Pendidikan Tenik Elektro</option>
					<option value="Teknik Elektro">Teknik Elektro</option>
				</select>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Mahsiswa</button>
        </form>
      </div>
    </div>
  </div>
</div>
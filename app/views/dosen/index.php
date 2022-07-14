<div class="container">
	<div class="row">
		<div class="col-5">
			<h4>Daftar Dosen</h4>
			<?php foreach ($data['dosen'] as $dsn) :?>
				<ul>
					<li><?= $dsn['nama']; ?></li>
					<li><?= $dsn['nip']; ?></li>
					<li><?= $dsn['gelar']; ?></li>
				</ul>
			<?php endforeach; ?>
		</div>
	</div>
</div>
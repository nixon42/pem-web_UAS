<?php $this->extend('template'); ?>
<?php $this->section('content'); ?>
<div class="container">
	<h1>Daftar Paket Inet</h1>
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th>ID</th>
				<th>Nama</th>
				<th>Harga</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($inets as $inet) : ?>
				<tr>
					<td><?= $inet['inet_id'] ?></td>
					<td><?= $inet['inet_name'] ?></td>
					<td><?= $inet['inet_price'] ?></td>
					<td>
						<a href="<?= site_url('inets/edit/' . $inet['inet_id']) ?>" class="btn btn-primary">Edit</a>
						<a href="<?= site_url('inets/delete/' . $inet['inet_id']) ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<a href="<?= site_url('inets/create') ?>" class="btn btn-primary">Tambah Inet</a>
</div>
<?php $this->endsection(); ?>

<?php $this->extend('template'); ?>

<?php $this->section('content'); ?>
<div class="container">
	<h1>Buat Paket Internet</h1>
	<form method="post" action="<?= site_url('inets/store')?>">
		<div class="form-group">
			<label for="name">Nama:</label>
			<input type="text" class="form-control" name="inet_name" required>
		</div>
		<div class="form-group">
			<label for="price">Harga:</label>
			<input type="number" class="form-control" name="inet_price" required>
		</div>
		<button type="submit" class="btn btn-primary">Tambah</button>
	</form>
</div>
<?php $this->endsection(); ?>

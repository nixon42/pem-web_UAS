<!-- app/Views/inets/edit.php -->
<?php $this->extend('template'); ?>

<?php $this->section('content'); ?>
<div class="container">
    <h1>Edit Paket internet</h1>
    <form method="post" action="<?= site_url('inets/update/'.$inet['inet_id']) ?>">
        <div class="form-group">
            <label for="name">Nama:</label>
            <input type="text" class="form-control" name="inet_name" value="<?= $inet['inet_name'] ?>" required>
        </div>
        <div class="form-group">
            <label for="price">Harga:</label>
            <input type="number" class="form-control" name="inet_price" value="<?= $inet['inet_price'] ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<?php $this->endsection(); ?>

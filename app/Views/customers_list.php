<!-- app/Views/customers_list.php -->
<?php $this->extend('template'); ?>

<?php $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Pelanggan</h1>
	        <!-- <?= print_r($customers)?> -->
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Paket</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($customers as $customer) : ?>
                        <tr>
                            <td><?= $customer['customer_name'] ?></td>
                            <td><?= $customer['email'] ?></td>
                            <td><?= $customer['inet'] ?></td>
                            <td>
                                <a href="<?= site_url('customers/edit/' . $customer['customer_id']) ?>" class="btn btn-primary">Edit</a>
                                <a href="<?= site_url('customers/delete/' . $customer['customer_id']) ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="<?= site_url('customers/create') ?>" class="btn btn-primary mb-3">Tambah Pelanggan</a>
        </div>
    </div>
</div>

<?php $this->endsection(); ?>

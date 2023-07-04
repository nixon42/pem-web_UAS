<!-- app/Views/customers_list.php -->
<?php $this->extend('template'); ?>

<?php $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Pelanggan</h1>
            <form method="get" action="<?= site_url('customers') ?>" class="my-4">
                <div class="form-group">
                    <label for="inet">Filter Paket Internet:</label>
                    <select name="inet" class="form-control">
                        <option value="">Semua</option>
                        <?php foreach ($inets as $inet) : ?>
                            <option value="<?= $inet['inet_id'] ?>"><?= $inet['inet_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Filter</button>
            </form>

            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Inet</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($customers as $customer) : ?>
                        <tr>
                            <td><?= $customer['customer_name'] ?></td>
                            <td><?= $customer['email'] ?></td>
                            <td><?= $customer['inet'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="<?= site_url('customers/create') ?>" class="btn btn-primary mb-3">Tambah Pelanggan</a>
        </div>
    </div>
</div>

<?php $this->endsection(); ?>

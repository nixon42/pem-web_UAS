<!-- app/Views/customers/edit.php -->
<?php $this->extend('template'); ?>

<?php $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit Pelanggan</h1>
            <form method="post" action="<?= site_url('customers/update/' . $customer['customer_id']) ?>">
                <div class="form-group">
                    <label for="customer_name">Nama:</label>
                    <input type="text" class="form-control" name="customer_name" value="<?= $customer['customer_name'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" value="<?= $customer['email'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="inet">Paket Inet:</label>
                    <select name="inet" class="form-control" required>
                        <?php foreach ($inets as $inet) : ?>
                            <option value="<?= $inet['inet_id'] ?>" <?= $inet['inet_id'] == $customer['inet'] ? 'selected' : '' ?>>
                                <?= $inet['inet_name'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>

<?php $this->endsection(); ?>

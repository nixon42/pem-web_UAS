<!-- app/Views/customers/create.php -->
<?php $this->extend('template'); ?>

<?php $this->section('content'); ?>
<div class="container mt-4">
  <h2>Create Customer</h2>

  <form method="POST" action="<?= site_url('/customers/store') ?>">
    <div class="form-group">
      <label for="customer_name">Customer Name</label>
      <input type="text" class="form-control" id="customer_name" name="customer_name" required>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="inet">Inet</label>
      <select class="form-control" id="inet" name="inet" required>
        <?php foreach ($inets as $inet) : ?>
          <option value="<?= $inet['inet_id'] ?>"><?= $inet['inet_name'] ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
  </form>
</div>
<?php $this->endsection(); ?>
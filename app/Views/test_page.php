<?= $this->extend('layouts/test') ?>

<?= $this->section('content') ?>
<div class="container mx-auto py-8">
  <h1 class="text-3xl font-bold text-gray-800"><?= isset($title) ? esc($title) : 'Test Page' ?></h1>
  <p class="mt-4 text-gray-600">This is a test page using the test layout.</p>
  <div class="mt-4">
    <span class="inline-block bg-blue-500 text-white px-3 py-1 rounded">
      Layout Test Successful
    </span>
  </div>
  <?php if (isset($description)): ?>
    <p class="mt-4 text-gray-500"><?= esc($description) ?></p>
  <?php endif; ?>
</div>
<?= $this->endSection() ?>
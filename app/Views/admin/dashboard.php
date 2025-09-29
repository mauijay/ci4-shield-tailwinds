<?= $this->extend('layouts/admin'); ?>
<?= $this->section('content'); ?>
<div class="container m-auto p-4 text-center">
  <h1 class="text-2xl font-bold text-blue-700"><?= $title . ' - Welcome, ' . auth()->user()->username; ?></h1>
  <h2 class="text-5xl text-red-500"><?= $title ?> is Under Construction -v<?= app_version(); ?></h2>
  <p class="text-gray-700 pt-4">This will be the <?= $title ?> page of your site.</p>
</div>
<?= $this->endSection(); ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="base-url" content="<?= base_url(); ?>">
  <title><?= $this->renderSection('title') ?><?= config('App')->siteName ?></title>
  <meta name="description" content="This is the <?= $title ?> page." />
  <meta name="author" content="jaycadla@gmail.com">
  <?= $this->include('partials/back/_favicon') ?>
  <!-- Other head content -->
  <?= vite_assets('admin') ?>
  <link rel="icon" type="image/x-icon" href="/favicon.ico">
  <link rel="stylesheet" href="<?= base_url('assets/css/admin.css?v=' . asset_version()) ?>">
  <?= $this->renderSection('custom-top-js') ?>
  <script src="https://kit.fontawesome.com/9ce245a629.js" crossorigin="anonymous"></script>
</head>
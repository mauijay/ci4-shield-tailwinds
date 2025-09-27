<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="base-url" content="<?= base_url(); ?>">
  <title><?= $title ?></title>
  <meta name="description" content="This is the <?= $title ?> page." />
  <meta name="author" content="jaycadla@gmail.com">
  <?= $this->include('partials/back/_favicon') ?>
  <link rel="icon" type="image/x-icon" href="/favicon.ico">
  <link rel="stylesheet" href="/assets/css/admin.css?v=<?= setting('system.version') ?>">
  <?= $this->renderSection('custom-top-js') ?>  
</head> 
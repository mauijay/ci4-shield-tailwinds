<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= (esc($title) ?? '808bs') . ' - ' . env('app.name', 'HawaiiBusinessSolutions.') ?></title>
  <link rel="stylesheet" href="<?= base_url('assets/css/styles.css?v=' . asset_version()) ?>">
  <!--    Custom  js  -->
  <?= $this->renderSection('custom-top-js') ?>
  <?= $this->renderSection('meta_seo'); ?>
  <?= $this->include('partials/front/_gtm') ?>
</head>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= (esc($title) ?? '808bs') . ' - ' . env('app.name', 'HawaiiBusinessSolutions -v' .app_version()) ?></title>  
  
  <!-- Smart asset loading - handles both CLI and Vite workflows -->
  <?= vite_assets('app') ?>
  
  <!--    Custom  js  -->
  <?= $this->renderSection('custom-top-js') ?>
  <?= $this->renderSection('meta_seo'); ?>
  <?= $this->include('partials/front/_gtm') ?>
</head>
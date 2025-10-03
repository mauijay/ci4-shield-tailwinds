<!DOCTYPE html>
<html lang="en-US" data-theme="light">  
  <?= $this->include('partials/back/_head') ?>
  <body class="relative min-h-screen flex flex-col bg-slate-200">
    <!--  Navbar  -->
    <?= $this->include('partials/back/_navbar') ?>    
    <!--  Page Header and Content  -->
    <?= $this->renderSection('content') ?>
    <?= $this->include('partials/back/_footer') ?>    
    <?= $this->renderSection('modals') ?>
    <?= $this->include('partials/back/_js') ?>
    <?= $this->renderSection('pageScripts') ?>
    <?= $this->include('partials/back/_notifications.php') ?>    
  </body>
</html>
<!DOCTYPE html>
<html lang="en-US" data-theme="light">  
  <?= $this->include('partials/front/_head') ?>
  <body class="relative min-h-screen flex flex-col bg-slate-200">
    <?= $this->include('partials/front/_gtag_js') ?>
    <!--  Navbar  -->
    <?= $this->include('partials/front/_navbar') ?>    
    <!--  Page Header and Content  -->
    <?= $this->renderSection('content') ?>
    <?= $this->include('partials/front/_footer') ?>    
    <?= $this->renderSection('modals') ?>
    <?= $this->include('modals/logout') ?>
    <?= $this->include('partials/front/_js') ?>
    <?= $this->renderSection('pageScripts') ?>
    <?= $this->include('partials/front/_notifications.php') ?>    
  </body>
</html>


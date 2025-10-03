<!DOCTYPE html>
<html lang="en">
<?= $this->include('partials/front/_head') ?>

<body class="flex items-center justify-center bg-slate-200">
  <main>
    <?= $this->include('partials/front/_navbar') ?>
    <?= $this->renderSection('content') ?>
    <?= $this->include('partials/front/_footer') ?>
    <?= $this->renderSection('modals') ?>
    <?= $this->include('modals/logout') ?>
    <?= $this->include('partials/front/_js') ?>
    <?= $this->renderSection('pageScripts') ?>
    <?= $this->include('partials/front/_notifications.php') ?>
  </main>
</body>

</html>
<!DOCTYPE html>
<html lang="en-US" data-theme="light">
<?= $this->include('partials/back/_head') ?>

<body class="relative min-h-screen bg-gray-50 font-sans antialiased">
  <!--  Mobile sidebar overlay  -->
  <div class="fixed inset-0 bg-black bg-opacity-50 z-40 lg:hidden hidden" id="sidebar-overlay"></div>

  <!--  Fixed sidebar  -->
  <?= $this->include('partials/back/_sidebar') ?>

  <!--  Main content area with responsive layout  -->
  <div class="lg:ml-64">
    <!--  Mobile header with menu button  -->
    <div class="lg:hidden bg-white border-b border-gray-100 shadow-sm">
      <div class="flex items-center justify-between px-4 py-3">
        <button id="mobile-menu-btn" class="text-gray-600 hover:text-gray-900 focus:outline-none">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
        <h1 class="text-lg font-semibold text-gray-900">Admin</h1>
        <div class="w-6"></div> <!-- Spacer for centering -->
      </div>
    </div>

    <!--  Content container  -->
    <div class="flex flex-col min-h-screen lg:min-h-0">
      <!--  Main content area  -->
      <main class="flex-grow">
        <?= $this->renderSection('content') ?>
      </main>

      <!--  Footer  -->
      <?= $this->include('partials/back/_footer') ?>
    </div>
  </div>

  <?= $this->renderSection('modals') ?>
  <?= $this->include('partials/back/_js') ?>
  <?= $this->renderSection('pageScripts') ?>
  <?= $this->include('partials/back/_notifications.php') ?>
</body>

</html>

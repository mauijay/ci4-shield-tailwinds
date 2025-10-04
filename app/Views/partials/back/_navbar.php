<!-- Navbar -->
<header class="fixed top-0 left-64 right-0 h-16 bg-white border-b border-gray-100 shadow-sm flex items-center justify-between px-6 z-50">
  <h1 class="text-lg font-semibold">Dashboard</h1>

  <!-- User dropdown -->
  <div x-data="{ open: false }" class="relative">
    <!-- Trigger -->
    <button @click="open = !open" class="flex items-center space-x-2 focus:outline-none">
      <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-700">Online</span>
      <img src="https://i.pravatar.cc/40" class="w-8 h-8 rounded-full border" alt="User">
      <i data-lucide="chevron-down" class="w-5 h-5"></i>
    </button>

    <!-- Dropdown menu -->
    <div x-show="open" @click.away="open = false" x-transition
      class="absolute right-0 mt-2 w-48 bg-white border rounded-lg shadow-lg py-2 z-50">
      <a href="<?= route_to('account.profile') ?>"
        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 flex items-center gap-2">
        <i data-lucide="user" class="w-4 h-4"></i> Profile
      </a>
      <a href="<?= route_to('admin.settings') ?>"
        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 flex items-center gap-2">
        <i data-lucide="settings" class="w-4 h-4"></i> Settings
      </a>
      <hr class="my-1">
      <a href="<?= route_to('logout') ?>"
        class="block px-4 py-2 text-sm text-red-600 hover:bg-red-100 flex items-center gap-2">
        <i data-lucide="log-out" class="w-4 h-4"></i> Logout
      </a>
    </div>
  </div>
</header>
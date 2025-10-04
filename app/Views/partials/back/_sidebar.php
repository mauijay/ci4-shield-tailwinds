<!-- Sidebar -->
<aside class="fixed inset-y-0 left-0 w-64 bg-white border-r border-gray-100 shadow-lg flex flex-col transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out z-50" id="sidebar">
  <!-- Sidebar Header -->
  <div class="flex items-center justify-between h-16 px-4 border-b border-gray-100">
    <div class="flex items-center">
      <div class="w-8 h-8 bg-indigo-600 rounded-lg flex items-center justify-center">
        <span class="text-white font-bold text-sm">TW</span>
      </div>
      <span class="ml-2 text-lg font-bold text-gray-900">Admin</span>
    </div>
    <!-- Close button for mobile -->
    <button class="lg:hidden text-gray-400 hover:text-gray-600" id="sidebar-close">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
      </svg>
    </button>
  </div>
  
  <!-- Navigation -->
  <nav class="flex-1 p-4 overflow-y-auto">
    <div class="space-y-2">
      <a href="<?= site_url('admin/dashboard') ?>" 
         class="flex items-center gap-3 px-3 py-2 rounded-lg transition-colors <?= uri_string() === 'admin/dashboard' ? 'bg-indigo-50 text-indigo-600 border-r-2 border-indigo-600' : 'text-gray-700 hover:bg-gray-50' ?>">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
        </svg>
        <span class="font-medium">Dashboard</span>
      </a>
      
      <a href="<?= site_url('admin/users') ?>" 
         class="flex items-center gap-3 px-3 py-2 rounded-lg transition-colors <?= uri_string() === 'admin/users' ? 'bg-indigo-50 text-indigo-600 border-r-2 border-indigo-600' : 'text-gray-700 hover:bg-gray-50' ?>">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
        </svg>
        <span class="font-medium">Users</span>
      </a>
      
      <a href="<?= site_url('admin/reports') ?>" 
         class="flex items-center gap-3 px-3 py-2 rounded-lg transition-colors <?= uri_string() === 'admin/reports' ? 'bg-indigo-50 text-indigo-600 border-r-2 border-indigo-600' : 'text-gray-700 hover:bg-gray-50' ?>">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
        </svg>
        <span class="font-medium">Reports</span>
      </a>
      
      <a href="<?= site_url('admin/settings') ?>" 
         class="flex items-center gap-3 px-3 py-2 rounded-lg transition-colors <?= uri_string() === 'admin/settings' ? 'bg-indigo-50 text-indigo-600 border-r-2 border-indigo-600' : 'text-gray-700 hover:bg-gray-50' ?>">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
        </svg>
        <span class="font-medium">Settings</span>
      </a>
    </div>
  </nav>
  
  <!-- User section at bottom -->
  <div class="p-4 border-t border-gray-100">
    <div class="flex items-center gap-3 px-3 py-2 rounded-lg bg-gray-50">
      <div class="w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center">
        <span class="text-gray-600 font-medium text-sm"><?= substr(auth()->user()->username, 0, 1) ?></span>
      </div>
      <div class="flex-1 min-w-0">
        <p class="text-sm font-medium text-gray-900 truncate"><?= auth()->user()->username ?></p>
        <p class="text-xs text-gray-500 truncate"><?= auth()->user()->email ?? 'Admin' ?></p>
      </div>
    </div>
    
    <a href="<?= site_url('logout') ?>" 
       class="flex items-center gap-3 px-3 py-2 mt-2 rounded-lg text-red-600 hover:bg-red-50 transition-colors">
      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
      </svg>
      <span class="font-medium">Logout</span>
    </a>
  </div>
</aside>

<!-- Mobile sidebar overlay -->
<div class="fixed inset-0 bg-black bg-opacity-50 z-20 lg:hidden hidden" id="sidebar-overlay"></div>
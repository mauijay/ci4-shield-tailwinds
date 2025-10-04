<?= $this->extend('layouts/admin'); ?>
<?= $this->section('content'); ?>

<!-- Dashboard Content -->
<div class="p-4 lg:p-6 lg:pt-20">
  <!-- Desktop navbar (hidden on mobile) -->
  <div class="hidden lg:block mb-6">
    <?= $this->include('partials/back/_navbar') ?>
  </div>

  <!-- Content Area -->
  <div class="space-y-4 lg:space-y-6">
    <!-- Welcome Section -->
    <div class="bg-white rounded-lg shadow border border-gray-100 p-4 lg:p-6 text-center">
      <h1 class="text-lg lg:text-2xl font-bold text-blue-700 mb-2">
        <?= $title ?> - Welcome, <?= auth()->user()->username ?>
      </h1>
      <h2 class="text-2xl lg:text-4xl text-red-500 mb-4">
        <?= $title ?> is Under Construction
      </h2>
      <p class="text-sm lg:text-base text-gray-700 mb-2">
        This will be the <?= $title ?> page of your site.
      </p>
      <p class="text-xs lg:text-sm text-gray-500">
        Version <?= app_version() ?>
      </p>
    </div>

    <!-- Test Button Section -->
    <div class="bg-white rounded-lg shadow border border-gray-100 p-4 lg:p-6">
      <h3 class="text-lg font-semibold text-gray-900 mb-4">Quick Actions</h3>
      <div class="space-y-3">
        <button class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded transition-colors">
          <span class="text-sm font-medium">Primary Action</span>
        </button>
        <button class="w-full bg-gray-500 hover:bg-gray-700 text-white font-bold py-3 px-4 rounded transition-colors">
          <span class="text-sm font-medium">Secondary Action</span>
        </button>
      </div>
    </div>

    <!-- Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4 lg:gap-6">
      <!-- Card 1 -->
      <div class="bg-white shadow border border-gray-100 rounded-lg p-4 lg:p-6">
        <!-- Card content remains the same -->
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <div class="w-8 h-8 bg-blue-500 rounded-lg flex items-center justify-center">
              <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
              </svg>
            </div>
          </div>
          <div class="ml-4">
            <h3 class="text-sm lg:text-base font-semibold text-gray-900">Users</h3>
            <p class="text-xs lg:text-sm text-gray-500">Manage user accounts</p>
          </div>
        </div>
        <div class="mt-4">
          <div class="text-2xl font-bold text-gray-900">1,234</div>
          <div class="text-xs text-green-600">+5.4% from last month</div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-white shadow border border-gray-100 rounded-lg p-4 lg:p-6">
        <!-- Card content remains the same -->
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <div class="w-8 h-8 bg-green-500 rounded-lg flex items-center justify-center">
              <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
              </svg>
            </div>
          </div>
          <div class="ml-4">
            <h3 class="text-sm lg:text-base font-semibold text-gray-900">Reports</h3>
            <p class="text-xs lg:text-sm text-gray-500">View analytics</p>
          </div>
        </div>
        <div class="mt-4">
          <div class="text-2xl font-bold text-gray-900">89%</div>
          <div class="text-xs text-green-600">+2.1% from last week</div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="bg-white shadow border border-gray-100 rounded-lg p-4 lg:p-6 sm:col-span-2 xl:col-span-1">
        <!-- Card content remains the same -->
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <div class="w-8 h-8 bg-purple-500 rounded-lg flex items-center justify-center">
              <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
              </svg>
            </div>
          </div>
          <div class="ml-4">
            <h3 class="text-sm lg:text-base font-semibold text-gray-900">Performance</h3>
            <p class="text-xs lg:text-sm text-gray-500">System metrics</p>
          </div>
        </div>
        <div class="mt-4">
          <div class="text-2xl font-bold text-gray-900">99.9%</div>
          <div class="text-xs text-green-600">Uptime this month</div>
        </div>
      </div>
    </div>

    <!-- Recent Activity -->
    <div class="bg-white rounded-lg shadow border border-gray-100">
      <div class="p-4 lg:p-6 border-b border-gray-100">
        <h3 class="text-lg font-semibold text-gray-900">Recent Activity</h3>
      </div>
      <div class="p-4 lg:p-6">
        <div class="space-y-3">
          <div class="flex items-center text-sm">
            <div class="w-2 h-2 bg-green-400 rounded-full mr-3"></div>
            <span class="text-gray-600">System backup completed</span>
            <span class="ml-auto text-gray-400 text-xs">2 min ago</span>
          </div>
          <div class="flex items-center text-sm">
            <div class="w-2 h-2 bg-blue-400 rounded-full mr-3"></div>
            <span class="text-gray-600">New user registered</span>
            <span class="ml-auto text-gray-400 text-xs">5 min ago</span>
          </div>
          <div class="flex items-center text-sm">
            <div class="w-2 h-2 bg-yellow-400 rounded-full mr-3"></div>
            <span class="text-gray-600">Database optimization started</span>
            <span class="ml-auto text-gray-400 text-xs">1 hour ago</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>
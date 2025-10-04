<div class="mt-12 p-4 bg-gray-200 text-sm text-center">
    <p>Generated in {elapsed_time} seconds</p>
    <p>
        Running CodeIgniter <?= CodeIgniter\CodeIgniter::CI_VERSION ?>
        on PHP <?= phpversion() ?>
        and <?= config('database')->default['DBDriver'] ?>
    </p>
</div>
<footer class="bg-white border-t border-gray-100 py-4 px-6 mt-auto">
  <div class="flex items-center justify-between">
    <p class="text-sm text-gray-600">
      © <?= date('Y') ?> TW4 Admin. All rights reserved.
    </p>
    <p class="text-sm text-gray-500">
      Version <?= config('app')->version ?? '1.0.0' ?>
    </p>
  </div>
</footer>

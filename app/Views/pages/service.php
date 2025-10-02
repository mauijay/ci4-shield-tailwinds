<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<?= $this->include('partials/front/_header') ?>
<main>
  <section class=" w-full grid grid-cols-1 md:grid-cols-2 px-[10%] lg:px-[15%] py-8 gap-10 bg-zinc-100">
    <?php if (isset($services) && count($services)) : ?>
      <?php foreach ($services as $s): ?>
        <div class=" flex items-center justify-center">
          <div class=" card bg-base-100 shadow-xl image-full w-full aspect-video">
            <figure><img src="<?= base_url('assets//images/400x200.png') ?>" alt="Image"
                class=" object-cover w-full h-full" /></figure>
            <label for="modal<?= esc($s['id']) ?>" class="card-body items-center justify-center text-center cursor-pointer">
              <h2 class="card-title text-4xl text-blue-500"><?= esc($s['title']) ?></h2>
              <span class="text-blue-600 text-2xl"><?= esc($s['subtitle']) ?></span>
            </label>
            <?= view_cell('ServiceModalCell', [
              'id' => 'modal' . esc($s['id']),
              'title' => esc($s['title']),
              'section1Title' => esc($s['section1Title']),
              'section1Content' => nl2br(esc($s['section1Content'])),
              'section2Title' => esc($s['section2Title']),
              'section2Content' => nl2br(esc($s['section2Content'])),
              'schedule' => esc($s['schedule'])
            ]) ?>
          </div>
        </div>
      <?php endforeach; ?>                
      <?php else : ?>
          <h3>No Services</h3>
          <p>Unable to find any Services to offer you.</p>
      <?php endif ?>    
  </section>

  <div class="bg-white dark:bg-gray-900">
    <div class="container mx-auto px-6 py-8">
      <h2 class="text-center text-3xl font-semibold capitalize text-gray-800 dark:text-white lg:text-4xl">Pricing Plan
      </h2>
      <p class="mx-auto mt-4 max-w-2xl text-center text-gray-500 dark:text-gray-300 xl:mt-6">Lorem ipsum, dolor sit amet
        consectetur adipisicing elit. Alias quas magni libero consequuntur voluptatum velit amet id repudiandae ea,
        deleniti laborum in neque eveniet.</p>

      <div class="mt-6 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3 xl:mt-12 xl:gap-12">
        <div class="w-full space-y-8 rounded-lg border border-gray-100 p-8 text-center dark:border-gray-700">
          <p class="font-medium uppercase text-gray-500 dark:text-gray-300">Free</p>

          <h2 class="text-5xl font-bold uppercase text-gray-800 dark:text-gray-100">$0</h2>

          <p class="font-medium text-gray-500 dark:text-gray-300">Life time</p>

          <button
            class="mt-10 w-full transform rounded-md bg-blue-600 px-4 py-2 capitalize tracking-wide text-white transition-colors duration-300 hover:bg-blue-500 focus:bg-blue-500 focus:outline-hidden focus:ring-3 focus:ring-blue-300 focus:ring-opacity-80">Start
            Now</button>
        </div>

        <div class="w-full space-y-8 rounded-lg bg-blue-600 p-8 text-center">
          <p class="font-medium uppercase text-gray-200">Premium</p>

          <h2 class="text-5xl font-bold uppercase text-white dark:text-gray-100">$40</h2>

          <p class="font-medium text-gray-200">Per month</p>

          <button
            class="mt-10 w-full transform rounded-md bg-white px-4 py-2 capitalize tracking-wide text-blue-500 transition-colors duration-300 hover:bg-gray-100 focus:bg-gray-100 focus:outline-hidden focus:ring-3 focus:ring-gray-200 focus:ring-opacity-80">Start
            Now</button>
        </div>

        <div class="w-full space-y-8 rounded-lg border border-gray-100 p-8 text-center dark:border-gray-700">
          <p class="font-medium uppercase text-gray-500 dark:text-gray-300">Enterprise</p>

          <h2 class="text-5xl font-bold uppercase text-gray-800 dark:text-gray-100">$100</h2>

          <p class="font-medium text-gray-500 dark:text-gray-300">Life time</p>

          <button
            class="mt-10 w-full transform rounded-md bg-blue-600 px-4 py-2 capitalize tracking-wide text-white transition-colors duration-300 hover:bg-blue-500 focus:bg-blue-500 focus:outline-hidden focus:ring-3 focus:ring-blue-300 focus:ring-opacity-80">Start
            Now</button>
        </div>
      </div>
    </div>
  </div>
</main>
<?= $this->include('partials/front/_cta') ?>
<?= $this->endSection(); ?>
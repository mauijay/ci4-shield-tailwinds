<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<?= $this->include('partials/front/_header') ?>
<main class="w-full">
  <section role="about_us1" class="grid grid-cols-1 md:grid-cols-2 gap-2 text-blue-950 bg-white py-2">
    <div class="flex justify-center items-center">
      <img class="block w-1/2" src="<?= base_url('uploads/images/400x200.png') ?>" alt="image" srcset="">
    </div>
    <div class="flex flex-col justify-around px-4 items-center md:items-end gap-4 md:gap-0">
      <div class="flex flex-col gap-4 items-center md:items-start py-3 md:p-0">
        <span class="font-semibold text-xl">About option 1</span>
        <p class="text-center md:text-left">
          View the services we offer. *NOTE — the requirements disclosures on our Services page.
        </p>
      </div>
      <div>
        <a href="<?= site_url('services') ?>" class="majik-button">
          Services
          <svg class="shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m9 18 6-6-6-6" />
          </svg>
        </a>
      </div>
    </div>
  </section>
  <section role="about_us2" class="grid grid-cols-1 md:grid-cols-2 gap-2 bg-gray-200 text-blue-900 py-2">
    <div class="flex flex-col justify-around px-4 items-center md:items-start gap-4 md:gap-0">
      <div class="flex flex-col gap-4 items-center md:items-start py-3 md:p-0">
        <span class="font-semibold text-xl">About option 2</span>
        <p class="text-center md:text-left">
          Check out our events on our calendar page.
        </p>
      </div>
      <div>
        <a href="<?= site_url('/') ?>" class="majik-button">
          Calendar
          <svg class="shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m9 18 6-6-6-6" />
          </svg>
        </a>
      </div>
    </div>
    <div class="flex justify-center items-center">
      <img class="block w-1/2" src="<?= base_url('uploads/images/400x200.png') ?>" alt="image" srcset="">
    </div>
  </section>
  <section class="bg-white">
    <div class="flex flex-col items-center py-6">
      <div>
        <h2 class="card-title align-middle">Meet our staff</h2>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-4 gap-2">
        <div class="card w-96 bg-blue-100">
          <figure class="px-10 pt-10">
            <img class="block w-6/12" src="<?= base_url('uploads/images/profiles/avatar.png') ?>" alt="image" srcset="">
          </figure>
          <div class="card-body items-center text-center">
            <h2 class="card-title align-middle">Staff 1</h2>
          </div>
        </div>
        <div class="card w-96 bg-blue-100">
          <figure class="px-10 pt-10">
            <img class="block w-6/12" src="<?= base_url('uploads/images/profiles/avatar.png') ?>" alt="image" srcset="">
          </figure>
          <div class="card-body items-center text-center">
            <h2 class="card-title align-middle">Staff 2</h2>
          </div>
        </div>
        <div class="card w-96 bg-blue-100">
          <figure class="px-10 pt-10">
            <img class="block w-6/12" src="<?= base_url('uploads/images/profiles/avatar.png') ?>" alt="image" srcset="">
          </figure>
          <div class="card-body items-center text-center">
            <h2 class="card-title align-middle">Staff 3</h2>
          </div>
        </div>
        <div class="card w-96 bg-blue-100">
          <figure class="px-10 pt-10">
            <img class="block w-6/12" src="<?= base_url('uploads/images/profiles/avatar.png') ?>" alt="image" srcset="">
          </figure>
          <div class="card-body items-center text-center">
            <h2 class="card-title align-middle">Staff 4</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?= $this->include('partials/front/_cta') ?>
<?= $this->endSection(); ?>
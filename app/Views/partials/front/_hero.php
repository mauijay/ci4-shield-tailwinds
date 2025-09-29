<header class=" w-full h-[40vh] bg-[url('/uploads/images/background_home.jpg')] bg-center bg-cover bg-no-repeat
flex flex-col justify-center items-center">
  <span class=" font-extrabold text-4xl text-zinc-100"><?php echo $title ?>-v<?= app_version() ?></span>
  <span class=" text-zinc-100 mt-2"><?= esc($heading) ?? env('app.name'); ?></span>
  <button
    class="mt-6 rounded-lg bg-blue-600 px-6 py-2.5 text-center text-sm font-medium capitalize leading-5 text-white hover:bg-blue-500 focus:outline-hidden lg:mx-0 lg:w-auto">
    Start 14-Day free trial
  </button>
  <p class="mt-3 text-sm text-white">No credit card required</p>
</header>
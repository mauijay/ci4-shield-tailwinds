<header
  class=" w-full h-[20vh] bg-[url('assets/images/photographer.jpg')] bg-center bg-cover bg-no-repeat flex flex-col justify-center items-center">
  <span class=" font-extrabold text-4xl text-zinc-100"><?php echo $title ?></span>
  <span class=" text-zinc-100 mt-2"><?= esc($heading) ?? env('app.name'); ?></span>
</header>
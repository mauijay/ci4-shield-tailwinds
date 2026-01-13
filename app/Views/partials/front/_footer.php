<footer class="bg-white dark:bg-gray-900">
  <div class="container mx-auto px-6 py-12">
    <div class="md:-mx-3 md:flex md:items-center md:justify-between">
      <h3 class="text-3xl font-semibold tracking-tight text-gray-800 dark:text-white md:mx-3 xl:text-4xl">Subscribe our
        newsletter to get update.</h3>
      <div class="mt-6 shrink-0 md:mx-3 md:mt-0 md:w-auto">
        <a href="#" class="majik-button">
          <span class="mx-2">Sign Up Now</span>
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="mx-2 h-6 w-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
          </svg>
        </a>
      </div>
    </div>
    <hr class="my-6 border-gray-200 dark:border-gray-700 md:my-10" />
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
      <div>
        <p class="font-semibold text-gray-800 dark:text-white">Quick Link</p>
        <div class="mt-5 flex flex-col items-start space-y-2">
          <a href="/"
            class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Home</a>
          <a href="<?= url_to('terms') ?>"
            class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Terms of Service</a>
          <a href="<?= url_to('privacy') ?>"
            class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Privacy Policy</a>
        </div>
      </div>
      <div>
        <p class="font-semibold text-gray-800 dark:text-white">Industries</p>
        <div class="mt-5 flex flex-col items-start space-y-2">
          <a href="#"
            class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Retail
            & E-Commerce</a>
          <a href="#"
            class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Information
            Technology</a>
          <a href="#"
            class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Finance
            & Insurance</a>
        </div>
      </div>
      <div>
        <p class="font-semibold text-gray-800 dark:text-white">Services</p>
        <div class="mt-5 flex flex-col items-start space-y-2">
          <a href="#"
            class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Translation</a>
          <a href="#"
            class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Proofreading
            & Editing</a>
          <a href="#"
            class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">Content
            Creation</a>
        </div>
      </div>
      <div>
        <p class="font-semibold text-gray-800 dark:text-white">Contact Us</p>
        <div class="mt-5 flex flex-col items-start space-y-2">
          <a href="#"
            class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">+1
            808 555 1212</a>
          <a href="#"
            class="text-gray-600 transition-colors duration-300 hover:text-blue-500 hover:underline dark:text-gray-300 dark:hover:text-blue-400">info@example.com</a>
        </div>
      </div>
    </div>
    <hr class="my-6 border-gray-200 dark:border-gray-700 md:my-10" />
    <div class="flex flex-col items-center justify-between sm:flex-row">
      <a href="<?= site_url('/') ?>"
        class="text-2xl text-gray-800 transition-colors duration-300 hover:text-gray-700 dark:text-white dark:hover:text-gray-300"><?= config('App')->siteName ?> - v<?= env('app.version') ?? '0.0.0' ?>
      </a>
      <p class="mt-4 text-sm text-gray-500 dark:text-gray-300 sm:mt-0">
        © <?php if (! empty(config('App')->copyrightHolder)) : ?> Copyright <?= date('Y') ?> <?= config('App')->copyrightHolder ?> - All Rights Reserved <?php endif ?>
      </p>
    </div>
  </div>
</footer>

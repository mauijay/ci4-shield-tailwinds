<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<?= $this->include('partials/front/_hero') ?>


<div class="bg-white relative   flex items-center  n justify-center overflow-hidden z-50 ">

  <div
    class="relative mx-auto h-full px-4  pb-20   md:pb-10 sm:max-w-xl md:max-w-full md:px-24 lg:max-w-(--breakpoint-xl) lg:px-8">
    <div class="flex flex-col items-center justify-between lg:flex-row py-16">
      <div class=" relative ">
        <div class=" absolute top-0 -left-48 z-0  opacity-50 ">
          <img src="https://placehold.co/200x100" class="w-36 z-0  h-full    object-fill fill-y text-y   ">
        </div>
        <div class="lg:max-w-xl lg:pr-5 relative z-40">
          <h2 class="mb-6 max-w-lg text-5xl font-light leading-snug tracking-tight text-g1 sm:text-7xl sm:leading-snug">
            We make you look
            <span
              class="my-1 inline-block border-b-8 border-g4 bg-white px-4 font-bold text-g4 animate__animated animate__flash">different</span>
          </h2>
          <p class="text-base text-gray-700">We are a Hawaii registered agent service that helps out of state businesses register to do business in Hawaii, and helps keep local Hawaii businesses in good standing with the Hawaii Secretary of State by acting as your registered agent.</p>
          <div class="mt-10 flex flex-col items-center md:flex-row">
            <a href="/services"
              class="mb-3 inline-flex h-12 w-full items-center justify-center rounded-sm bg-green-600 px-6 font-medium tracking-wide text-white shadow-md transition hover:bg-blue-800 focus:outline-hidden md:mr-4 md:mb-0 md:w-auto">
              View More</a>

            <a class="majik-button" href="#">
              Watch how it works
              <svg xmlns="http://www.w3.org/2000/svg"
                class="ml-4 h-6 w-6 transition-transform group-hover:translate-x-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
              </svg>
            </a>


            
          </div>
        </div>


      </div>
      <div class="relative hidden lg:ml-32 lg:block lg:w-1/2">
        <svg xmlns="http://www.w3.org/2000/svg"
          class="my-6 mx-auto h-10 w-10 animate-bounce rounded-full bg-white p-2 lg:hidden" fill="none"
          viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M16 17l-4 4m0 0l-4-4m4 4V3"></path>
        </svg>
        <div class="abg-orange-400 mx-auto w-fit overflow-hidden rounded-[6rem] rounded-br-none rounded-tl-none">
          <img src="https://placehold.co/400x400">
        </div>
      </div>
    </div>
  </div>
  <div class="hidden text-9xl varien absolute top-6 left-1/4 text-g/10 z-40    ">
    About Us
  </div>
  <div class=" absolute -bottom-24 left-10 z-0  opacity-10 ">
    <svg width="800px" height="800px" viewBox="0 0 24 24"
      class="w-96 z-0  h-full    object-fill fill-gray-300 text-gray-300" fill="none"
      xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd"
        d="M12 6C12 5.44772 11.5523 5 11 5C10.4477 5 10 5.44772 10 6V16C10 16.5523 10.4477 17 11 17C11.5523 17 12 16.5523 12 16V6ZM9 9C9 8.44772 8.55228 8 8 8C7.44772 8 7 8.44772 7 9V16C7 16.5523 7.44772 17 8 17C8.55228 17 9 16.5523 9 16V9ZM15 9C15 8.44772 14.5523 8 14 8C13.4477 8 13 8.44772 13 9V16C13 16.5523 13.4477 17 14 17C14.5523 17 15 16.5523 15 16V9ZM18 13C18 12.4477 17.5523 12 17 12C16.4477 12 16 12.4477 16 13V16C16 16.5523 16.4477 17 17 17C17.5523 17 18 16.5523 18 16V13ZM6 15C6 14.4477 5.55228 14 5 14C4.44772 14 4 14.4477 4 15V16C4 16.5523 4.44772 17 5 17C5.55228 17 6 16.5523 6 16V15ZM21 15C21 14.4477 20.5523 14 20 14C19.4477 14 19 14.4477 19 15V16C19 16.5523 19.4477 17 20 17C20.5523 17 21 16.5523 21 16V15ZM4 18C3.44772 18 3 18.4477 3 19C3 19.5523 3.44772 20 4 20H21C21.5523 20 22 19.5523 22 19C22 18.4477 21.5523 18 21 18H4Z">
      </path>
    </svg>
  </div>

  <div class=" absolute -bottom-0 left-3/4 z-0  opacity-10 ">
    <svg width="800px" height="800px" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg"
      class="w-48 z-0  h-full -rotate-90   object-fill fill-red-300 text-red-300">
      <path
        d="M32 225h12.993A4.004 4.004 0 0 0 49 220.997V138.01c0-4.976.724-5.04 1.614-.16l12.167 66.708c.397 2.177 2.516 3.942 4.713 3.942h8.512a3.937 3.937 0 0 0 3.947-4S79 127.5 80 129s14.488 52.67 14.488 52.67c.559 2.115 2.8 3.83 5.008 3.83h8.008a3.993 3.993 0 0 0 3.996-3.995v-43.506c0-4.97 1.82-5.412 4.079-.965l10.608 20.895c1.001 1.972 3.604 3.571 5.806 3.571h9.514a3.999 3.999 0 0 0 3.993-4.001v-19.49c0-4.975 2.751-6.074 6.155-2.443l6.111 6.518c1.51 1.61 4.528 2.916 6.734 2.916h7c2.21 0 5.567-.855 7.52-1.92l9.46-5.16c1.944-1.06 5.309-1.92 7.524-1.92h23.992a4.002 4.002 0 0 0 4.004-3.992v-7.516a3.996 3.996 0 0 0-4.004-3.992h-23.992c-2.211 0-5.601.823-7.564 1.834l-4.932 2.54c-4.423 2.279-12.028 3.858-16.993 3.527l2.97.198c-4.962-.33-10.942-4.12-13.356-8.467l-11.19-20.14c-1.07-1.929-3.733-3.492-5.939-3.492h-7c-2.21 0-4 1.794-4 4.001v19.49c0 4.975-1.14 5.138-2.542.382l-12.827-43.535c-.625-2.12-2.92-3.838-5.127-3.838h-8.008c-2.207 0-3.916 1.784-3.817 4.005l1.92 42.998c.221 4.969-.489 5.068-1.585.224l-15.13-66.825c-.488-2.155-2.681-3.902-4.878-3.902h-8.512a3.937 3.937 0 0 0-3.947 4s.953 77-.047 75.5-13.937-92.072-13.937-92.072C49.252 34.758 47.21 33 45 33H31.999"
        fill-rule="evenodd"></path>
    </svg>
  </div>
  <div class=" absolute top-10 left-3/4 z-0  opacity-10 ">

    <svg fill="#000000" width="800px" height="800px" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg"
      class="w-96 z-0  h-full    object-fill fill-blue-300 text-blue-300">
      <path
        d="M230.704 99.2a4.004 4.004 0 0 0-4.01-3.995h-50.981c-2.215 0-5.212-1.327-6.693-2.964L155.289 77.08c-17.795-19.65-41.628-16.256-53.234 7.58l-38.736 79.557C60.42 170.172 52.705 175 46.077 175H29.359a3.996 3.996 0 0 0-3.994 3.995v10.01A4 4 0 0 0 29.372 193h24.7c8.835 0 19.208-6.395 23.174-14.293l43.645-86.914c3.964-7.894 12.233-9.228 18.473-2.974l17.184 17.219c3.123 3.13 9.242 5.667 13.647 5.667H226.7a4.005 4.005 0 0 0 4.004-3.994v-8.512z"
        fill-rule="evenodd"></path>
    </svg>
  </div>

</div>


<section class="bg-gray-200 dark:bg-gray-900">
  <div class="container mx-auto px-6 py-10">
    <h2 class="text-center text-3xl font-semibold capitalize text-gray-800 dark:text-white lg:text-4xl">Services
    </h2>
    <div class="mx-auto mt-6 flex justify-center">
      <span class="inline-block h-1 w-40 rounded-full bg-blue-500"></span>
      <span class="mx-1 inline-block h-1 w-3 rounded-full bg-blue-500"></span>
      <span class="inline-block h-1 w-1 rounded-full bg-blue-500"></span>
    </div>
    <p class="mt-4 text-center text-gray-500 dark:text-gray-300">Lorem ipsum dolor sit amet consectetur, adipisicing
      elit. Ratione perspiciatis quos delectus molestias cumque vel inventore magnam sequi praesentium! Nihil doloribus
      iste beatae molestias pariatur mollitia dolor odit, molestiae dolorem.</p>
    <div class="mt-8 grid grid-cols-1 gap-8 md:grid-cols-2 xl:mt-12 xl:grid-cols-3 xl:gap-12">
      <div>
        <img class="h-96 w-full rounded-lg object-cover"
          src="https://images.unsplash.com/photo-1621111848501-8d3634f82336?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1565&q=80"
          alt="" />
        <h2 class="mt-4 text-2xl font-semibold capitalize text-gray-800 dark:text-white">Best website collections
        </h2>
        <p class="mt-2 text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis ipsam, vel possimus
          harum dicta minus aliquid pariatur dolorum quisquam sapiente cupiditate quo, ea fugit a deserunt consequuntur,
          deleniti officiis labore!</p>
      </div>

      <div>
        <img class="h-96 w-full rounded-lg object-cover"
          src="https://images.unsplash.com/photo-1621609764180-2ca554a9d6f2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
          alt="" />
        <h2 class="mt-4 text-2xl font-semibold capitalize text-gray-800 dark:text-white">Block of Ui kit collections
        </h2>
        <p class="mt-2 text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis ipsam, vel possimus
          harum dicta minus aliquid pariatur dolorum quisquam sapiente cupiditate quo, ea fugit a deserunt consequuntur,
          deleniti officiis labore!</p>
      </div>

      <div>
        <img class="h-96 w-full rounded-lg object-cover"
          src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
          alt="" />
        <h2 class="mt-4 text-2xl font-semibold capitalize text-gray-800 dark:text-white">Ton’s of mobile mockup</h2>
        <p class="mt-2 text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis ipsam, vel possimus
          harum dicta minus aliquid pariatur dolorum quisquam sapiente cupiditate quo, ea fugit a deserunt consequuntur,
          deleniti officiis labore!</p>
      </div>
    </div>
  </div>
</section>



<section id="services" class="bg-white">
  <div class="container xl:max-w-6xl mx-auto px-6 py-10">
    <h2 class="text-center text-3xl font-semibold capitalize text-gray-800 dark:text-white lg:text-4xl">What we do</h2>
    <div class="mx-auto mt-6 flex justify-center">
      <span class="inline-block h-1 w-40 rounded-full bg-blue-500"></span>
      <span class="mx-1 inline-block h-1 w-3 rounded-full bg-blue-500"></span>
      <span class="inline-block h-1 w-1 rounded-full bg-blue-500"></span>
    </div>
    <p class="mt-4 text-center text-gray-500 dark:text-gray-300">Save time managing your business Advertising &amp; Content.</p>    
    <!-- row -->
    <div class="flex flex-wrap flex-row -mx-4 text-center">
      <div class="shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp" data-wow-duration="1s"
        style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
        <!-- service block -->
        <div
          class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
          <div class="inline-block text-gray-900 mb-4">
            <!-- icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="bi bi-search"
              viewBox="0 0 16 16">
              <path
                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
              </path>
            </svg>
          </div>
          <h3 class="text-lg leading-normal mb-2 font-semibold text-black">SEO Services</h3>
          <p class="text-gray-500">This is a wider card with supporting text below as a natural content.</p>
        </div>
        <!-- end service block -->
      </div>
      <div class="shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp" data-wow-duration="1s"
        data-wow-delay=".1s"
        style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
        <!-- service block -->
        <div
          class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
          <div class="inline-block text-gray-900 mb-4">
            <!-- icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor"
              class="bi bi-chat-square-dots" viewBox="0 0 16 16">
              <path
                d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z">
              </path>
              <path
                d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z">
              </path>
            </svg>
          </div>
          <h3 class="text-lg leading-normal mb-2 font-semibold text-black">Social Content</h3>
          <p class="text-gray-500">This is a wider card with supporting text below as a natural content.</p>
        </div>
        <!-- end service block -->
      </div>
      <div class="shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp" data-wow-duration="1s"
        data-wow-delay=".3s"
        style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
        <!-- service block -->
        <div
          class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
          <div class="inline-block text-gray-900 mb-4">
            <!-- icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor"
              class="bi bi-badge-ad" viewBox="0 0 16 16">
              <path
                d="M3.7 11l.47-1.542h2.004L6.644 11h1.261L5.901 5.001H4.513L2.5 11h1.2zm1.503-4.852l.734 2.426H4.416l.734-2.426h.053zm4.759.128c-1.059 0-1.753.765-1.753 2.043v.695c0 1.279.685 2.043 1.74 2.043.677 0 1.222-.33 1.367-.804h.057V11h1.138V4.685h-1.16v2.36h-.053c-.18-.475-.68-.77-1.336-.77zm.387.923c.58 0 1.002.44 1.002 1.138v.602c0 .76-.396 1.2-.984 1.2-.598 0-.972-.449-.972-1.248v-.453c0-.795.37-1.24.954-1.24z">
              </path>
              <path
                d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z">
              </path>
            </svg>
          </div>
          <h3 class="text-lg leading-normal mb-2 font-semibold text-black">Creative ads</h3>
          <p class="text-gray-500">This is a wider card with supporting text below as a natural content.</p>
        </div>
        <!-- end service block -->
      </div>
      <div class="shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp" data-wow-duration="1s"
        style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
        <!-- service block -->
        <div
          class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
          <div class="inline-block text-gray-900 mb-4">
            <!-- icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor"
              class="bi bi-card-checklist" viewBox="0 0 16 16">
              <path
                d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z">
              </path>
              <path
                d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z">
              </path>
            </svg>
          </div>
          <h3 class="text-lg leading-normal mb-2 font-semibold text-black">Brand Identity</h3>
          <p class="text-gray-500">This is a wider card with supporting text below as a natural content.</p>
        </div>
        <!-- end service block -->
      </div>
      <div class="shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp" data-wow-duration="1s"
        data-wow-delay=".1s"
        style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
        <!-- service block -->
        <div
          class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
          <div class="inline-block text-gray-900 mb-4">
            <!-- icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="bi bi-wallet2"
              viewBox="0 0 16 16">
              <path
                d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z">
              </path>
            </svg>
          </div>
          <h3 class="text-lg leading-normal mb-2 font-semibold text-black">Budget &amp; Marketing</h3>
          <p class="text-gray-500">This is a wider card with supporting text below as a natural content.</p>
        </div>
        <!-- end service block -->
      </div>
      <div class="shrink px-4 max-w-full w-full sm:w-1/2 lg:w-1/3 lg:px-6 wow fadeInUp" data-wow-duration="1s"
        data-wow-delay=".3s"
        style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
        <!-- service block -->
        <div
          class="py-8 px-12 mb-12 bg-gray-50 border-b border-gray-100 transform transition duration-300 ease-in-out hover:-translate-y-2">
          <div class="inline-block text-gray-900 mb-4">
            <!-- icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="bi bi-funnel"
              viewBox="0 0 16 16">
              <path
                d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2h-11z">
              </path>
            </svg>
          </div>
          <h3 class="text-lg leading-normal mb-2 font-semibold text-black">Optimize conversions</h3>
          <p class="text-gray-500">This is a wider card with supporting text below as a natural content.</p>
        </div>
        <!-- end service block -->
      </div>
    </div>
    <!-- end row -->
  </div>
</section>

<section class="bg-gray-200 dark:bg-gray-900">
  <div class="container mx-auto px-6 py-10">
    <h1 class="text-center text-3xl font-semibold capitalize text-gray-800 dark:text-white lg:text-4xl">What clients are saying</h1>

    <div class="mx-auto mt-6 flex justify-center">
      <span class="inline-block h-1 w-40 rounded-full bg-blue-500"></span>
      <span class="mx-1 inline-block h-1 w-3 rounded-full bg-blue-500"></span>
      <span class="inline-block h-1 w-1 rounded-full bg-blue-500"></span>
    </div>

    <div class="mx-auto mt-16 flex max-w-6xl items-start">
      <button
        class="hidden rounded-full border p-2 text-gray-800 transition-colors duration-300 hover:bg-gray-100 rtl:-scale-x-100 dark:border-gray-700 dark:text-gray-200 dark:hover:bg-gray-800 lg:block">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
          stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
        </svg>
      </button>

      <div>
        <p class="flex items-center text-center text-gray-500 lg:mx-8">Lorem ipsum dolor sit amet, consectetur
          adipisicing elit. Aperiam, quam. Odio voluptatem officiis eos illo! Pariatur, totam alias. Beatae accusamus
          earum quos obcaecati minima molestias. Possimus minima dolores itaque! Esse! Lorem ipsum dolor sit amet
          consectetur adipisicing elit. Ea voluptates fugiat corrupti laudantium dolores reiciendis pariatur esse quod
          nihil quia cupiditate debitis quisquam nemo, accusamus animi explicabo? Architecto, unde laboriosam?</p>

        <div class="mt-8 flex flex-col items-center justify-center">
          <img class="h-14 w-14 rounded-full object-cover"
            src="https://images.unsplash.com/photo-1499470932971-a90681ce8530?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
            alt="" />

          <div class="mt-4 text-center">
            <h1 class="font-semibold text-gray-800 dark:text-white">Mia Brown</h1>
            <span class="text-sm text-gray-500 dark:text-gray-400">Marketer</span>
          </div>
        </div>
      </div>

      <button
        class="hidden rounded-full border p-2 text-gray-800 transition-colors duration-300 hover:bg-gray-100 rtl:-scale-x-100 dark:border-gray-700 dark:text-gray-200 dark:hover:bg-gray-800 lg:block">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
          stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
        </svg>
      </button>
    </div>
  </div>
</section>

<section class="bg-white dark:bg-gray-900">
  <div class="container mx-auto px-6 py-10">
    <div class="text-center">
      <h1 class="text-3xl font-semibold capitalize text-gray-800 dark:text-white lg:text-4xl">From the blog</h1>

      <p class="mx-auto mt-4 max-w-lg text-gray-500">Salami mustard spice tea fridge authentic Chinese food dish salt
        tasty liquor. Sweet savory foodtruck pie.</p>
    </div>

    <div class="mt-8 grid grid-cols-1 gap-8 md:mt-16 md:grid-cols-2 xl:grid-cols-3">
      <div>
        <div class="relative">
          <img class="h-64 w-full rounded-lg object-cover object-center lg:h-80"
            src="https://images.unsplash.com/photo-1624996379697-f01d168b1a52?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
            alt="" />

          <div class="absolute bottom-0 flex bg-white p-3 dark:bg-gray-900">
            <img class="h-10 w-10 rounded-full object-cover object-center"
              src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
              alt="" />

            <div class="mx-4">
              <h1 class="text-sm text-gray-700 dark:text-gray-200">Tom Hank</h1>
              <p class="text-sm text-gray-500 dark:text-gray-400">Creative Director</p>
            </div>
          </div>
        </div>

        <h1 class="mt-6 text-xl font-semibold text-gray-800 dark:text-white">What do you want to know about UI</h1>

        <hr class="my-6 w-32 text-blue-500" />

        <p class="text-sm text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Blanditiis fugit dolorum amet dolores praesentium, alias nam? Tempore</p>

        <a href="#" class="mt-4 inline-block text-blue-500 underline hover:text-blue-400">Read more</a>
      </div>

      <div>
        <div class="relative">
          <img class="h-64 w-full rounded-lg object-cover object-center lg:h-80"
            src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
            alt="" />

          <div class="absolute bottom-0 flex bg-white p-3 dark:bg-gray-900">
            <img class="h-10 w-10 rounded-full object-cover object-center"
              src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
              alt="" />

            <div class="mx-4">
              <h1 class="text-sm text-gray-700 dark:text-gray-200">arthur melo</h1>
              <p class="text-sm text-gray-500 dark:text-gray-400">Creative Director</p>
            </div>
          </div>
        </div>

        <h1 class="mt-6 text-xl font-semibold text-gray-800 dark:text-white">All the features you want to know</h1>

        <hr class="my-6 w-32 text-blue-500" />

        <p class="text-sm text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Blanditiis fugit dolorum amet dolores praesentium, alias nam? Tempore</p>

        <a href="#" class="mt-4 inline-block text-blue-500 underline hover:text-blue-400">Read more</a>
      </div>

      <div>
        <div class="relative">
          <img class="h-64 w-full rounded-lg object-cover object-center lg:h-80"
            src="https://images.unsplash.com/photo-1597534458220-9fb4969f2df5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80"
            alt="" />

          <div class="absolute bottom-0 flex bg-white p-3 dark:bg-gray-900">
            <img class="h-10 w-10 rounded-full object-cover object-center"
              src="https://images.unsplash.com/photo-1531590878845-12627191e687?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
              alt="" />

            <div class="mx-4">
              <h1 class="text-sm text-gray-700 dark:text-gray-200">Amelia. Anderson</h1>
              <p class="text-sm text-gray-500 dark:text-gray-400">Lead Developer</p>
            </div>
          </div>
        </div>

        <h1 class="mt-6 text-xl font-semibold text-gray-800 dark:text-white">Which services you get from Meraki UI</h1>

        <hr class="my-6 w-32 text-blue-500" />

        <p class="text-sm text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Blanditiis fugit dolorum amet dolores praesentium, alias nam? Tempore</p>

        <a href="#" class="mt-4 inline-block text-blue-500 underline hover:text-blue-400">Read more</a>
      </div>
    </div>
  </div>
</section>

<section class="bg-gray-200 dark:bg-gray-900">
  <div class="container mx-auto max-w-4xl px-6 py-10">
    <h1 class="text-center text-4xl font-semibold text-gray-800 dark:text-white">Frequently asked questions</h1>

    <div class="mt-12 space-y-8">
      <div class="rounded-lg border-2 border-gray-100 dark:border-gray-700">
        <button class="flex w-full items-center justify-between p-8">
          <h1 class="font-semibold text-gray-700 dark:text-white">How i can play for my appoinment ?</h1>

          <span class="rounded-full bg-gray-200 text-gray-400">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6" />
            </svg>
          </span>
        </button>

        <hr class="border-gray-200 dark:border-gray-700" />

        <p class="p-8 text-sm text-gray-500 dark:text-gray-300">Lorem ipsum dolor sit, amet consectetur adipisicing
          elit. Voluptas eaque nobis, fugit odit omnis fugiat deleniti animi ab maxime cum laboriosam recusandae facere
          dolorum veniam quia pariatur obcaecati illo ducimus?</p>
      </div>

      <div class="rounded-lg border-2 border-gray-100 dark:border-gray-700">
        <button class="flex w-full items-center justify-between p-8">
          <h1 class="font-semibold text-gray-700 dark:text-white">Is the cost of the appoinment covered by private
            health insurance?</h1>

          <span class="rounded-full bg-blue-500 text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
          </span>
        </button>
      </div>

      <div class="rounded-lg border-2 border-gray-100 dark:border-gray-700">
        <button class="flex w-full items-center justify-between p-8">
          <h1 class="font-semibold text-gray-700 dark:text-white">Do i need a referral?</h1>

          <span class="rounded-full bg-blue-500 text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
          </span>
        </button>
      </div>

      <div class="rounded-lg border-2 border-gray-100 dark:border-gray-700">
        <button class="flex w-full items-center justify-between p-8">
          <h1 class="font-semibold text-gray-700 dark:text-white">What are your opening house?</h1>

          <span class="rounded-full bg-blue-500 text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
          </span>
        </button>
      </div>

      <div class="rounded-lg border-2 border-gray-100 dark:border-gray-700">
        <button class="flex w-full items-center justify-between p-8">
          <h1 class="font-semibold text-gray-700 dark:text-white">What can i expect at my first consultation?</h1>

          <span class="rounded-full bg-blue-500 text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
          </span>
        </button>
      </div>
    </div>
  </div>
</section>



<?= $this->include('partials/front/_cta') ?>











<?= $this->endSection(); ?>
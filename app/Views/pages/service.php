<?= $this->extend('layouts/main'); ?>

<?= $this->section('content'); ?>
<?= $this->include('partials/front/_header') ?>
<main>
  <section class=" w-full grid grid-cols-1 md:grid-cols-2 px-[10%] lg:px-[15%] py-8 gap-10 bg-zinc-100">
    <div class=" flex items-center justify-center">
      <div class=" card bg-base-100 shadow-xl image-full w-full aspect-video">
        <figure><img src="<?= base_url('assets/images/400x200.png') ?>" alt="Image"
            class=" object-cover w-full h-full" /></figure>
        <label for="modal1" class="card-body items-center justify-center text-center cursor-pointer">
          <h2 class="card-title">Service 1</h2>
          <span>Subtitle</span>
        </label>
        <input type="checkbox" id="modal1" class="modal-toggle" />
        <div class="modal" role="dialog">
          <div class="modal-box max-w-[50rem]">
            <h3 class="font-bold text-lg text-center">Service 1</h3>
            <div class=" flex flex-col text-justify whitespace-pre-line">
              <strong>Requirements:</strong>
              1. xxx
              2. xxx
              3. xxx
              4. xxx
              5. xxx
              <strong>Notes:</strong>
              - xxx
              - xxx
              - xxx
              - xxx
            </div>
            <div class="modal-action justify-center">
              <label for="modal1" class="btn btn-outline btn-error">Close</label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=" flex items-center justify-center">
      <div class="card bg-base-100 shadow-xl image-full w-full aspect-video">
        <figure><img src="<?= base_url('assets/images/400x200.png') ?>" alt="Shoes"
            class=" object-cover w-full h-full" /></figure>
        <label for="modal2" class="card-body items-center justify-center text-center">
          <h2 class="card-title">Service 2</h2>
          <span>Subtitle</span>
        </label>
        <input type="checkbox" id="modal2" class="modal-toggle" />
        <div class="modal" role="dialog">
          <div class="modal-box max-w-[50rem]">
            <h3 class="font-bold text-lg text-center">Service 2</h3>
            <div class=" text-justify flex flex-col">
              <span><strong>Schedule:</strong></span>
              <span>- Monday - Friday  8am - 4pm</span>
            </div>
            <div class=" flex flex-col text-justify whitespace-pre-line">
              <strong>Requirements:</strong>
              1. xxx
              2. xxx
              3. xxx
              4. xxx
              5. xxx
              <strong>Notes:</strong>
              - xxx
              - xxx
              - xxx
              - xxx
            </div>
            <div class="modal-action justify-center">
              <label for="modal2" class="btn btn-outline btn-error">Close</label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=" flex items-center justify-center">
      <div class="card bg-base-100 shadow-xl image-full w-full aspect-video">
        <figure><img src="<?= base_url('assets/images/400x200.png') ?>" alt="Shoes"
            class=" object-cover w-full h-full" /></figure>
        <label for="modal3" class="card-body items-center justify-center text-center">
          <h2 class="card-title">Service 3</h2>
          <span>Subtitle</span>
        </label>
        <input type="checkbox" id="modal3" class="modal-toggle" />
        <div class="modal" role="dialog">
          <div class="modal-box max-w-[50rem]">
            <h3 class="font-bold text-lg text-center"></h3>
            <div class=" text-justify flex flex-col">
              <span><strong>Schedule:</strong>Service 3</span>
              <span>- Wednesdays (10:00 AM and 2:00 PM)</span>
            </div>
            <div class=" flex flex-col text-justify whitespace-pre-line">
              <strong>Requirements:</strong>
              1. xxx
              2. xxx
              3. xxx
              4. xxx
              5. xxx

              <strong>Notes:</strong>
              - xxx
              - xxx
              - xxx
              - xxx
            </div>
            <div class="modal-action justify-center">
              <label for="modal3" class="btn btn-outline btn-error">Close</label>
            </div>
          </div>
        </div>
      </div>
    </div>    
    <div class=" flex items-center justify-center">
      <div class="card bg-base-100 shadow-xl image-full w-full aspect-video">
        <figure><img src="<?= base_url('assets/images/400x200.png') ?>" alt="Shoes"
            class=" object-cover w-full h-full" /></figure>
        <label for="modal5" class="card-body items-center justify-center text-center">
          <h2 class="card-title">Service 4</h2>
          <span>Subtitle</span>
        </label>
        <input type="checkbox" id="modal5" class="modal-toggle" />
        <div class="modal" role="dialog">
          <div class="modal-box max-w-[50rem]">
            <h3 class="font-bold text-lg text-center">Service 4</h3>
            <div class=" text-justify flex flex-col">
              <span><strong>Schedule:</strong></span>
              <span>- To be announced</span>
            </div>
            <div class=" flex flex-col text-justify whitespace-pre-line">
              <strong>Requirements:</strong>
              1. xxx
              2. xxx
              3. xxx
              4. xxx
              5. xxx

              <strong>Notes:</strong>
              - xxx
              - xxx
              - xxx
              - xxx
            </div>
            <div class="modal-action justify-center">
              <label for="modal5" class="btn btn-outline btn-error">Close</label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=" flex items-center justify-center">
      <div class="card bg-base-100 shadow-xl image-full w-full aspect-video">
        <figure><img src="<?= base_url('assets/images/400x200.png') ?>" alt="Shoes"
            class=" object-cover w-full h-full" /></figure>
        <label for="modal6" class="card-body items-center justify-center text-center">
          <h2 class="card-title">Service 5</h2>
          <span>Subtitle</span>
        </label>
        <input type="checkbox" id="modal6" class="modal-toggle" />
        <div class="modal" role="dialog">
          <div class="modal-box max-w-[50rem]">
            <h3 class="font-bold text-lg text-center">Service 5</h3>
            <div class=" text-justify flex flex-col">
              <span><strong>Schedule:</strong></span>
              <span>- Tuesday to Saturday (8:00 AM, 1:00 PM)</span>
              <span>- Friday (1:00 PM)</span>
            </div>
            <div class=" flex flex-col text-justify whitespace-pre-line">
              <strong>Requirements:</strong>
              1. xxx
              2. xxx
              3. xxx
              4. xxx
              5. xxx

              <strong>Notes:</strong>
              - xxx
              - xxx
              - xxx
              - xxx
            </div>
            <div class="modal-action justify-center">
              <label for="modal6" class="btn btn-outline btn-error">Close</label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=" flex items-center justify-center">
      <div class="card bg-base-100 shadow-xl image-full w-full aspect-video">
        <figure><img src="<?= base_url('assets/images/400x200.png') ?>" alt="Shoes"
            class=" object-cover w-full h-full" />
        </figure>
        <label for="modal7" class="card-body items-center justify-center text-center">
          <h2 class="card-title">Service 6</h2>
          <span>Subtitle</span>
        </label>
        <input type="checkbox" id="modal7" class="modal-toggle" />
        <div class="modal" role="dialog">
          <div class="modal-box max-w-[50rem]">
            <h3 class="font-bold text-lg text-center">Service 6</h3>
            <div class=" text-justify flex flex-col">
              <span><strong>Schedule:</strong></span>
              <span>- Monday - Friday:</span>
              <span>> 9:00 AM - 4:00 PM</span>
              <span>- Saturday:</span>
              <span>> 10:00 AM - 4:00 PM</span>
              <span>- Sunday: </span>
              <span>> Closed</span>              
            </div>
            <div class=" flex flex-col text-justify whitespace-pre-line">
              <strong>Purposes:</strong>
              1. xxx
              2. xxx
              3. xxx
              4. xxx
              5. xxx

              <strong>Notes:</strong>
              - Bring a bag Lunch
            </div>
            <div class="modal-action justify-center">
              <label for="modal7" class="btn btn-outline btn-error">Close</label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=" flex items-center justify-center">
      <div class="card bg-base-100 shadow-xl image-full w-full aspect-video">
        <figure><img src="<?= base_url('assets/images/400x200.png') ?>" alt="Shoes"
            class=" object-cover w-full h-full" /></figure>
        <label for="modal8" class="card-body items-center justify-center text-center">
          <h2 class="card-title">Service 7</h2>
          <span>Subtitle</span>
        </label>
        <input type="checkbox" id="modal8" class="modal-toggle" />
        <div class="modal" role="dialog">
          <div class="modal-box max-w-[50rem]">
            <h3 class="font-bold text-lg text-center">Service 7</h3>
            <div class=" text-justify flex flex-col">
              <span><strong>Schedule:</strong></span>
              <span>- Tuesday to Saturday (8:00 AM - 5:00 PM)</span>
            </div>
            <div class=" flex flex-col text-justify whitespace-pre-line">
              <strong>Types:</strong>
              1. xxx
              2. xxx
              3. xxx
              4. xxx
              5. xxx

              <strong>Notes:</strong>
              - xxx
              - xxx
              - xxx
              - xxx
            </div>
            <div class="modal-action justify-center">
              <label for="modal8" class="btn btn-outline btn-error">Close</label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=" flex items-center justify-center">
      <div class="card bg-base-100 shadow-xl image-full w-full aspect-video">
        <figure><img src="<?= base_url('assets/images/400x200.png') ?>" alt="Shoes"
            class=" object-cover w-full h-full" /></figure>
        <label for="modal9" class="card-body items-center justify-center text-center">
          <h2 class="card-title">Service 8</h2>
          <span>Subtitle</span>
        </label>
        <input type="checkbox" id="modal9" class="modal-toggle" />
        <div class="modal" role="dialog">
          <div class="modal-box max-w-[50rem]">
            <h3 class="font-bold text-lg text-center">Service 8</h3>
            <div class=" text-justify flex flex-col">
              <span><strong>Schedule:</strong></span>
              <span>- Tuesday to Saturday (8:00 AM - 11:30 AM, 1:30 PM - 5:00 PM)</span>
              <span>- Sunday (8:00 AM - 12:00 NN)</span>
            </div>
            <div class=" flex flex-col text-justify whitespace-pre-line">
              <strong>Types and Fees:</strong>
              1. xxx
              2. xxx
              3. xxx
              4. xxx
              5. xxx

              <strong>Notes:</strong>
              - xxx
              - xxx
              - xxx
              - xxx
            </div>
            <div class="modal-action justify-center">
              <label for="modal9" class="btn btn-outline btn-error">Close</label>
            </div>
          </div>
        </div>
      </div>
    </div>
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
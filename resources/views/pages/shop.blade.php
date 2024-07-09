<x-layout>
  <x-slot:title>{{$title}}</x-slot:title>
  <section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-12">
    <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">

      <!-- Heading & Filters -->
      <x-header-product></x-header-product>
      <div class="flex flex-col items-center">

        <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-4">
          @foreach ($products as $product )
          <div class="rounded-lg border border-gray-200 bg-blue p-6 shadow-sm dark:border-gray-700 ">
            <div class="h-56 w-full">
              <a href="#">
                <img class="mx-auto h-full dark:hidden" src="{{ asset('storage/images/products/' . $product->image)}}" alt="" />
              </a>
            </div>
            <div class="pt-6">
              <div class="mb-4 flex items-center justify-between gap-4">
                <span class="me-2 rounded bg-prima-100 px-2.5 py-0.5 text-xs font-medium text-prima-800 dark:bg-prima-900 dark:text-prima-300"> Up to 35% off </span>

                <div class="flex items-center justify-end gap-1">
                  <button type="button" data-tooltip-target="tooltip-quick-look" class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    <span class="sr-only"> Quick look </span>
                    <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                      <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                  </button>
                  <div id="tooltip-quick-look" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700" data-popper-placement="top">
                    Quick look
                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                  </div>

                  <button type="button" data-tooltip-target="tooltip-add-to-favorites" class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    <span class="sr-only"> Add to Favorites </span>
                    <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6C6.5 1 1 8 5.8 13l6.2 7 6.2-7C23 8 17.5 1 12 6Z" />
                    </svg>
                  </button>
                  <div id="tooltip-add-to-favorites" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700" data-popper-placement="top">
                    Add to favorites
                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                  </div>
                </div>
              </div>

              <a href="#" class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">{{$product->name}}</a>

              <div class="mt-2 flex items-center gap-2">
                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Quantity ({{$product->stok}})</p>
              </div>

              <ul class="mt-2 flex items-center gap-4">
                <li class="flex items-center gap-2">
                  <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h6l2 4m-8-4v8m0-8V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v9h2m8 0H9m4 0h2m4 0h2v-4m0 0h-5m3.5 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-10 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                  </svg>
                  <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Fast Delivery</p>
                </li>

                <li class="flex items-center gap-2">
                  <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M8 7V6c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1h-1M3 18v-7c0-.6.4-1 1-1h11c.6 0 1 .4 1 1v7c0 .6-.4 1-1 1H4a1 1 0 0 1-1-1Zm8-3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                  </svg>
                  <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Best Price</p>
                </li>
              </ul>

              <div class="mt-4 flex items-center justify-between gap-4">
                <p class="text-xl font-extrabold leading-tight text-gray-900 dark:text-white">Rp.{{$product->price}}</p>

                <button type="button" class="flex items-center rounded-lg bg-success px-3 py-1.5 text-sm font-medium text-white hover:bg-prima-800 focus:outline-none focus:ring-4 focus:ring-prima-300">
                  <svg class=" h-7 w-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                  </svg>
                </button>
                <button data-modal-target="small-modal" data-img="{{asset('storage/images/products/' . $product->image)}}" data-item="{{json_encode($product)}}" data-modal-toggle="small-modal" class="inline-flex items-center rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-prima-800 focus:outline-none focus:ring-4 focus:ring-prima-300" type="button">
                  Buy Now
                </button>
                <x-buy-product></x-buy-product>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <div class="w-full flex justify-center items-center text-center">
          <button type="button" class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-prima-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600  dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">Show more</button>
        </div>
      </div>


      <!-- Filter modal -->
      <x-modal-product></x-modal-product>
  </section>

  <!-- ./shop wrapper -->
  <script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>
  <script src="{{asset('storage/js/script.js')}}"></script>
</x-layout>
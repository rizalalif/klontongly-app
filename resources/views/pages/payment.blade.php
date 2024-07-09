<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    <section class="bg-white py-8 antialiase md:py-16">
        @if (session()->has('minus') )


        <div id="toast-default" class="fixed flex items-center w-full max-w-xs p-4 space-x-4 mt-20 text-gray-500 bg-primary divide-x rtl:divide-x-reverse divide-gray-200 rounded-lg shadow top-5 right-5" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-blue-500 bg-blue-100 rounded-lg ">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.147 15.085a7.159 7.159 0 0 1-6.189 3.307A6.713 6.713 0 0 1 3.1 15.444c-2.679-4.513.287-8.737.888-9.548A4.373 4.373 0 0 0 5 1.608c1.287.953 6.445 3.218 5.537 10.5 1.5-1.122 2.706-3.01 2.853-6.14 1.433 1.049 3.993 5.395 1.757 9.117Z" />
                </svg>
                <span class="sr-only">Fire icon</span>
            </div>
            <div class="ms-5 ml-4 text-sm text-white font-normal">{{session('minus')}}</div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#toast-default" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>


        @endif
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <div class="mx-auto max-w-5xl">
                <h2 class="text-xl font-semibold text-gray-900 sm:text-2xl">Payment</h2>


                <div class="mt-6 sm:mt-8 lg:flex lg:items-start lg:gap-12">
                    <form action="{{route('ordered',$order->trans_code)}}" method="post" class="w-full rounded-lg border border-gray-200 bg-white p-4 shadow-sm sm:p-6 lg:max-w-xl lg:p-8">
                        @csrf
                        @method('PATCH')
                        <div class="mb-6 grid grid-cols-2 gap-4">
                            <div class="col-span-2 sm:col-span-1">
                                <label for="id_transaction" class="mb-2 block text-sm font-medium text-gray-900">ID Transaction </label>
                                <input type="text" name="code" id="id_transaction" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary focus:ring-primary" placeholder="tes" value="{{$order->trans_code}}" required />
                            </div>


                            <div class="col-span-2 sm:col-span-1">
                                <label for="card-number-input" class="mb-2 block text-sm font-medium text-gray-900"> Nominal </label>
                                <input type="number" step="1" name="pay" id="card-number-input" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pe-10 text-sm text-gray-900 focus:border-primary focus:ring-primary" placeholder="xxxx-xxxx-xxxx-xxxx" pattern="^4[0-9]{12}(?:[0-9]{3})?$" required />
                            </div>

                            <!-- <div>
                                <label for="card-expiration-input" class="mb-2 block text-sm font-medium text-gray-900">Card expiration* </label>
                                <div class="relative">
                                    <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3.5">
                                        <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <input datepicker datepicker-format="mm/yy" id="card-expiration-input" type="text" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 ps-9 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500" placeholder="12/23" required />
                                </div>
                            </div>
                            <div>
                                <label for="cvv-input" class="mb-2 flex items-center gap-1 text-sm font-medium text-gray-900">
                                    CVV*
                                    <button data-tooltip-target="cvv-desc" data-tooltip-trigger="hover" class="text-gray-400 hover:text-gray-900">
                                        <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.408-5.5a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2h-.01ZM10 10a1 1 0 1 0 0 2h1v3h-1a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2h-1v-4a1 1 0 0 0-1-1h-2Z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <div id="cvv-desc" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300">
                                        on back of card
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </label>
                                <input type="number" id="cvv-input" aria-describedby="helper-text-explanation" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-prima-500 focus:ring-prima-500" placeholder="•••" required />
                            </div> -->
                        </div>

                        <button type="submit" class="flex w-full items-center justify-center rounded-lg bg-primary px-5 py-2.5 text-sm font-medium text-white hover:bg-red-900 focus:outline-none focus:ring-4 focus:ring-prima-300">Pay now</button>
                    </form>

                    <div class="mt-1 grow sm:mt-8 lg:mt-0">
                        <div class="space-y-4 rounded-lg border border-gray-200 bg-slate-100 p-6">
                            <div class="space-y-2">
                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Original price</dt>
                                    <dd class="text-base font-medium text-gray-900"></dd>
                                    Rp.{{$order->total_amount}}
                                </dl>

                                <!-- <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normalb text-gray-500 dark:text-gray-400">Savings</dt>
                                    <dd class="text-base font-medium text-green-500">-$299.00</dd>
                                </dl> -->

                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Store Pickup</dt>
                                    <dd class="text-base font-medium text-gray-900">$99</dd>
                                </dl>

                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Tax</dt>
                                    <dd class="text-base font-medium text-gray-900">$799</dd>
                                </dl>
                            </div>

                            <dl class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2">
                                <dt class="text-base font-bold text-gray-900">Total</dt>
                                <dd class="text-base font-bold text-gray-900">Rp.{{$order->total_amount}}</dd>
                            </dl>
                        </div>

                        <div class="mt-6 flex items-center justify-center gap-8">
                            <img class="h-8 w-auto dark:hidden" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/paypal.svg" alt="" />
                            <img class="hidden h-8 w-auto dark:flex" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/paypal-dark.svg" alt="" />
                            <img class="h-8 w-auto dark:hidden" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/visa.svg" alt="" />
                            <img class="hidden h-8 w-auto dark:flex" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/visa-dark.svg" alt="" />
                            <img class="h-8 w-auto dark:hidden" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/mastercard.svg" alt="" />
                            <img class="hidden h-8 w-auto dark:flex" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/mastercard-dark.svg" alt="" />
                        </div>
                    </div>
                </div>

                <p class="mt-6 text-center text-gray-500 dark:text-gray-400 sm:mt-8 lg:text-left">
                    Payment processed by <a href="#" title="" class="font-medium hover:no-underline text-prima-700">Klontongly</a>
                    - Indonesian Republic
                </p>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
</x-layout>
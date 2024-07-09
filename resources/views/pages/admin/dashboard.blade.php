<x-admin-layout>
    <section class="bg-gray-50 sm:p-5 antialiased">
        <div class="mx-auto max-w-screen-3xl px-4">
            <div class="bg-blue relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                    <div class="flex-1 flex items-center space-x-2">
                        <h5>
                            <span class="text-lg text-gray-500">All Products</span>
                            <!-- <span class="dark:text-white">123456</span> -->
                        </h5>
                        <!-- <h5 class="text-gray-500 dark:text-gray-400 ml-1">1-100 (436)</h5>
                        <button type="button" class="group" data-tooltip-target="results-tooltip">
                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" viewbox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">More info</span>
                        </button>
                        <div id="results-tooltip" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                            Showing 1-100 of 436 results
                            <div class="tooltip-arrow" data-popper-arrow=""></div>
                        </div> -->
                    </div>
                </div>
                <div class="flex flex-col md:flex-row items-stretch md:items-center md:space-x-3 space-y-3 md:space-y-0 justify-between mx-4 py-4 border-t dark:border-gray-700">
                    <div class="w-full md:w-1/2">
                        <form class="flex items-center">
                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
                                    </svg>
                                </div>
                                <input type="text" id="simple-search" placeholder="Search for products" required="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-prima-500 focus:border-prima-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-prima-500 dark:focus:border-prima-500">
                            </div>
                        </form>
                    </div>
                    <div class="w-full md:w-auto flex flex-col md:flex-row space-y-1 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                        <div class="flex justify-center m-4">
                            <button id="defaultModalButton" data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="flex items-center justify-center text-white bg-prima-700 hover:bg-prima-800 focus:ring-4 focus:ring-prima-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-prima-600 dark:hover:bg-prima-700 focus:outline-none dark:focus:ring-prima-800" type="button">
                                <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                </svg>
                                Add Product
                            </button>
                        </div>
                        <!-- filter -->
                        <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown" class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-blue rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-prima-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700  dark:hover:text-white dark:hover:bg-gray-700" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-4 w-4 mr-1.5 -ml-1 text-gray-400" viewbox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                            </svg>
                            Filter options
                            <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                            </svg>
                        </button>
                        <x-admin.admin-filter></x-admin.admin-filter>
                        <div class="flex items-center space-x-3 w-full md:w-auto">
                            <button id="actionsDropdownButton" data-dropdown-toggle="actionsDropdown" class="w-md md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-blue rounded-lg border border-gray-300 hover:bg-gray-100 hover:text-prima-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
                                <svg class="-ml-1 mr-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                </svg>
                                Actions
                            </button>
                            <div id="actionsDropdown" class="hidden z-10 w-44 bg-blue rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="actionsDropdownButton">
                                    <li>
                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mass Edit</a>
                                    </li>
                                </ul>
                                <div class="py-1">
                                    <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="p-4">
                                    <!-- <div class="flex items-center">
                                        <input id="checkbox-all" type="checkbox" class="w-4 h-4 text-prima-600 bg-gray-100 rounded border-gray-300 focus:ring-prima-500 dark:focus:ring-prima-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-all" class="sr-only">checkbox</label>
                                    </div> -->
                                </th>
                                <th scope="col" class="p-4">Product</th>
                                <th scope="col" class="p-4">Category</th>
                                <th scope="col" class="p-4">Stock</th>
                                <!-- <th scope="col" class="p-4">Sales/Day</th>
                                <th scope="col" class="p-4">Sales/Month</th>
                                <th scope="col" class="p-4">Sales</th>-->
                                <th scope="col" class="p-4">Price</th>
                                <th scope="col" class="p-4">Last Update</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product )

                            <tr class="border-b dark:border-gray-600 hover:bg-gray-100 dark:hover:bg-gray-700">
                                <td class="p-4 w-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-1" type="checkbox" onclick="event.stopPropagation()" class="w-4 h-4 text-prima-600 bg-gray-100 rounded border-gray-300 focus:ring-prima-500 dark:focus:ring-prima-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <div class="flex items-center mr-3">
                                        <img src="{{asset('storage/images/products/'.$product->image)}}" alt="{{$product->image}}" class="h-8 w-auto mr-3">
                                        {{$product->name}}
                                    </div>
                                </th>
                                <td class="px-1 py-3">
                                    <span class="bg-prima-100 text-prima-800 text-xs font-medium px-2 py-0.5 rounded dark:bg-prima-900 dark:text-prima-300">{{$product->category->name}}</span>
                                </td>
                                <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <div class="flex items-center">
                                        <div class="h-4 w-4 rounded-full inline-block mr-2 bg-red-700"></div>
                                        {{$product->stok}}

                                    </div>
                                </td>
                                <!-- <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">1.47</td>
                                <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">0.47</td>
                                <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-gray-400 mr-2" aria-hidden="true">
                                            <path d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
                                        </svg>
                                        1.6M
                                    </div>
                                </td> -->
                                <td class="px-4 py-3">Rp. {{$product->price}}</td>
                                <td class="px-4 py-3">{{$product->updated_at}}</td>
                                <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <div class="flex items-center space-x-4">
                                        <button type="button" data-product="{{json_encode($product)}}" data-img-url="{{asset('storage/images/products/'.$product->image)}}" data-drawer-target="drawer-update-product" data-drawer-show="drawer-update-product" aria-controls="drawer-update-product" class="py-2 px-3 flex items-center text-sm font-medium text-center text-white bg-prima-700 rounded-lg hover:bg-prima-800 focus:ring-4 focus:outline-none focus:ring-prima-300 dark:bg-prima-600 dark:hover:bg-prima-700 dark:focus:ring-prima-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                            </svg>
                                            Edit {{$product->id}}
                                        </button>
                                        <x-admin.edit-product></x-admin.edit-product>
                                        <button type="button" data-drawer-target="drawer-read-product-advanced" data-drawer-show="drawer-read-product-advanced" aria-controls="drawer-read-product-advanced" class="py-2 px-3 flex items-center text-sm font-medium text-center text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-prima-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" fill="currentColor" class="w-4 h-4 mr-2 -ml-0.5">
                                                <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z" />
                                            </svg>
                                            Preview
                                        </button>
                                        <form action="{{route('product.delete',$product->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="confirm('Are you sure delete {{$product->name}}')" data-modal-target="delete-modal" data-modal-toggle="delete-modal" class="flex items-center text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 -ml-0.5" viewbox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                </svg>
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>

                    </table>
                </div>
                <!-- <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4" aria-label="Table navigation"> -->
                {{$products->links('vendor.pagination.customPagination')}}
                <!-- </nav> -->

            </div>
        </div>
    </section>
    <!-- alert success -->
    @if (session()->has('success'))

    <div id="toast-success" class="fixed flex items-center w-full mt-12 max-w-xs p-2 text-gray-500 bg-gray-100 divide-x rtl:divide-x-reverse divide-gray-200 rounded-lg shadow top-5 right-5 dark:text-gray-400 dark:divide-gray-700 space-x dark:bg-gray-800" role="alert">
        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
            </svg>
            <span class="sr-only">Check icon</span>
        </div>
        <div class="ms-3 text-sm font-normal">{{session('success')}}</div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
        </button>
    </div>
    @elseif($errors->any())
    <div id="toast-top-right" class="fixed flex z-50 mt-10 items-center w-full max-w-xs p-4 space-x-4 text-gray-500 bg-blue divide-x rtl:divide-x-reverse divide-gray-200 rounded-lg shadow top-5 right-5 dark:text-gray-400 dark:divide-gray-700 space-x dark:bg-gray-800" role="alert">

        <div class="flex flex-col items-center">
            @foreach ($errors->all() as $e )
            <div class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
                <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-orange-500 bg-orange-100 rounded-lg dark:bg-orange-700 dark:text-orange-200">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z" />
                    </svg>
                    <span class="sr-only">Warning icon</span>
                </div>
                <div class="ms-3 text-sm font-normal">{{ $e }}</div>
            </div>
            @endforeach
        </div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-top-right" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
        </button>
    </div>
    @endif

    <!-- end alert -->
    <!-- End block -->
    <!-- Main modal -->
    <x-admin.admin-add-product></x-admin.admin-add-product>
    <!-- drawer component -->

    <!-- Preview Drawer -->
    <div id="drawer-read-product-advanced" class="overflow-y-auto fixed top-0 left-0 z-40 p-4 mt-14 w-full max-w-lg h-screen bg-white transition-transform -translate-x-full dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-label" aria-hidden="true">
        <div>
            <h4 id="read-drawer-label" class="mb-1.5 leading-none text-xl font-semibold text-gray-900 dark:text-white">Apple iMac 25"</h4>
            <h5 class="mb-5 text-xl font-bold text-gray-900 dark:text-white">$2999</h5>
        </div>
        <button type="button" data-drawer-dismiss="drawer-read-product-advanced" aria-controls="drawer-read-product-advanced" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
        <div class="grid grid-cols-3 gap-4 mb-4 sm:mb-5">
            <div class="p-2 w-auto bg-gray-100 rounded-lg dark:bg-gray-700">
                <img src="https://flowbite.s3.amazonaws.com/blocks/application-ui/products/imac-side-image.png" alt="iMac Side Image">
            </div>
            <div class="p-2 w-auto bg-gray-100 rounded-lg dark:bg-gray-700">
                <img src="https://flowbite.s3.amazonaws.com/blocks/application-ui/products/imac-front-image.png" alt="iMac Front Image">
            </div>
            <div class="p-2 w-auto bg-gray-100 rounded-lg dark:bg-gray-700">
                <img src="https://flowbite.s3.amazonaws.com/blocks/application-ui/products/imac-back-image.png" alt="iMac Back Image">
            </div>
            <div class="p-2 w-auto bg-gray-100 rounded-lg dark:bg-gray-700">
                <img src="https://flowbite.s3.amazonaws.com/blocks/application-ui/products/imac-side-image.png" alt="iMac Back Image">
            </div>
            <div class="p-2 w-auto bg-gray-100 rounded-lg dark:bg-gray-700">
                <img src="https://flowbite.s3.amazonaws.com/blocks/application-ui/products/imac-back-image.png" alt="iMac Front Image">
            </div>
            <div class="p-2 w-auto bg-gray-100 rounded-lg dark:bg-gray-700">
                <img src="https://flowbite.s3.amazonaws.com/blocks/application-ui/products/imac-side-image.png" alt="iMac Side Image">
            </div>
        </div>
        <dl class="sm:mb-5">
            <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Details</dt>
            <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">Standard glass ,3.8GHz 8-core 10th-generation Intel Core i7 processor, Turbo Boost up to 5.0GHz, 16GB 2666MHz DDR4 memory, Radeon Pro 5500 XT with 8GB of GDDR6 memory, 256GB SSD storage, Gigabit Ethernet, Magic Mouse 2, Magic Keyboard - US.</dd>
        </dl>
        <dl class="grid grid-cols-2 gap-4 mb-4">
            <div class="col-span-2 p-3 bg-gray-100 rounded-lg border border-gray-200 dark:bg-gray-700 sm:col-span-1 dark:border-gray-600">
                <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Shipping</dt>
                <dd class="flex items-center text-gray-500 dark:text-gray-400">
                    <svg class="w-4 h-4 mr-1.5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                    </svg>
                    United States, Europe
                </dd>
            </div>
            <div class="col-span-2 p-3 bg-gray-100 rounded-lg border border-gray-200 dark:bg-gray-700 sm:col-span-1 dark:border-gray-600">
                <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Colors</dt>
                <dd class="flex items-center space-x-2 font-light text-gray-500 dark:text-gray-400">
                    <div class="flex-shrink-0 w-6 h-6 bg-purple-600 rounded-full"></div>
                    <div class="flex-shrink-0 w-6 h-6 bg-indigo-400 rounded-full"></div>
                    <div class="flex-shrink-0 w-6 h-6 rounded-full bg-prima-600"></div>
                    <div class="flex-shrink-0 w-6 h-6 bg-pink-400 rounded-full"></div>
                    <div class="flex-shrink-0 w-6 h-6 bg-teal-300 rounded-full"></div>
                    <div class="flex-shrink-0 w-6 h-6 bg-green-300 rounded-full"></div>
                </dd>
            </div>
            <div class="p-3 bg-gray-100 rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600">
                <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Product State</dt>
                <dd class="text-gray-500 dark:text-gray-400">
                    <span class="bg-prima-100 text-prima-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-prima-200 dark:text-prima-800">
                        <svg aria-hidden="true" class="mr-1 w-3 h-3" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        New
                    </span>
                </dd>
            </div>
            <div class="p-3 bg-gray-100 rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600">
                <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Sold by</dt>
                <dd class="text-gray-500 dark:text-gray-400">Flowbite</dd>
            </div>
            <div class="p-3 bg-gray-100 rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600">
                <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Ships from</dt>
                <dd class="text-gray-500 dark:text-gray-400">Flowbite</dd>
            </div>
            <div class="p-3 bg-gray-100 rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600">
                <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Brand</dt>
                <dd class="text-gray-500 dark:text-gray-400">Apple</dd>
            </div>
            <div class="p-3 bg-gray-100 rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600">
                <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Dimensions (cm)</dt>
                <dd class="text-gray-500 dark:text-gray-400">105 x 15 x 23</dd>
            </div>
            <div class="p-3 bg-gray-100 rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600">
                <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Item weight</dt>
                <dd class="text-gray-500 dark:text-gray-400">12kg</dd>
            </div>
        </dl>
        <div class="flex bottom-0 left-0 justify-center pb-4 space-x-4 w-full">
            <button type="button" class="text-white w-full inline-flex items-center justify-center bg-prima-700 hover:bg-prima-800 focus:ring-4 focus:outline-none focus:ring-prima-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-prima-600 dark:hover:bg-prima-700 dark:focus:ring-prima-800">
                <svg aria-hidden="true" class="mr-1 -ml-1 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                    <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                </svg>
                Edit
            </button>
            <button type="button" class="inline-flex w-full items-center text-white justify-center bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                <svg aria-hidden="true" class="w-5 h-5 mr-1.5 -ml-1" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" />
                </svg>
                Delete
            </button>
        </div>
    </div>
    <!-- Delete Modal -->
    <!-- <div id="delete-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full h-auto max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="delete-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-6 text-center">
                    <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this product?</h3>
                    <button data-modal-toggle="delete-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">Yes, I'm sure</button>
                    <button data-modal-toggle="delete-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
                </div>
            </div>
        </div>
    </div> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    <script src="{{asset('storage/js/script.js')}}"></script>
</x-admin-layout>
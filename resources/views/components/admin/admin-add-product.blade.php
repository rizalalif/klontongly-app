<div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">


    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-gray-200 rounded-lg shadow dark:bg-gray-800 sm:p-5">


            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t  border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Add Product
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="lg:grid lg:grid-cols-2 lg:gap-4 xl:gap-16">
                <div class="shrink-0 grid grid-rows-subgrid-2 gap-6 w-64 h-80 rounded lg:max-w-lg mx-auto">
                    <form action="{{route('product.add')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Input Image</label>
                        <input value="{{ old('image') }}" name="image" class="block w-full mb-5 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="image" type="file">
                        <img id="preview" class="w-full max-h-48 rounded dark:hidden" src="{{asset('assets/images/products/no-preview.jpeg')}}" alt="" />

                        <!-- <img class="w-full hidden dark:block" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front-dark.svg" alt="" /> -->
                </div>

                <div class="mt-6 sm:mt-8 lg:mt-0">


                    <div class="grid gap-2 mb-4 sm:grid-cols-2">
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-prima-600 focus:border-prima-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-prima-500 dark:focus:border-prima-500" placeholder="Type product name" required="">
                        </div>
                        <div>
                            <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stok</label>
                            <input type="number" name="stok" id="brand" value="{{ old('stok') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-prima-600 focus:border-prima-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-prima-500 dark:focus:border-prima-500" placeholder="Stock" required="">
                        </div>
                        <div>
                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                            <input type="number" name="price" id="price" value="{{ old('price') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-prima-600 focus:border-prima-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-prima-500 dark:focus:border-prima-500" placeholder="$2999" required="">
                        </div>
                        <div>
                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                            <select id="category" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-prima-500 focus:border-prima-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-prima-500 dark:focus:border-prima-500">
                                @foreach ($categories as $category)

                                <option value="{{$category->id}}">{{$category->name}} || {{$category->id}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                            <textarea id="description" name="description" value="{{ old('description') }}" rows="4" class="block p-2.5 h-40 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-prima-500 focus:border-prima-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-prima-500 dark:focus:border-prima-500" placeholder="Write product description here"></textarea>
                            <!-- <div class="flex items-center justify-center w-full"> -->
                            <!-- <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-40 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                            </svg>
                                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                        </div>
                                        <input id="dropzone-file" type="file" class="hidden" />
                                    </label> -->
                            <!-- </div> -->
                        </div>
                    </div>
                    <!-- <div class="flex justify-center items-center my-4 w-full"> -->
                    <button type="submit" class="text-white inline-flex items-center bg-prima-700 hover:bg-prima-800 focus:ring-4 focus:outline-none focus:ring-prima-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-prima-600 dark:hover:bg-prima-700 dark:focus:ring-prima-800">
                        <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                        </svg>
                        Add new product
                    </button>
                </div>
                <!-- </div> -->

            </div>
            </form>

        </div>
    </div>
</div>
<script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#image').change(function() {
            previewImage(this)

        });
    })

    function previewImage(input) {
        var preview = $('#preview')[0];
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.block = 'block';

            }
            reader.readAsDataURL(input.files[0]);


        }
    }
</script>
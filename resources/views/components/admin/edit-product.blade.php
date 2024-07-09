<div class="overflow-hidden">
    <form action="{{route('product.update')}}" method="post" id="drawer-update-product" enctype="multipart/form-data" class="fixed top-0 left-0 z-40 w-full h-screen mt-14 max-w-3xl p-4 overflow-y-auto transition-transform -translate-x-full bg-white dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-update-product-label">
        @csrf
        @method('PUT')
        <input type="hidden" id="edit-id" name="product_id">

        <h5 id="drawer-label" class="inline-flex items-center mb-6 text-sm font-semibold text-gray-500 uppercase dark:text-gray-400">New Product</h5>
        <button type="button" data-drawer-dismiss="drawer-update-product" aria-controls="drawer-update-product" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
        <div class="grid gap-4 sm:grid-cols-3 sm:gap-6 ">
            <div class="space-y-4 sm:col-span-2 sm:space-y-6">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name</label>
                    <input type="text" name="name" id="edit-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-prima-600 focus:border-prima-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-prima-500 dark:focus:border-prima-500" value="" placeholder="Type product name" required="">
                </div>
                <div>
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <div class="w-full border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                        <div class="py-3 bg-prim-100 rounded-b-lg dark:bg-gray-800">
                            <textarea name="description" id="edit-description" rows="8" class="block w-full h-40 px-2 py-2 text-sm text-gray-800 border-0 bg-prim-100 focus:ring-0 placeholder-gray-400" placeholder="Write product description here" required=""></textarea>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Images</span>
                    <div class="bg-primary rounded border-0 h-64 grid grid-cols-3 gap-4 mb-4">
                        <img id="edit-preview" src="" class="w-full max-h-screen" alt="">
                    </div>
                    <div class="flex items-center justify-center w-full">
                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                                    <span class="font-semibold">Click to upload</span>
                                    or drag and drop
                                </p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                            </div>
                            <input id="dropzone-file" type="file" name="image" id="edit-image">
                        </label>
                    </div>
                </div>
            </div>

            <div class="space-y-4 sm:space-y-6">
                <div>
                    <label for="edit-stok" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Stok</label>
                    <input type="number" name="stok" id="edit-stok" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-prima-500 focus:border-prima-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-prima-500 dark:focus:border-prima-500" value="Apple" placeholder="Product Brand" required="">
                </div>
                <div>
                    <label for="edit-category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                    <select id="edit-category" name="category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-prima-500 focus:border-prima-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-prima-500 dark:focus:border-prima-500">
                        @foreach ($categories as $category)

                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="edit-price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price (pcs)</label>
                    <input type="number" name="price" id="edit-price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-prima-600 focus:border-prima-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-prima-500 dark:focus:border-prima-500" value="12" placeholder="Ex. 12" required="">
                </div>
            </div>
        </div>
        <button type="submit" class="text-white bg-prima-700 mt-2 hover:bg-prima-800 focus:ring-4 focus:outline-none focus:ring-prima-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-prima-600 dark:hover:bg-prima-700 dark:focus:ring-prima-800">Update product</button>

        <div class="grid grid-cols-2 gap-4 mt-6 sm:w-1/2">
            <button type="button" class="text-primary-600 inline-flex justify-center items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                <svg aria-hidden="true" class="w-5 h-5 mr-1 -ml-1" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                </svg>
                Delete
            </button>
        </div>
    </form>
</div>

<script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>
<script>
    function previewImage(event) {
        var input = event.target;
        var reader = new FileReader();
        reader.onload = function() {
            var img = document.getElementById('edit-preview');
            img.src = reader.result;
            img.style.display = 'block';
        };
        reader.readAsDataURL(input.files[0]);
    }
</script>
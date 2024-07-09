<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <!-- login -->
    <div class="contain py-12 ">
        <div class="bg-white max-w-lg mx-auto shadow px-6 py-7 rounded overflow-hidden">
            <h2 class="text-2xl uppercase font-medium mb-1">Login</h2>
            <p class="text-gray-600 mb-6 text-sm">
                Welcome back Admin
            </p>

            <form action="{{route('admin.auth')}}" method="post" class="max-w-sm mx-auto">
                    @csrf
                    <label for="website-admin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <div class="flex mb-5">
                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                            <svg class="w-4 h-5 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M12 20a7.966 7.966 0 0 1-5.002-1.756l.002.001v-.683c0-1.794 1.492-3.25 3.333-3.25h3.334c1.84 0 3.333 1.456 3.333 3.25v.683A7.966 7.966 0 0 1 12 20ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10c0 5.5-4.44 9.963-9.932 10h-.138C6.438 21.962 2 17.5 2 12Zm10-5c-1.84 0-3.333 1.455-3.333 3.25S10.159 13.5 12 13.5c1.84 0 3.333-1.455 3.333-3.25S13.841 7 12 7Z" clip-rule="evenodd" />
                            </svg>


                        </span>
                        <input type="email" name="email" id="website-admin" class="bg-red-50 border-none  rounded rounded-s-md text-red-900 placeholder-gray-500 text-sm  focus:ring-red-500 dark:bg-grey-700 focus:border-3 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500" placeholder="bonniegreen@gmail.com" required>
                    </div>
                    <label for="website-admin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <div class="flex">
                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                            <svg class="w-4 h-4 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path d="M336 352c97.2 0 176-78.8 176-176S433.2 0 336 0S160 78.8 160 176c0 18.7 2.9 36.8 8.3 53.7L7 391c-4.5 4.5-7 10.6-7 17v80c0 13.3 10.7 24 24 24h80c13.3 0 24-10.7 24-24V448h40c13.3 0 24-10.7 24-24V384h40c6.4 0 12.5-2.5 17-7l33.3-33.3c16.9 5.4 35 8.3 53.7 8.3zM376 96a40 40 0 1 1 0 80 40 40 0 1 1 0-80z" />
                            </svg>

                        </span>
                        <input type="password" name="password" id="website-admin" class="border-none rounded rounded-s-md text-red-900 placeholder-gray-500 text-sm  focus:ring-red-500 dark:bg-grey-700 focus:border-3 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500" placeholder="******" required>
                    </div>
                    <div class="mt-4 flex justify-center">
                        <!-- <button type="submit" class="block w-full py-2 text-center text-white bg-primary border border-primary rounded hover:bg-transparent hover:text-primary transition uppercase font-roboto font-medium">create
                        account</button> -->
                        <button type="submit" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Submit</button>
                    </div>

                </form>


                <p class="mt-4 text-center text-gray-600">Don't have account? <a href="/register" class="text-primary">Register
                        now</a></p>
        </div>
    </div>

    @if (session()->has('login-failed'))
    <div id="toast-success" class="fixed inline-flex  items-center max-w-sm p-4 space-x-4 bg-gray-800 text-gray-500  rounded-lg shadow right-5 bottom-5" role="alert">
        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z" />
            </svg>
            <span class="sr-only">Error icon</span>
        </div>
        <div class="ms-3 text-sm text-primary font-normal">{{session('login-failed')}}</div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#toast-success" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
        </button>
    </div>
    @endif

    <!-- ./login -->
</x-layout>
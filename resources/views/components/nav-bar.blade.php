<nav class="fixed-top bg-gray-800">
    <div class="container py-3 mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex-shrink-0 pr-16 flex items-center">
                <a href="/">
                    <svg class="text-primary" height="40" width="200" xmlns="http://www.w3.org/2000/svg">
                        <text x="5" y="30" fill="none" stroke="red" font-size="35">
                            Klontongly
                        </text>
                    </svg>
                </a>
            </div>

            <!-- Bagian untuk Desktop -->
            <div class="{{ Request::is('login','register') ? 'hidden' : 'md:flex md:items-center md:space-x-6'}} ">
                <a href="/" class="text-gray-200 hover:text-primary transition'">Home</a>
                <a href="/product" class="text-gray-200 hover:text-primary transition">Shop</a>
                <a href="/about" class="text-gray-200 hover:text-primary transition">About us</a>
                <a href="/contact" class="text-gray-200 hover:text-primary transition">Contact us</a>
            </div>
            <div class="hidden md:flex md:items-center md:space-x-6 ml-auto">
                <!-- Cart Icon -->
                @auth
                <x-cart-panel>
                    <div class="text-center">
                        <div class="text-center text-gray-700 hover:text-primary transition relative" data-drawer-target="drawer-right-example" data-drawer-show="drawer-right-example" data-drawer-placement="right" aria-controls="drawer-right-example">
                            <svg class="size-6 text-gray-200 hover:text-primary transition" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                            </svg>
                            <div class="absolute -right-2 -top-2 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs">
                                2
                            </div>
                        </div>
                    </div>
                </x-cart-panel>

                <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="flex items-center text-sm pe-1 font-medium text-gray-200 rounded-full hover:text-primary dark:hover:text-blue-500 md:me-0 focus:ring-gray-100" type="button">
                    <span class="sr-only">Open user menu</span>
                    <div class="text-lg">{{ auth()->user()->username }}</div>
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                    </svg>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdownAvatarName" class="z-50 hidden bg-gray-200 divide-y divide-gray-100 rounded-lg shadow w-44 ">
                    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                        <div class="font-medium ">{{ auth()->user()->username }}</div>
                        <div class="truncate"></div>
                    </div>
                    @if (auth()->user()->isAdmin ==1)
                    <div class="flex items-center py-2 hover:text-primary hover:bg-gray-100 hover:rounded-b-lg">
                        
                            <a href="/admin" class=" px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">My Dashboard</a>
                        <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z" clip-rule="evenodd" />
                        </svg>

                    </div>
                    @endif
                    <div class="flex items-center py-2 hover:text-primary hover:bg-gray-100 hover:rounded-b-lg">
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class=" px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 ">Sign out</button>
                        </form>
                        <svg class="w-4 h-4 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                        </svg>
                    </div>
                </div>

                @else
                <a href="/login" class="'block text-gray-200 hover:text-primary transition'">Login</a>
                @endauth

                <!-- Login -->



            </div>

            <!-- Bagian untuk Mobile -->
            <div class="flex items-center md:hidden" x-data="{ open: false }">
                <button type="button" class="text-gray-200 hover:text-white focus:outline-none focus:text-white" @click="open = !open">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
                <div x-show="open" class="absolute top-16 right-0 w-full bg-gray-800 shadow-lg">
                    <div class="py-3 pl-7 space-y-3">
                        <a href="/" class="{{request()->is('/') ? 'block text-primary transition' : 'block text-gray-200 hover:text-white transition' }}">Home</a>
                        <a href="/product" class="block text-gray-200 hover:text-white transition">Shop</a>
                        <a href="/about" class="block text-gray-200 hover:text-white transition">About us</a>
                        <a href="/contact" class="block text-gray-200 hover:text-white transition">Contact us</a>
                        <a href="/login" class="block text-gray-200 hover:text-white transition">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- ./navbar -->
<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>
    <!-- breadcrumb -->
    <!-- breadcrumb -->
    <div class="container py-4 flex items-center gap-3">
        <a href="/" class="text-gray-600 text-base">
            <!-- <i class="fa-solid fa-house">tes</i> -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>

        </a>
        <span class="text-sm text-gray-400">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
            </svg>

        </span>

        <p class="text-gray-600 font-medium">Checkout</p>
    </div>
    <!-- ./breadcrumb -->

    <!-- wrapper -->
    <div class="flex justify-center items-center  pb-16 pt-4 gap-6">

        <div class="col-span-4 border border-gray-200 bg-prima-100 w-96 p-4 rounded">
            <h4 class="text-gray-800 text-lg mb-4 font-medium uppercase">checkout</h4>
            <div class="space-y-2">
                <div class="flex justify-between">
                    <div>
                        <h5 class="text-gray-800 font-medium">{{$prod['name']}}</h5>
                        <p class="text-sm text-gray-600">Size: M</p>
                    </div>
                    <p class="text-gray-600">
                        X{{$prod['qty']}}
                    </p>
                    <p class="text-gray-800 font-medium">Rp.{{$prod['price']}}</p>
                </div>
            </div>

            <div class="flex justify-between border-b border-gray-200 mt-1 text-gray-800 font-medium py-3 uppercas">
                <p>subtotal</p>
                <p>Rp.{{$prod['amount']}}</p>
            </div>

            <div class="flex justify-between border-b border-gray-200 mt-1 text-gray-800 font-medium py-3 uppercas">
                <p>shipping</p>
                <p>Rp.10000</p>
            </div>

            <div class="flex justify-between text-gray-800 font-medium py-3 uppercas">
                <p class="font-semibold">Total</p>
                <p>Rp.{{$prod['amount']}}</p>
            </div>

            <div class="flex items-center mb-4 mt-2">
                <input type="checkbox" name="aggrement" id="aggrement" class="text-primary focus:ring-0 rounded-sm cursor-pointer w-3 h-3">
                <label for="aggrement" class="text-gray-600 ml-3 cursor-pointer text-sm">I agree to the <a href="#" class="text-primary">terms & conditions</a></label>
            </div>
            <form action="{{route('payment')}}" method="post">
                @csrf
                <input type="hidden" name="data_transaction" value="{{json_encode($prod)}}">
                <button type="submit" class="block w-full py-3 px-4 text-center text-white bg-primary border border-primary rounded-md hover:bg-transparent hover:text-primary transition font-medium">Place
                    order</button>
            </form>
        </div>

    </div>
    <!-- ./wrapper -->
</x-layout>
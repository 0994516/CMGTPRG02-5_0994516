@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b boreder-gray-200">
        <h1 class="text-6xl">
            Deck Archive
        </h1>
    </div>
</div>
<div class="grid grid-cols-3 m-10 gap-5">
    <div class="deck-profile rounded border-4 border-gray-400 ">
            <div class="flex text-gray-100 pt-10">
                <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block ">
                    <h1 class="sm:text-white text-3xl uppercase font-bold text-shadow-md pb-5 border-b border-gray-200 border-opacity-50">
                        Deck Name 
                    </h1>
                    <span class="text-gray-800 text-2xl">
                        by <span class="font-bold italix text-gray-800">Jasper
                        </span>
                    </span>
                    <div class="deck-description">
                    <p class= "text-xl text-gray-800 pt-8 pb-10 leading-8  font-medium ">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    </p>
                    <a 
                        href=""
                        class="bg-blue-500 py-2 px-8 rounded-3xl hover:bg-blue-700">
                        read more>
                    </a>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection

<!-- <div class="gap-20 w-4/5 mx-auto py-15 border-b border-gray-200 width-100">
    <div>
        <img src="https://www.magamercatino.it/1000/100-sleeves-standard-ultra-pro-magic-the-gathering-classical-card-back.jpg" 
            width="400" alt="">
    </div>
    <div>
        <h2 class= "text-gray-700 font-bold text-5xl pb-4">
            Deck name
        </h2>
        <span class="text-gray-500">
            by <span class="font-bold italix text-gray-800">Jasper

            </span>
        </span>
        <p class= "text-xl text-gray-500 pt-8 pb-10 leading-8  font-light ">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        </p>

        <a 
            href=""
            class="bg-blue-500 py-2 px-8 rounded-3xl hover:bg-blue-700">
            read more>
        </a>
    </div>

</div> -->
@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block ">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Look at decks here
                </h1>
                <a 
                    href="/decks"
                    Class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Go Look
                </a>
            </div>
        </div>
    </div>
    <divc class="sm:grid grid-cols-2 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://www.magamercatino.it/1000/100-sleeves-standard-ultra-pro-magic-the-gathering-classical-card-back.jpg" 
            width="400" alt="">
        </div>
        <div class="m-auto s:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Want to create your own deck ideas?
            </h2>
            <p class="py-8 text-gray-500 text-s">
                Submit your commander and a rough idea of the deck.
            </p>
            <p ckass= "font-extrabold text-gray-600 text-s pb-9">
                Your deck and the colours you will use are available to see for others.
                Try to explain what makes the deck unique, specific cards, interactions and themes.
            </p>
            <div class="mt-6 uppercase text-gray-100 text-s font-extrabold">
                <a 
                    href="/Submit"
                    class="mr-2 bg-blue-500 py-2 px-8 rounded-3xl hover:bg-blue-700">
                    Submit deck
                </a>
                <a 
                    href="/login"
                    class="bg-blue-500 py-2 px-8 rounded-3xl hover:bg-blue-700">
                    Login
                </a>
            </div>
        </div>
    </div>
@endsection
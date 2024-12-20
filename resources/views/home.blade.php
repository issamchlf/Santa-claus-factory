@extends('layouts.app')
@section('content')
<div class="">
    <p class="text-center text-4xl font-holiday font-christmas text-gray-100 pt-4">Welcome to our Factory...</p>
    <div class="flex flex-wrap items-center justify-center gap-24 pt-7 pb-8 h-full">
        <a href="">
            <button
                class="bg-white p-4 rounded-lg bg-center bg-cover transform hover:scale-110 transition-transform duration-500">
                <div class="font-bold text-3xl">
                    Elves
                    <img class="pl-8 pt-2 h-[12.8rem] w-[15rem]" src="image/Gitanillo.png" alt="" />
                </div>
            </button>
        </a>
        <div class="border-r-2 h-[14rem]">
            ‎
        </div>
        <a href="">
            <button
                class="flex justify-center bg-white p-6 rounded-lg bg-center bg-cover transform hover:scale-110 transition-transform duration-500 h-[17rem] w-[18rem]">
                <div class="font-bold text-3xl">
                    Santa Claus
                    <img class="pl-3 h-[13rem] w-[13rem]" src="image/GitanoSupremo.png" alt="" />
                </div>
            </button>
        </a>
    </div>
</div>
@endsection

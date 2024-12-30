@extends('layouts.app')
@section('content')
    <a href="{{route("home")}}">
     <button class= "bottom-4 bg-sky-500/75">Back</button>
    </a>

     <div id="toyShow" class=" max-w-sm rounded overflow-hidden shadow-lg">
        <img class="w-full" src={{$toy->image}} alt="toy">

        <div class="font-bold text-xl mb-2">{{$toy->name}}</div>
         <p class="text-gray-700 text-base">{{$toy->description}}</p>
        </div>
        <div class="px-6 pt-4 pb-2">
         <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">ID:{{$toy->id}}</span>
         <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">AGE:{{$toy->minimum_age}}</span>
        </div>
    </div>   
@endsection
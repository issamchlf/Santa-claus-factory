@extends('layouts.app')

@section('content')
    <div class="bg-gradient-to-br from-blue-900 via-red-800 to-red-950 min-h-screen relative">

        <div class="absolute top-4 left-4">
            <a href="{{ route('elve') }}">
                <button class="bg-sky-500 hover:bg-sky-600 text-white font-bold py-2 px-4 rounded shadow-md">
                    Back
                </button>
            </a>
        </div>

        <div class="flex items-center justify-center min-h-screen">
            @if($toys)
                <div id="toyShow" class="bg-white max-w-sm rounded-2xl overflow-hidden shadow-2xl transform transition duration-500 hover:scale-105">
                    <img src="{{ $toys->image ?? asset('images/default-toy.png') }}" alt="Toy Image" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h2 class="font-bold text-2xl mb-2 text-purple-800">{{ $toys->name }}</h2>
                        <p class="text-gray-700 text-base mb-4">{{ $toys->description }}</p>
                        
                        <div class="flex justify-between items-center">
                            <span class="inline-block bg-blue-100 text-blue-800 font-semibold px-3 py-1 rounded-full text-sm">ID: {{ $toys->id }}</span>
                            
                            <!-- Display the Age Range -->
                            <span class="inline-block bg-pink-100 text-pink-800 font-semibold px-3 py-1 rounded-full text-sm">
                                AGE: 
                                @if ($toys->minimumAge)
                                    {{ $toys->minimumAge->min_age }} - {{ $toys->minimumAge->max_age }}
                                @else
                                    No age range assigned
                                @endif
                            </span>
                        </div>
                    </div>
                </div>
            @else
                <p class="text-center text-red-500 font-bold">Toy not found.</p>
            @endif
        </div>
    </div>
@endsection

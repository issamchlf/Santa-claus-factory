@extends('layouts.app')
@section('content')

<div class="bg-gradient-to-br from-blue-900 via-red-800 to-red-950 min-h-screen relative">

    <div class="absolute top-4 left-4">
        <a href="{{ route('santa') }}">
            <button class="bg-sky-500 hover:bg-sky-600 text-white font-bold py-2 px-4 rounded shadow-md">
             Back
            </button>
        </a>
    </div>

    <div class="flex items-center justify-center min-h-screen">
        @if($kids)
        <div id="toyShow" class="bg-white max-w-sm rounded-2xl overflow-hidden shadow-2xl transform transition duration-500 hover:scale-105">

            <img src="{{ $kids->foto ?? asset('images/default-kid.png') }}" alt="Kid Image" class="w-full h-64 object-cover">
            <div class="p-6">
                <div class="flex justify-between items-center">
                    <span class="inline-block bg-blue-100 text-blue-800 font-semibold px-3 py-1 rounded-full text-sm">ID: {{ $kids->id }}</span>
                    <span class="inline-block bg-pink-100 text-pink-800 font-semibold px-3 py-1 rounded-full text-sm">{{ $kids->gender }}</span>
                </div>
                <h2 class="font-bold text-2xl mb-2 text-purple-800">{{ $kids->name }}</h2>
                <h3 class="font-bold text-2xl mb-2 text-purple-800">{{ $kids->surname }}</h3>
                <p class="text-gray-700 text-base mb-4">AGE: {{ $kids->age }}</p>
                <p class="text-gray-700 text-base mb-4">ATTITUDE: {{ $kids->atitude ? 'Good' : 'Bad' }}</p>
                <p class="text-gray-700 text-base mb-4">COUNTRY: {{ $kids->country }}</p>
            </div>
            

            <div class="p-6 border-t border-gray-200">
                <h3 class="font-bold text-xl mb-4 text-gray-700">Assigned Toys:</h3>
                @if($kids->toys->isNotEmpty())
                    <div class="grid grid-cols-1 gap-4">
                        @foreach($kids->toys as $toy)
                            <div class="bg-gray-100 p-4 rounded shadow-md flex items-center space-x-4">
                                <img src="{{ $toy->image ?? asset('images/default-toy.png') }}" alt="Toy Image" class="w-16 h-16 object-cover rounded">
                                <div>
                                    <h4 class="font-bold text-lg text-gray-800">{{ $toy->name }}</h4>
                                    <p class="text-sm text-gray-600">{{ $toy->description }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-red-500 font-bold">No toys assigned to this kid.</p>
                @endif
            </div>
        </div>
        @else
            <p class="text-center text-red-500 font-bold">Kid not found.</p>
        @endif
    </div>
</div>

@endsection

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
            @if ($kids)
                <div id="kidShow"
                    class="bg-white max-w-sm rounded-2xl overflow-hidden shadow-2xl transform transition duration-500 hover:scale-105 m-8">
                    <img src="{{ $kids->foto ?? asset('images/default-kid.png') }}" 
                    alt="Kid Image"
                    class="w-full h-64 object-cover object-top">               
                    <div class="p-6">
                        <div class="flex justify-between items-center">
                            <span
                                class="font-serif text-md leading-tight inline-block bg-blue-100 text-blue-800 font-semibold px-3 py-1 rounded-full text-sm">ID:
                                {{ $kids->id }}</span>
                            <span
                                class="font-serif text-md leading-tight inline-block bg-pink-100 text-pink-800 font-semibold px-3 py-1 rounded-full text-sm">{{ $kids->gender }}</span>
                        </div>
                        <h2 class="font-serif text-md leading-tight font-bold text-2xl mb-2 text-purple-800">
                            {{ $kids->name }} {{ $kids->surname }}</h2>
                        <h3 class="font-serif text-md leading-tight font-bold text-2xl mb-2 text-purple-800">
                            </h3>
                        <div class="px-6 py-2 flex justify-between items-center">
                            <p class="font-serif text-md leading-tight text-gray-700 text-base mb-4">{{ $kids->age }} Years
                            </p>
                            <p class="text-purple-800 mb-4">|</p>
                            <p class="font-serif text-md leading-tight text-gray-700 text-base mb-4">
                            {{ $kids->country }}</p>
                            <p class="text-purple-800 mb-4">|</p>
                            <span 
                            class="font-serif text-md leading-tight text-base mb-4 font-serif text-md font-bold font-semibold {{ $kids->atitude == 'good' ? 'text-green-500' : 'text-red-700' }}">
                            {{ $kids->atitude }}
                            </span>
                        </div>
                    </div>
                    <div class="p-6 border-t border-gray-200">
                        <h3 class="font-serif text-md leading-tight font-bold text-xl mb-4 text-gray-700">Assigned Toys:
                        </h3>
                        @if ($kids->toys->isNotEmpty())
                            <div class="grid grid-cols-1 gap-4">
                                @foreach ($kids->toys as $toy)
                                    <div class="bg-gray-100 p-4 rounded shadow-md flex items-center space-x-4">
                                        <img src="{{ $toy->image ?? asset('images/default-toy.png') }}" alt="Toy Image"
                                            class="w-16 h-16 object-cover rounded">
                                        <div>
                                            <h4 class="font-serif text-md leading-tight font-bold text-lg text-gray-800">
                                                {{ $toy->name }}</h4>
                                            <p class="font-serif text-md leading-tight text-sm text-gray-600">
                                                {{ $toy->description }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p class="font-serif text-md leading-tight text-red-500 font-bold">No toys assigned to this kid.
                            </p>
                        @endif
                    </div>
                </div>
            @else
                <p class="font-serif text-md leading-tight text-center text-red-500 font-bold">Kid not found.</p>
            @endif
        </div>
        
    </div>

@endsection

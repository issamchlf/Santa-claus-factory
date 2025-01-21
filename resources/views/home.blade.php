@extends('layouts.app')

@section('content')
<div class="container min-h-screen bg-gradient-to-b from-red-500 to-red-700 py-8">
    <p class="font-serif text-center text-4xl font-bold italic text-gray-100 pt-4">
        Welcome to our Factory...
    </p>
    <div class="flex flex-wrap items-center justify-center gap-20 pt-6 pb-8 h-full">

        <a href="{{ route('elve') }}" class="block group transition-transform hover:scale-105 duration-500 mx-2 w-[330px]">
            <div class="bg-gradient-to-br from-green-100 to-green-300 p-6 rounded-t-3xl shadow-[10px_10px_30px_rgba(0,0,0,0.3)] group-hover:shadow-[15px_15px_40px_rgba(0,0,0,0.4)] relative group-hover:-translate-y-2 transition-all duration-700">
                <div class="text-center font-black text-xl mb-4 text-green-800 transition-all duration-500">
                    Elves
                </div>
                <img class="h-36 w-36 object-cover mb-3 mx-auto rounded-full shadow-xl border-4 border-green-400 transition-transform hover:rotate-6 duration-500" src="image/elve2.png" alt="Elves" />
            </div>
            <div class="relative bg-white bg-clip-padding p-4 rounded-b-3xl shadow-[10px_10px_30px_rgba(0,0,0,0.3)] group-hover:shadow-[15px_15px_40px_rgba(0,0,0,0.4)] mt-[-8px] transition-transform duration-500">
                <table class="w-full bg-gradient-to-b from-white to-green-100 rounded-lg overflow-hidden shadow-md">
                    <caption class="font-mono text-base mb-2 text-green-900 font-semibold tracking-wide">Toys Distribution</caption>
                    <thead class="bg-green-200">
                        <tr>
                            <th class="font-mono text-sm py-2 text-black tracking-wider">Age Range</th>
                            <th class="font-mono text-sm py-2 text-black tracking-wider">Nº</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ageRanges as $range)
                            <tr class="hover:bg-green-50 transition-colors duration-300">
                                <td class="font-mono text-sm py-2 text-black text-center">{{ $range->min_age }} - {{ $range->max_age }}</td>
                                <td class="font-mono text-sm py-2 text-black text-center">{{ $toys->where('minimum_age_id', $range->id)->count() }}</td>
                            </tr>
                        @endforeach
                        <tr class="bg-green-300">
                            <td class="font-mono text-sm py-2 text-black text-center font-semibold">Total</td>
                            <td class="font-mono text-sm py-2 text-black text-center font-semibold">{{ $toys->count() }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </a>
        
<div class="flex items-center justify-center w-16 h-16 bg-gradient-to-r from-green-300 to-red-600 rounded-full shadow-xl animate-bounce">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="white" class="w-8 h-8">
        <path d="M12 1L12 23M1 12L23 12M5.5 5.5L18.5 18.5M18.5 5.5L5.5 18.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
</div>
        
        
        



        <a href="{{ route('santa') }}" class="block group transition-transform hover:scale-105 duration-500 mx-2 w-[330px]">
            <div class="bg-gradient-to-br from-red-100 to-red-300 p-6 rounded-t-3xl shadow-[10px_10px_30px_rgba(0,0,0,0.3)] group-hover:shadow-[15px_15px_40px_rgba(0,0,0,0.4)] relative group-hover:-translate-y-2 transition-all duration-700">
                <div class="text-center font-black text-xl mb-4 text-red-800 leading-snug tracking-wide">Santa Claus</div>
                <img class="h-36 w-36 object-cover mb-3 mx-auto rounded-full shadow-xl border-4 border-red-400 transition-transform hover:rotate-6 duration-500" src="image/GitanoSupremo3.png" alt="Santa Claus" />
            </div>
            <div class="relative bg-white bg-clip-padding p-4 rounded-b-3xl shadow-[10px_10px_30px_rgba(0,0,0,0.3)] group-hover:shadow-[15px_15px_40px_rgba(0,0,0,0.4)] mt-[-8px] transition-transform duration-500">
                <table class="w-full bg-gradient-to-b from-white to-red-100 rounded-lg overflow-hidden shadow-md">
                    <caption class="font-mono text-base mb-2 text-red-900 font-semibold tracking-wide">Kids Status</caption>
                    <thead class="bg-red-200">
                        <tr>
                            <th class="font-mono text-sm py-2 text-black tracking-wider">State</th>
                            <th class="font-mono text-sm py-2 text-black tracking-wider">Nº</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-red-50 transition-colors duration-300">
                            <td class="font-mono text-sm py-2 text-black text-center">Good Kids</td>
                            <td class="font-mono text-sm py-2 text-black text-center">{{ $goodKids }}</td>
                        </tr>
                        <tr class="hover:bg-red-50 transition-colors duration-300">
                            <td class="font-mono text-sm py-2 text-black text-center">Bad Kids</td>
                            <td class="font-mono text-sm py-2 text-black text-center">{{ $badKids }}</td>
                        </tr>
                        <tr class="bg-red-300">
                            <td class="font-mono text-sm py-2 text-black text-center font-semibold">Total</td>
                            <td class="font-mono text-sm py-2 text-black text-center font-semibold">{{ $goodKids + $badKids }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </a>

    </div>
</div>
@endsection

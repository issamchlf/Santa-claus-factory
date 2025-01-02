@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gradient-to-b from-red-500 to-red-700 py-8">
        <p class="font-serif text-md leading-tight text-center text-4xl font-holiday font-sans italic text-gray-100 pt-4">
            Welcome to our Factory...</p>
        <div class="flex flex-wrap items-center justify-center gap-12 pt-7 pb-8 h-full">


            <a href="{{ route('elve') }}" class="block">
                <div
                    class="bg-white p-4 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-500 w-[240px]">
                    <div class="text-center font-bold text-3xl mb-2">Elves</div>
                    <img class="h-[8rem] w-[9rem] object-cover mb-2 mx-auto rounded-md" src="image/Gitanillo.png"
                        alt="Elves" />
                    <table class="w-full table-fixed border-collapse border border-gray-300">
                        <caption class="font-serif text-md leading-tight caption-top text-lg text-black font-semibold mb-1">
                            Toys</caption>
                        <thead class="bg-gray-200">
                            <tr>
                                <th class="font-serif text-md leading-tight border border-gray-400 py-1 text-black text-xs">
                                    Age</th>
                                <th class="font-serif text-md leading-tight border border-gray-400 py-1 text-black text-xs">
                                    Nº</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($ageRanges as $range)
                                <tr>
                                    <td
                                        class="font-serif text-md leading-tight border border-gray-400 py-1 text-black text-center text-sm">
                                        {{ $range->min_age }} - {{ $range->max_age }}</td>
                                    <td
                                        class="font-serif text-md leading-tight border border-gray-400 py-1 text-black text-center text-sm">
                                        {{ $toys->where('minimum_age_id', $range->id)->count() }}
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td
                                    class="font-serif text-md leading-tight border border-gray-400 py-1 text-black text-center font-semibold">
                                    Total</td>
                                <td
                                    class="font-serif text-md leading-tight border border-gray-400 py-1 text-black text-center font-semibold">
                                    {{ $toys->count() }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </a>


            <div class="hidden lg:block lg:border-r-2 lg:h-[15rem] lg:mx-6"></div>

            <a href="{{ route('santa') }}" class="block">
                <div
                    class="bg-white p-4 rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-500 w-[240px]">
                    <div class="text-center font-bold text-3xl mb-2">Santa Claus</div>
                    <img class="h-[9rem] w-[9rem] object-cover mb-2 mx-auto rounded-md" src="image/GitanoSupremo.png"
                        alt="Santa Claus" />
                    <table class="w-full table-fixed border-collapse border border-gray-300">
                        <caption class="font-serif text-md leading-tight caption-top text-black font-semibold mb-1">Kids
                        </caption>
                        <thead class="bg-gray-200">
                            <tr>
                                <th class="font-serif text-md leading-tight border border-gray-400 py-1 text-black text-xs">
                                    State</th>
                                <th class="font-serif text-md leading-tight border border-gray-400 py-1 text-black text-xs">
                                    Nº</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td
                                    class="font-serif text-md leading-tight border border-gray-400 py-1 text-black text-center text-sm">
                                    Good Kids</td>
                                <td
                                    class="font-serif text-md leading-tight border border-gray-400 py-1 text-black text-center text-sm">
                                    {{ $goodKids }}</td>
                            </tr>
                            <tr>
                                <td
                                    class="font-serif text-md leading-tight border border-gray-400 py-1 text-black text-center text-sm">
                                    Bad Kids</td>
                                <td
                                    class="font-serif text-md leading-tight border border-gray-400 py-1 text-black text-center text-sm">
                                    {{ $badKids }}</td>
                            </tr>
                            <tr>
                                <td
                                    class="font-serif text-md leading-tight border border-gray-400 py-1 text-black text-center font-semibold">
                                    Total</td>
                                <td
                                    class="font-serif text-md leading-tight border border-gray-400 py-1 text-black text-center font-semibold">
                                    {{ $goodKids + $badKids }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </a>

        </div>
    </div>
@endsection

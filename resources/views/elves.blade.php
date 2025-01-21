@extends('layouts.app')

@section('content')
    <div class=" mx-auto  px-4 bg-gradient-to-b  py-8">
        <div class="overflow-hidden rounded-lg shadow-lg text-white">
            <table class="min-w-full table-christmas-gradient table-auto border-collapse text-sm">
                <thead>
                    <tr class="bg-red-700">
                        <th class="border-b-2 border-red-800 px-6 py-4 text-left text-xs font-bold uppercase tracking-wider">
                            Id</th>
                        <th class="border-b-2 border-red-800 px-6 py-4 text-left text-xs font-bold uppercase tracking-wider">
                            Name</th>
                        <th class="border-b-2 border-red-800 px-6 py-4 text-left text-xs font-bold uppercase tracking-wider flex justify-around">
                            Image</th>
                        <th class="border-b-2 border-red-800 px-6 py-4 text-left text-xs font-bold uppercase tracking-wider">
                            Description</th>
                        <th class="border-b-2 border-red-800 px-6 py-4 text-left text-xs font-bold uppercase tracking-wider">
                            Age Range</th>
                        <th class="border-b-2 border-red-800 px-6 py-4 text-left text-xs font-bold uppercase tracking-wider">
                            Option Range</th>
                        <th class="border-b-2 border-red-800 px-6 py-4"></th>
                    </tr>
                </thead>
                <tbody class="bg-red-50">
                    @foreach ($toys as $toy)
                        <tr
                            class="bg-red-100 hover:bg-red-300 transition ease-in-out duration-200 transform hover:scale-100">
                            <td class="font-serif text-md leading-tight border-dashed text-black border-red-300 px-6 py-4">
                                {{ $toy->id }}</td>
                            <td class="font-serif text-md leading-tight border-dashed text-black border-red-300 px-6 py-4">
                                {{ $toy->name }}</td>
                            <td class="font-serif text-md leading-tight border-dashed border-red-300 px-6 py-4 flex justify-center">
                                <img src="{{ $toy->image }}" alt="Foto"
                                    class="w-15 h-20 object-cover rounded-full shadow-md shadow-red-700 border-red">
                            </td>
                            <td class="font-serif text-md leading-tight border-dashed text-black border-red-300 px-6 py-4">
                                {{ $toy->description }}</td>
                            <td class="font-serif text-md leading-tight border-dashed border-red-300 px-6 py-4">
                                @if ($toy->minimumAge)
                                    <span
                                        class="font-serif text-md leading-tight inline-block bg-red-600 text-white font-semibold px-3 py-1 rounded-full text-xs wiggle">
                                        {{ $toy->minimumAge->min_age }} - {{ $toy->minimumAge->max_age }}
                                    </span>
                                @else
                                    <span
                                        class="inline-block bg-gray-200 text-gray-800 font-semibold px-3 py-1 rounded-full text-xs">
                                        No age range assigned
                                    </span>
                                @endif
                            </td>
                            <td class="border-dashed border-red-300 px-6 py-4">
                                <form method="POST" action="{{ route('toys.assignAge', $toy->id) }}">
                                    @csrf
                                    <select name="age_range_id"
                                        class="font-serif text-md leading-tight block w-full px-4 py-2 text-black border border-gray-300 rounded-md bg-gray focus:ring-2 focus:ring-red-500 focus:border-red-500 transition">
                                        <option value="" disabled selected>Select an age range</option>
                                        @foreach ($ageRanges as $range)
                                            <option value="{{ $range->id }}"
                                                @if ($toy->ageRanges && $toy->ageRanges->contains('id', $range->id)) selected @endif>
                                                {{ $range->min_age }} - {{ $range->max_age }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <button type="submit"
                                        class="font-serif text-md leading-tight mt-2 w-full px-4 py-2 text-sm font-medium text-white bg-red-600 border border-transparent rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-offset-2 transition-shadow duration-300 ease-in-out transform hover:scale-105 shadow-md hover:shadow-lg">
                                        Save
                                    </button>
                                </form>
                            </td>
                            <td class="border-dashed border-red-300 px-6 py-4 text-right">
                                <a href="{{ route('elveShow', ['id' => $toy->id]) }}"
                                    class="font-serif text-md leading-tight inline-block mt-2 w-full px-4 py-2 text-center font-medium text-white bg-red-600 border border-transparent rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-offset-2 transition-shadow duration-300 ease-in-out transform hover:scale-105 shadow-md hover:shadow-lg">
                                    Show
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 m-4">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-4 py-3">Id</th>
                <th scope="col" class="px-4 py-3">Name</th>
                <th scope="col" class="px-4 py-3">Image</th>
                <th scope="col" class="px-4 py-3">Description</th>
                <th scope="col" class="px-4 py-3">Age Range</th>
                <th scope="col" class="px-4 py-3"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($toys as $toy)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-6 py-4">{{ $toy->id }}</td>
                    <td class="px-6 py-4">{{ $toy->name }}</td>
                    <td>
                        <img src="{{ $toy->image }}" alt="Foto" style="width: 50px; height: 50px; object-fit: cover;">
                    </td>
                    <td class="px-6 py-4">{{ $toy->description }}</td>
                    <td class="px-6 py-4">
                        <!-- Dropdown to select Age Range -->
                        <form method="POST" action="{{ route('toys.assignAge', $toy->id) }}">
                            @csrf
                            <!-- Dropdown to select Age Range -->
                            <select name="age_range_id" 
                                    class="block w-full px-4 py-2 text-sm border border-gray-300 rounded-lg bg-white focus:ring-2 focus:ring-red-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-400 dark:focus:border-blue-400 transition">
                                <option value="" disabled selected>Select an age range</option>
                                @foreach ($ageRanges as $range)
                                    <option value="{{ $range->id }}" 
                                        @if($toy->ageRanges && $toy->ageRanges->contains('id', $range->id)) selected @endif>
                                        {{ $range->min_age }} - {{ $range->max_age }}
                                    </option>
                                @endforeach
                            </select>
                            <!-- Styled Save Button -->
                            <button type="submit" 
                                    class="mt-2 w-full px-4 py-2 text-sm font-medium text-white bg-red-500 border border-transparent rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-offset-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-700">
                                Save
                            </button>
                        </form>
                    </td>
                   
                    <td class="px-6 py-4 text-right">
                    <button type="submit" 
                                    class="mt-2 w-full px-4 py-2 text-sm font-medium text-white bg-red-500 border border-transparent rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-offset-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-700">
                                    <a href="{{ route('elveShow', ['id' => $toy->id]) }}">Show</a>
                            </button>
                        </td>
                </tr>
            @endforeach  
        </tbody>
    </table>
</div>
@endsection

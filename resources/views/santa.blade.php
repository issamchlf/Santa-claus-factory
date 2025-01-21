@extends('layouts.app')

@section('content')
    <div class=" mx-auto  px-4 bg-gradient-to-b from-red-500 to-red-700 py-8">
        <div class="overflow-hidden rounded-lg shadow-lg text-white">
            <table class="min-w-full table-christmas-gradient table-auto border-collapse text-sm">
                <thead>
                    <tr class="bg-red-700">
                        <th class="border-b-2 border-red-800 px-6 py-4 text-left text-xs font-bold uppercase tracking-wider">
                            Name</th>
                        <th class="border-b-2 border-red-800 px-6 py-4 text-left text-xs font-bold uppercase tracking-wider">
                            Surname</th>
                        <th
                            class="border-b-2 border-red-800 px-6 py-4 text-left text-xs font-bold uppercase tracking-wider flex justify-center">
                            Photo</th>
                        <th class="border-b-2 border-red-800 px-6 py-4 text-left text-xs font-bold uppercase tracking-wider">
                            Age</th>
                        <th class="border-b-2 border-red-800 px-6 py-4 text-left text-xs font-bold uppercase tracking-wider">
                            Toys</th>
                        <th
                            class="border-b-2 border-red-800 px-6 py-4 text-left text-xs font-bold uppercase tracking-wider flex justify-center">
                            Images</th>
                        <th class="border-b-2 border-red-800 px-6 py-4"></th>
                    </tr>
                </thead>
                <tbody class="bg-red-50">
                    @forelse ($kids as $kid)
                        <tr
                            class="bg-red-100 hover:bg-red-300 transition ease-in-out duration-200 transform hover:scale-100">
                            <td class="font-serif text-md leading-tight border-dashed text-black border-red-300 px-6 py-4">
                                {{ $kid->name }}</td>
                            <td class="font-serif text-md leading-tight border-dashed text-black border-red-300 px-6 py-4">
                                {{ $kid->surname }}</td>
                            <td
                                class="font-serif text-md leading-tight border-dashed border-red-300 px-6 py-4 flex justify-center">
                                <img src="{{ $kid->foto }}" alt="Photo"
                                    class="w-15 h-20 object-cover rounded-full shadow-md shadow-red-700 border-red">
                            </td>
                            <td class="border-dashed text-black border-red-300 px-6 py-4">{{ $kid->age }}</td>
                            <td class="border-dashed border-red-300 px-6 py-4">
                                @if ($kid->toys && $kid->toys->isNotEmpty())
                                    <ul class=" list-disc pl-4">
                                        @foreach ($kid->toys as $toy)
                                            <li class="font-serif text-md leading-tight text-black">{{ $toy->name }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    <span
                                        class="inline-block bg-gray-200 text-gray-800 font-semibold px-3 py-1 rounded-full text-xs">
                                        No toys assigned
                                    </span>
                                @endif
                            </td>
                            <td class="border-dashed border-red-300 px-6 py-4">
                                @if ($kid->toys && $kid->toys->isNotEmpty())
                                    <div class="flex flex-wrap gap-2 justify-center">
                                        @foreach ($kid->toys as $toy)
                                            <img src="{{ $toy->image }}" alt="Toy Image"
                                                class="w-15 h-20 object-cover rounded shadow-md shadow-red-700 border-red">
                                        @endforeach
                                    </div>
                                @else
                                    <span
                                        class="inline-block bg-gray-200 text-gray-800 font-semibold px-3 py-1 rounded-full text-xs">
                                        No toys assigned
                                    </span>
                                @endif
                            </td>
                            <td class="border-dashed border-red-300 px-6 py-4 text-right">
                                <a href="{{ route('santaShow', ['id' => $kid->id]) }}"
                                    class="font-serif text-md leading-tight inline-block mt-2 w-full px-4 py-2 text-sm font-medium text-white bg-red-600 text-center border border-transparent rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-offset-2 transition-shadow duration-300 ease-in-out transform hover:scale-105 shadow-md hover:shadow-lg">
                                    Show
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="border-dashed text-center border-red-300 px-6 py-4 text-gray-500">
                                No kids found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <form method="POST" action="{{ route('assignToys') }}" class="mt-4">
            @csrf
            <button type="submit"
                class="ms-9 px-8 py-2 bg-emerald-600 text-white rounded-lg hover:bg-emerald-800 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-offset-2 transition-shadow duration-300 ease-in-out transform hover:scale-105 shadow-md hover:shadow-lg">
                Assign Toys
            </button>
        </form>
        <form method="POST" action="{{ route('removeAssignedToys') }}" class="mt-2">
            @csrf
            @method('DELETE')
            <button type="submit"
                class="bg-blue-600 text-white ms-9 mb-5 px-8 py-2 rounded-lg hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-offset-2 transition-shadow duration-300 ease-in-out transform hover:scale-105 shadow-md hover:shadow-lg">
                Remove Assigned Toys
            </button>
        </form>
    </div>

@endsection

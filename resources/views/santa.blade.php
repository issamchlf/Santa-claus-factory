@extends('layouts.app')
@section('content')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">Name</th>
                <th scope="col" class="px-6 py-3">Surname</th>
                <th scope="col" class="px-6 py-3">Photo</th>
                <th scope="col" class="px-6 py-3">Age</th>
                <th scope="col" class="px-6 py-3">Toys</th>
                <th scope="col" class="px-6 py-3">Image</th>
                <th scope="col" class="px-6 py-3">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($kids as $kid)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    
                    <td class="px-6 py-4">{{ $kid->name }}</td>
                    <td class="px-6 py-4">{{ $kid->surname }}</td>
                    <td class="px-6 py-4">
                        <img src="{{ $kid->foto }}" alt="Photo" class="w-12 h-12 object-cover rounded">
                    </td>
                    <td class="px-6 py-4">{{ $kid->age }}</td>

                    <td class="px-6 py-4">
                        @if($kid->toys && $kid->toys->isNotEmpty())
                            <ul class="list-disc pl-4">
                                @foreach ($kid->toys as $toy)
                                    <li>{{ $toy->name }}</li>
                                    
                                @endforeach
                            </ul>
                        @else
                            <span>No toys assigned</span>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        @if($kid->toys && $kid->toys->isNotEmpty())
                            <ul class="list-disc pl-4">
                                @foreach ($kid->toys as $toy)
                                <img src="{{ $toy->image }}" alt="Photo" class="w-12 h-12 object-cover rounded">
                                    
                                @endforeach
                            </ul>
                        @else
                            <span>No toys assigned</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="{{ route('santaShow', ['id' => $kid->id]) }}" 
                           class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Show</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="10" class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">
                        No kids found.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<form method="POST" action="{{ route('assignToys') }}" class="mt-4">
    @csrf
    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Assign Toys</button>
</form>
<form method="POST" action="{{ route('removeAssignedToys') }}">
    @csrf
    @method('DELETE')
    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700">
        Remove Assigned Toys
    </button>
</form>
@endsection

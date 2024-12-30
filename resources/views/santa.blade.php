@extends('layouts.app')
@section('content')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">Id</th>
                <th scope="col" class="px-6 py-3">Name</th>
                <th scope="col" class="px-6 py-3">Surname</th>
                <th scope="col" class="px-6 py-3">Photo</th>
                <th scope="col" class="px-6 py-3">Age</th>
                <th scope="col" class="px-6 py-3">Gender</th>
                <th scope="col" class="px-6 py-3">Attitude</th>
                <th scope="col" class="px-6 py-3">Country</th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">More</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kids as $kid)
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-6 py-4">{{$kid->id}}</td>
                    <td class="px-6 py-4">{{$kid->name}}</td>
                    <td class="px-6 py-4">{{$kid->surname}}</td>
                    <td>
                        <img src="{{ $kid->foto }}" alt="Foto" style="width: 50px; height: 50px; object-fit: cover;">
                    </td>
                    
                    <td class="px-6 py-4">{{$kid->age}}</td>
                    <td class="px-6 py-4">{{$kid->gender}}</td>
                    <td class="px-6 py-4">{{$kid->atitude}}</td>
                    <td class="px-6 py-4">{{$kid->country}}</td>
                    <td class="px-6 py-4 text-right">
                    <a href="{{route('santaShow', ['id' => $kid->id])}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Show</a>
                    </td>
                </tr>  
            @endforeach  
        </tbody>
    </table>
</div>
@endsection
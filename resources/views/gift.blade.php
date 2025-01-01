@extends('layouts.app')
@section('content')
<h1>Details of kid {{ $kids->first_name }} {{ $kid->last_name }}</h1>
    
<h3>gifts:</h3>
<ul>
    @foreach($kid->toys as $toy)
        <li>{{ $toy->name }} - {{ $toy->description }}</li>
    @endforeach
</ul>

<a href="{{ route('home') }}">back</a>
@endsection
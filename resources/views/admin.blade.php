@extends('layout')

@section('content')
    <h1>Showing the welcome with diff langs {{__('welcome.welcome') }}</h1>
    <h2>Welcome to the showable admin page</h2>


    @forelse($data as $x)

        <p>this is the data: {{ $x }}</p>
    @empty
        <p>No data ava</p>

    @endforelse

    @include('components.componentX')

@endsection
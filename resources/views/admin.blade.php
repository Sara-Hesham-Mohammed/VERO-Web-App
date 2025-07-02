@extends('layout')

@section('content')
    <h1>Showing the welcome with diff langs {{__('welcome.welcome') }}</h1>
    <h2>Welcome to the showable admin page</h2>

    <p>Hey  {{ $name }} you are {{ $role }}</p>

    <p>{{ $altered }}</p>
    
    @include('components.componentX')
@endsection
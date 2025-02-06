<h1>Hello From Laravel Course</h1>
<!-- some text-->




{{-- 
@if (false) 
    This will be displayed
@endif

@foreach ($hobbies as $h)
    @foreach ($hobbies as $h)
        {{ $loop->depth }}
        {{ $loop->parent->depth }}
    @endforeach
@endforeach --}}


{{-- <div @class([
    'my-css-class',
    'george' => $country === 'ina'
    ]) 
@style([
    'color : red',
    'background-color : cyan'

])
    >   
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt dolore quos, laborum expedita officia corporis cum minima dicta laudantium, cumque eveniet voluptatem officiis tempora asperiores ipsam ex velit nisi eum?
</div> --}}

{{-- @include('shared.button', ['color' => 'red', 'text' => 'Submit'])
@php
    $cars = [
        1, 2, 3, 4, 5
    ]
@endphp

@foreach ($cars as $car)
    @include('car.view', ['car' => $car])
@endforeach

@each('car.view', $cars, 'car', 'car.empty' ) --}}

@extends('layouts.app')

@section('content')
    <h1>Welcome to the Homepage</h1>

    @include('components.alert', ['message' => 'This is an important alert!', 'color' => 'red'])
    
    @include('components.alert', ['message' => 'Success! Your action was completed.', 'color' => 'green'])
@endsection

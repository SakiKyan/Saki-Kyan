@extends('layouts.app')

@section('content')
    <h1>Dashboard #{{$id}}</h1>

    @foreach(range(1,5) as $number)
        <h2>Content #{{$number}}</h2>
    @endforeach
@endsection

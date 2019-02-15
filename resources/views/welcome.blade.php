@extends('layout')


@section('title', 'Welcome')

@section('content')
    <h1>My First  {{ $foo }} WebSite</h1>

@endsection

{{--
 <ul>
  @foreach($tasks as $task)
    <li>{{ $task }} </li>
  @endforeach
</ul>
--}}

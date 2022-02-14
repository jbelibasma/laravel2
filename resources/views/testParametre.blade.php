@extends('layout')
@section('content')


<h1>votre nom est {{$name}} {{$lastname}}</h1>
<h1>votre nom est {{$name .' '. $lastname}}</h1>

@endsection


@section('footer')
<a href="/">Home</a>
@endsection


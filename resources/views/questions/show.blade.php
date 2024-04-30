@extends('templates/sample2')

@section('content')
<div class="container">
    <h1> {{ $question->title }}</h1>

    <p class="lead">
        {{ $question->description }}
    </p>

    <hr/>

</div>

@stop

@extends('templates/sample2')

@section('content')
<div class="container">
                <div class="jumbotron">
                    <h1>Ask A Question</h1>
                    <p>
                        Ask any question you want to know about me and we'll get the answer.
                    </p>

                    <p>
                        <a href="{{ route('questions.create') }}" class="btn btn-primary btn-lg" role="button">Ask now</a>
                    </p>
                </div>

                <div>
                    <h2>Recent Questions</h2>
                </div>
 </div>
@stop

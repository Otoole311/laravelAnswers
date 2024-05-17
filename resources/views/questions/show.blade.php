@extends('templates/sample2')

@section('content')
<div class="container">
    <h1> {{ $question->title }}</h1>

    <p class="lead">
        {{ $question->description }}
    </p>

    <hr/>

    @if($question->answers()->count() > 0)

    <!-- display answers  for this question-->
        @foreach($question->answers as $answer)
        <div class="panel panel-default">
            <div class="panel-body">
                <p>
                    {{ $answer->content }}
                </p>

            </div>
        </div>
    @endforeach

    @else
    <p>
        There are no answers for this question, please consider submitting one.
    </p>


    @endif



    <hr/>

    <!-- display the form to create an answer-->
    <form action="{{ route('answers.store') }}" method="POST">
        @csrf

        <h4>Submit your own Answer:</h4>

        <textarea class="form-control" name="content" rows="4">
        </textarea>

        <input type="hidden" value="{{ $question->id }}" name="question_id" />

        <input type="submit" class="btn btn-primary" value="Submit Answer"/>

    </form>

</div>

@stop

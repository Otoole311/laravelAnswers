<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LaravelAnswer</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    </head>

    <body>

        <div class="container">

        <h1>Questions</h1>

        <hr/>

        <form action="{{ route('questions.store') }}" method="POST">
            @csrf

            <label for="title">Question:</label>
            <input type="text" name="title" id ="title" class="form-control"/>

            <label for="description">More Information:</label>
            <textarea name="description" id ="description" class="form-control" rows="4"></textarea>

            <input type="submit" class="btn btn-primary" value="Submit Question"/>
        </form>

        </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>

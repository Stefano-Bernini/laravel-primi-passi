<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>Laravel</title>
    </head>
    <body>
        <div class="container vh-100 d-flex justify-content-center align-items-center">
            <div class="row">
                <div class="col">
                    <h1>Hello Wolrd!</h1>
                    <h2>by {{$name}} {{$surname}}</h2>
                </div>
            </div>
        </div>
    </body>
</html>

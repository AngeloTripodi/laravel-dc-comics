<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')
</head>

<body>
    <h1>COMICS:</h1>

    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-3">
                    <h1>{{ $comic->title }}</h1>
                    <h5>Series: {{ $comic->series }}</h5>
                    <h5>Comic type:{{ $comic->type }}</h5>
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                    <h5>Price: {{ $comic->price }}</h5>
                    <h6>Sale date: {{ $comic->sale_date }}</h6>
                    <p>{{ $comic->description }}</p>
                </div>
            @endforeach
        </div>
    </div>


</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comic</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class=" text-info my-3">COMIC:</h1>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            @if (session('message'))
                <div class="alert alert-{{ session('alert-type') }}">
                    {{ session('message') }}
                </div>
            @endif
            {{-- @foreach ($comics as $comic)
                <div class="col-3">
                    <h1>{{ $comic->title }}</h1>
                    <h5>Series: {{ $comic->series }}</h5>
                    <h5>Comic type:{{ $comic->type }}</h5>
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                    <h5>Price: {{ $comic->price }}</h5>
                    <h6>Sale date: {{ $comic->sale_date }}</h6>
                    <p>{{ $comic->description }}</p>
                </div> --}}

            <div class="col-12 text-center m-auto">
                <h1>{{ $comic->title }}</h1>
                <h5>Series: {{ $comic->series }}</h5>
                <h5>Comic type:{{ $comic->type }}</h5>
                <img class="img-fluid w-25" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                <h5>Price: {{ $comic->price }}$</h5>
                <h6>Sale date: {{ $comic->sale_date }}</h6>
                <p>{{ $comic->description }}</p>
                <a class="btn btn-dark btn-lg btn" href="{{ route('admin.comics.index') }}">Visualizza i
                    prodotti</a>
                <a class="btn btn-lg btn-warning" href="{{ route('admin.comics.edit', $comic->id) }}">EDIT</a>
                <form class=" d-inline-block" action="{{ route('admin.comics.destroy', $comic->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-lg btn-danger">DELETE</button>
                </form>
            </div>





        </div>
    </div>



</body>

</html>

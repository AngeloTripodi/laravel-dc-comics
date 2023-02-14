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
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class=" text-info my-3">COMICS:</h1>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
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

            <table class="table">
                <thead class="table-dark">
                    <th scope="col">id</th>
                    <th scope="col">title</th>
                    <th scope="col">series</th>
                    <th scope="col">price</th>
                    <th scope="col">type</th>
                    <th scope="col">sale date</th>
                    <th scope="col">Action</th>
                </thead>
                <tbody>

                    @foreach ($comics as $comic)
                        <tr>
                            <th scope="row">{{ $comic->id }}</th>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->price }}</td>
                            <td>{{ $comic->type }}</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td>
                                <a class="btn btn-sm btn-dark" href="{{ route('comics.show', $comic->id) }}">SHOW</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>


        </div>
    </div>


</body>

</html>

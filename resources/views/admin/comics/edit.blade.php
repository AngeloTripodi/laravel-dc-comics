<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Comics</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class=" text-info my-3">EDIT COMIC:</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <form action="{{ route('admin.comics.update', $comic->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" class="form-control" id="title" name="title"
                        value="{{ $comic->title }}">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Series:</label>
                    <input type="text" class="form-control" id="series" name="series"
                        value="{{ $comic->series }}">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type:</label>
                    <input type="text" class="form-control" id="type" name="type"
                        value="{{ $comic->type }}">
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Thumb:</label>
                    <input type="text" class="form-control" id="thumb" name="thumb"
                        value="{{ $comic->thumb }}">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price:</label>
                    <input type="text" class="form-control" id="price" name="price"
                        value="{{ $comic->price }}">
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale date:</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date"
                        value="{{ $comic->sale_date }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <textarea class=" form-control" name="description" id="description" cols="20" rows="3">{{ $comic->description }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>




        </div>
    </div>


</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar tipo de tren</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Modificar tipo de tren</h1>
    <form action="/trainTypes/{{ $trainType->id }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="type">Tipo de tren</label>
            <select class="form-control" id="type" name="type">
                @foreach ($allTrainTypes as $type)
                <option value="{{ $trainType->id }}" {{ $trainType->id == $type->id ? 'selected' : '' }}>{{ $type->type }}
                </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Modificar</button>
    </form>
    <a href="/trainTypes" class="btn btn-primary mt-3">Volver a la página principal</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>
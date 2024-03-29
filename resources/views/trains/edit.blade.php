<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar trenes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Modificar trenes</h1>
    <form action="/trains/{{ $train->id }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="train_name">Nombre del tren</label>
            <input type="text" class="form-control" id="train_name" name="name" value="{{ $train->name }}">
        </div>
        <div class="form-group">
            <label for="train_passengers">Número de pasajeros</label>
            <input type="number" class="form-control" id="train_passengers" name="passengers" value="{{ $train->passengers }}">
        </div>
        <div class="form-group">
            <label for="train_year">Año</label>
            <input type="number" class="form-control" id="train_year" name="year" value="{{ $train->year }}">
        </div>
        <div class="form-group">
            <label for="train_type">Tipo de tren</label>
            <select class="form-control" id="train_type" name="train_type_id">
                @foreach ($trainTypes as $trainType)
                    <option value="{{ $trainType->id }}" 
                    {{ $train->train_type_id == $trainType->id ? 'selected' : '' }}>
                        {{ $trainType->type }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Modificar</button>
    </form>
    <a href="/trains" class="btn btn-primary mt-3">Volver a la página principal</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear trenes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Crear un nuevo tren</h1>
    <form action="/trains" method="post">
        @csrf
        <label for="name">Nombre del tren:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="passengers">Número de pasajeros:</label><br>
        <input type="number" id="passengers" name="passengers"><br>
        <label for="year">Año:</label><br>
        <input type="number" id="year" name="year"><br>
        <label for="trainType">Tipo de tren:</label><br>
        <select type="text" id="trainType" name="trainType">
            @foreach ($trainTypes as $trainType)
            <option value="{{ $trainType->id}}">{{
                $trainType->type}}
            </option>
            @endforeach
            </select>
        <br></br>
        <input type="submit" class="btn btn-primary" value="Crear tren">
    </form>
    <a href="/trains" class="btn btn-primary mt-3">Volver a la página principal</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
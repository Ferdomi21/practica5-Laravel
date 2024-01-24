<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear tickets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1>Crear tickets</h1>
<form action="/tickets" method="POST">
    @csrf
    <label for="date">Fecha del ticket:</label><br>
    <input type="date" id="date" name="date"><br>
    <label for="price">Precio:</label><br>
    <input type="number" id="price" name="price"><br>
    <label for="trainType">Tipo de tren:</label><br>
    <select type="text" id="train_id" name="train_id">
        @foreach ($trainTypes as $trainType)
        <option value="{{ $trainType->id}}">{{ $trainType->type }}</option>
        @endforeach
    </select>
    <br>
    <label for="ticketType">Tipo de ticket:</label><br>
    <select type="text" id="ticketType" name="ticketType">
        @foreach ($ticketTypes as $ticketType)
        <option value="{{ $ticketType->id}}">{{ $ticketType->type }}</option>
        @endforeach
    </select>
    <br><br>
    <button type="submit" class="btn btn-primary">Crear ticket</button>
</form>
<a href="/tickets" class="btn btn-primary mt-3">Volver a la página principal</a>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</html>
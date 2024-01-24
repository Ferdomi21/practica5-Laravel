<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenidos a la página de Renfe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Bienvenidos a Renfe</h1>
    <a href="/trains/create" class="btn btn-success mb-3">Crear trenes</a>
    <a href="/trainTypes" class="btn btn-primary mb-3">Tipo de trenes</a>
    <a href="/tickets" class="btn btn-primary mb-3">Tickets</a>
    <a href="/ticketTypes" class="btn btn-primary mb-3">Tipo de tickets</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nombre del tren</th>
                <th scope="col">Número de pasajeros</th>
                <th scope="col">Año</th>
                <th scope="col">Tipo de tren</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
            <tr>
                <td>{{ $train->name }}</td>
                <td>{{ $train->passengers }}</td>
                <td>{{ $train->year }}</td>
                <td>{{ $train->trainType->type }}</td>
                <td>
                    <a href="/trains/{{ $train->id }}" class="btn btn-outline-info">Ver</a>
                    <a href="/trains/{{ $train->id }}/edit" class="btn btn-warning">Modificar</a>
                    <form action="/trains/{{ $train->id }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</html>
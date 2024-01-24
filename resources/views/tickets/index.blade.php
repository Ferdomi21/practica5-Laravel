<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Tickets</h1>
    <a href="/tickets/create" class="btn btn-success mb-3">Crear nuevo ticket</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Fecha del ticket</th>
                <th scope="col">Precio</th>
                <th scope="col">Tipo de tren</th>
                <th scope="col">Tipo de ticket</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->date }}</td>
                    <td>{{ $ticket->price }}</td>
                    <td>{{ $ticket->train -> trainType ->type}}</td>
                    <td>{{ $ticket->ticketType->type }}</td>
                
                <td>
                <a href="/tickets/{{ $ticket->id }}" class="btn btn-outline-info">Ver</a>
                    <a href="/tickets/{{ $ticket->id }}/edit" class="btn btn-warning">Modificar</a>
                    <form action="/tickets/{{ $ticket->id }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/trains" class="btn btn-primary mt-3">Volver a la página principal</a>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</html>
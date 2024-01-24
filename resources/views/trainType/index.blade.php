<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de trenes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
        <h1>Tipo de tren</h1>
        <a href="{{ route('trainTypes.create') }}" class="btn btn-success mb-3">Crear tipo de tren</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Tipo</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($trainTypes as $trainType)
            <tr>
                <td>{{ $trainType->type }}</td>
                <td>
                    <a href="{{ route('trainTypes.show', $trainType->id) }}" class="btn btn-outline-info">Ver</a>
                </td>
                <td>
                    <a href="{{ route('trainTypes.edit', $trainType->id) }}" class="btn btn-warning">Modificar</a>
                </td>
                <td>
                    <form action="{{ route('trainTypes.destroy', $trainType->id) }}" method="POST">
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
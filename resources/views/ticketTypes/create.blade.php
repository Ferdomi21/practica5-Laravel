<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear tipo de tickets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Crear tipos de tickets</h1>
    <form action="{{ route('ticketTypes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="type">Tipo de ticket</label>
            <input type="text" class="form-control" id="type" name="type" required>
        </div>
        <button type="submit" class="btn btn-primary">Crear nuevo ticket</button>
    </form>
</body>
<a href="/trains" class="btn btn-primary mt-3">Volver a la página principal</a>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</html>
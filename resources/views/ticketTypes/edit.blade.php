<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar tipo de ticket</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Editar tipo de ticket</h1>
    <form action="{{ route('ticketTypes.update', $ticketType->id) }}" method="POST">
        @csrf
        <select class="form-control" id="type" name="type">
            @foreach ($allTicketTypes as $type)
            <option value="{{ $type->id }}" {{ $ticketType->id == $type->id ? 'selected' : '' }}>{{ $type->type }}
            </option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Modificar</button>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</html>
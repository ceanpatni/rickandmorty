<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personajes de Rick and Morty</title>
</head>
<body>
    <h1>Personajes de Rick and Morty</h1>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Estado</th>
                <th>Especie</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($characters as $character)
                <tr>
                    <td>{{ $character['id'] }}</td>
                    <td>{{ $character['name'] }}</td>
                    <td>{{ $character['status'] }}</td>
                    <td>{{ $character['species'] }}</td>
                    <td>
                        <a href="{{ route('characters.show', $character['id']) }}">Detalles</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <form action="{{ route('characters.store') }}" method="POST">
    @csrf
    <button type="submit">Save Characters</button>
</form>
</body>
</html>
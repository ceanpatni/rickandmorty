<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personajes de Rick and Morty</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1 class="text-center mb-4">Personajes de Rick and Morty</h1>

    <!-- Mensajes de éxito o error -->
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

    <!-- Tabla con clases de Bootstrap -->
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
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
                        <a href="{{ route('characters.show', $character['id']) }}" class="btn btn-primary btn-sm">Detalles</a>
                  
                    <a href="{{ route('characters.edit', $character['id']) }}" class="btn btn-primary btn-sm">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Botón para guardar personajes -->
    <form action="{{ route('characters.store') }}" method="POST" class="mt-4">
        @csrf
        <button type="submit" class="btn btn-success">Guardar Personajes</button>
    </form>

    <!-- Bootstrap JS (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
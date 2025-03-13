<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Personaje</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1 class="text-center mb-4">Editar Personaje</h1>

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

    <!-- Formulario de edición -->
    <form action="{{ route('characters.update', $character->id) }}" method="POST" class="card p-4">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nombre:</label>
            <input type="text" name="name" value="{{ $character->name }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Estado:</label>
            <input type="text" name="status" value="{{ $character->status }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="species" class="form-label">Especie:</label>
            <input type="text" name="species" value="{{ $character->species }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipo:</label>
            <input type="text" name="type" value="{{ $character->type }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="gender" class="form-label">Género:</label>
            <input type="text" name="gender" value="{{ $character->gender }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="origin_name" class="form-label">Nombre del Origen:</label>
            <input type="text" name="origin_name" value="{{ $character->origin_name }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="origin_url" class="form-label">URL del Origen:</label>
            <input type="text" name="origin_url" value="{{ $character->origin_url }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Imagen:</label>
            <input type="text" name="image" value="{{ $character->image }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>

    <div class="mt-4">
        <a href="{{ route('characters.index') }}" class="btn btn-primary">Volver a la lista</a>
    </div>
</body>
</html>
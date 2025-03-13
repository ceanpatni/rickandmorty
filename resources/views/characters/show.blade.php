<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Personaje</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1 class="text-center mb-4">Detalles del Personaje</h1>

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

    <!-- Detalles del personaje -->
    <div class="card">
        <div class="card-body">
            <p><strong>ID:</strong> {{ $character['id'] }}</p>
            <p><strong>Nombre:</strong> {{ $character['name'] }}</p>
            <p><strong>Estado:</strong> {{ $character['status'] }}</p>
            <p><strong>Especie:</strong> {{ $character['species'] }}</p>
            <p><strong>Tipo:</strong> {{ $character['type'] ?? 'N/A' }}</p>
            <p><strong>Género:</strong> {{ $character['gender'] }}</p>
            <p><strong>Origen:</strong> {{ $character['origin_name'] }}</p>
            <p><strong>Ubicación:</strong> {{ $character['origin_url'] }}</p>
            <p><strong>Imagen:</strong></p>
            <img src="{{ $character['image'] }}" alt="{{ $character['name'] }}" class="img-fluid rounded">
        </div>
    </div>

    <!-- Botón para volver a la lista -->
    <div class="mt-4">
        <a href="{{ route('characters.index') }}" class="btn btn-primary">Volver a la lista</a>
    </div>

    <!-- Bootstrap JS (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
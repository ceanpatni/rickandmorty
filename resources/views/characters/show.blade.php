<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Personaje</title>
</head>
<body>
    <h1>Detalles del Personaje</h1>
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
    <div>
        <p><strong>ID:</strong> {{ $character['id'] }}</p>
        <p><strong>Nombre:</strong> {{ $character['name'] }}</p>
        <p><strong>Estado:</strong> {{ $character['status'] }}</p>
        <p><strong>Especie:</strong> {{ $character['species'] }}</p>
        <p><strong>Tipo:</strong> {{ $character['type'] ?? 'N/A' }}</p>
        <p><strong>Género:</strong> {{ $character['gender'] }}</p>
        <p><strong>Origen:</strong> {{ $character['origin_name'] }}</p>
        <p><strong>Ubicación:</strong> {{ $character['origin_url'] }}</p>
        <p><strong>Imagen:</strong></p>
        <img src="{{ $character['image'] }}" alt="{{ $character['name'] }}">
    </div>
    <a href="{{ route('characters.index') }}">Volver a la lista</a>
</body>
</html>
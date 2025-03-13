<!DOCTYPE html>
<html>
<head>
    <title>Edit Character</title>
</head>
<body>
    <h1>Edit Character</h1>
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
    <form action="{{ route('characters.update', $character->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $character->name }}">
        <label for="status">Status:</label>
        <input type="text" name="status" value="{{ $character->status }}">
        <label for="species">Species:</label>
        <input type="text" name="species" value="{{ $character->species }}">
        <label for="type">Type:</label>
        <input type="text" name="type" value="{{ $character->type }}">
        <label for="gender">Gender:</label>
        <input type="text" name="gender" value="{{ $character->gender }}">
        <label for="origin_name">Origin Name:</label>
        <input type="text" name="origin_name" value="{{ $character->origin_name }}">
        <label for="origin_url">Origin URL:</label>
        <input type="text" name="origin_url" value="{{ $character->origin_url }}">
        <label for="image">Image:</label>
        <input type="text" name="image" value="{{ $character->image }}">
        <button type="submit">Update</button>
    </form>
</body>
</html>
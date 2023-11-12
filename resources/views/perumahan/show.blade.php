<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Perumahan</title>
</head>
<body>
    <h1>Show Perumahan</h1>

    <form method="POST" action="{{ route('perumahan.update', ['id' => $perumahan->id]) }}">
        @csrf
        @method('PUT')

        <label for="nama_rumah">Nama Rumah:</label>
        <input type="text" name="nama_rumah" value="{{ $perumahan->nama_rumah }}" required>

        <label for="no_rumah">No Rumah:</label>
        <input type="number" name="no_rumah" value="{{ $perumahan->no_rumah }}" required>

        <label for="is_occupied">Occupied:</label>
        <input type="checkbox" name="is_occupied" {{ $perumahan->is_occupied ? 'checked' : '' }}>

        <!-- Add more fields as needed -->

        <button type="submit">Update</button>
    </form>

    <a href="{{ url('/perumahan') }}">Back to Home</a>
</body>
</html>
@extends('layouts.app')
@section("content")
    <a href="{{route("perumahan.home")}}" class="btn btn-primary">Kembali</a>
    <h1 class="my-5">Update Rumah</h1>
    <form method="POST" action="{{ route('perumahan.update', ['id' => $perumahan->id]) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_rumah" class="form-label">Nama Rumah:</label>
            <input type="text" name="nama_rumah" value="{{ $perumahan->nama_rumah }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="no_rumah" class="form-label">Nomor Rumah:</label>
            <input type="number" name="no_rumah"  class="form-control" value="{{ $perumahan->no_rumah }}" required>
        </div>

        <div class="mb-3">
            <label for="is_occupied" class="form-label">Ditempati:</label>
            <input type="checkbox" name="is_occupied" class="form-check-input"  {{ $perumahan->is_occupied ? 'checked' : '' }}>
        </div>

        <!-- Add more fields as needed -->

        <button class="btn btn-warning" type="submit">Update</button>
    </form>
@endsection
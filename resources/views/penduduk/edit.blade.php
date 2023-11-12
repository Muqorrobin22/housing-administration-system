@extends('layouts.app') 

@section('content')
    <div class="container">
        <h2>Edit Penduduk</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('penduduk.update', $penduduk->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nama_penduduk">Nama Penduduk</label>
                <input type="text" name="nama_penduduk" class="form-control" value="{{ $penduduk->nama_penduduk }}" required>
            </div>

            <div class="form-group">
                <label for="keluarga_dari">Keluarga Dari</label>
                <select name="keluarga_dari" class="form-control" required>
                    {{-- Populate this dropdown with data from the "pemilik_rumah" table --}}
                    @foreach($pemilikRumah as $key => $value)
                        <option value="{{ $key }}" @if($key == $penduduk->keluarga_dari) selected @endif>{{ $value }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update Penduduk</button>
        </form>
    </div>
@endsection

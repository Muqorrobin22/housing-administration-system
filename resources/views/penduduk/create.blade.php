@extends('layouts.app') {{-- Assuming you have a layout file --}}

@section('content')
    <div class="container">
        <h2>Create Penduduk</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('penduduk.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nama_penduduk">Nama Penduduk</label>
                <input type="text" name="nama_penduduk" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="keluarga_dari">Keluarga Dari</label>
                <select name="keluarga_dari" class="form-control" required>
                    {{-- Populate this dropdown with data from the "pemilik_rumah" table --}}
                    @foreach($pemilikRumahOptions as $pemilikRumah => $namaPemilik)
                        <option value="{{ $pemilikRumah }}">{{ $namaPemilik }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create Penduduk</button>
        </form>
    </div>
@endsection
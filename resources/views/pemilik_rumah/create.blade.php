@extends('layouts.app')

@section('content')
    <h2>Create New Pemilik Rumah</h2>

    <a href="{{route("pemilik_rumah.index")}}" class="btn btn-primary my-5">Kembali</a>

    <form action="{{ route('pemilik_rumah.store') }}" method="POST">
        @csrf

        <div class="form-group my-3">
            <label for="nama_lengkap">Nama Lengkap:</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" required>
        </div>

        <div class="form-group my-3">
            <label for="rumah_id">Perumahan:</label>
            <select name="rumah_id" id="rumah_id" class="form-control" required>
                @foreach($perumahanList as $perumahanId => $perumahanName)
                    <option value="{{ $perumahanId }}">{{ $perumahanName }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-warning">Create Pemilik Rumah</button>
    </form>
@endsection
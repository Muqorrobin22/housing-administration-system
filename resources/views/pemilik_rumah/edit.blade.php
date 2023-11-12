@extends('layouts.app')

@section('content')
    <h2>Edit Pemilik Rumah</h2>
    <a href="{{route("pemilik_rumah.index")}}" class="btn btn-primary my-5">Kembali</a>
    <form action="{{ route('pemilik_rumah.update', $pemilikRumah->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-4">
            <label for="nama_lengkap">Nama Lengkap:</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="{{ $pemilikRumah->nama_lengkap }}" required>
        </div>

        <div class="form-group mb-4">
            <label for="rumah_id" class="form-label">Perumahan:</label>
            <select name="rumah_id" id="rumah_id" class="form-control" required>
                @foreach($perumahanList as $perumahanId => $perumahanName)
                    <option value="{{ $perumahanId }}" @if($perumahanId == $pemilikRumah->rumah_id) selected @endif>{{ $perumahanName }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-warning">Update Pemilik Rumah</button>
    </form>
@endsection
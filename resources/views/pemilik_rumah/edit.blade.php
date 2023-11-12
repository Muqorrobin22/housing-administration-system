@extends('layouts.app')

@section('content')
    <h2>Edit Pemilik Rumah</h2>

    <form action="{{ route('pemilik_rumah.update', $pemilikRumah->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama_lengkap">Nama Lengkap:</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="{{ $pemilikRumah->nama_lengkap }}" required>
        </div>

        <div class="form-group">
            <label for="rumah_id">Perumahan:</label>
            <select name="rumah_id" id="rumah_id" class="form-control" required>
                @foreach($perumahanList as $perumahanId => $perumahanName)
                    <option value="{{ $perumahanId }}" @if($perumahanId == $pemilikRumah->rumah_id) selected @endif>{{ $perumahanName }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Pemilik Rumah</button>
    </form>
@endsection
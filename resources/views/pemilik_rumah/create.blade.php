@extends('layouts.app')

@section('content')
    <h2>Create New Pemilik Rumah</h2>

    <form action="{{ route('pemilik_rumah.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nama_lengkap">Nama Lengkap:</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="rumah_id">Perumahan:</label>
            <select name="rumah_id" id="rumah_id" class="form-control" required>
                @foreach($perumahanList as $perumahanId => $perumahanName)
                    <option value="{{ $perumahanId }}">{{ $perumahanName }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Create Pemilik Rumah</button>
    </form>
@endsection
@extends('layouts.app') 

@section('content')
    <div class="container">
        <h2>Penduduk List</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <p>
            <a href="{{ route('penduduk.create') }}" class="btn btn-success">Create Penduduk</a>
        </p>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Penduduk</th>
                    <th>Keluarga Dari</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($penduduk as $pend)
                    <tr>
                        <td>{{ $pend->id }}</td>
                        <td>{{ $pend->nama_penduduk }}</td>
                        <td>{{ $pend->pemilikRumah->nama_lengkap }}</td>
                        <td>
                            {{-- <a href="{{ route('penduduk.show', $pend->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('penduduk.edit', $pend->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('penduduk.destroy', $pend->id) }}" method="post" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
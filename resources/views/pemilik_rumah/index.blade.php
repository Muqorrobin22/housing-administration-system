@extends('layouts.app')

@section('content')
    <h2>Pemilik Rumah List</h2>

    <a href="{{ route('pemilik_rumah.create') }}" class="btn btn-success mb-2">Create New Pemilik Rumah</a>

    @if(count($pemilikRumah) > 0)
        <table class="table">
            <thead>
                <tr>
                    
                    <th>Nama Lengkap</th>
                    <th>Rumah</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pemilikRumah as $rumah)
                    <tr>
                        
                        <td>{{ $rumah->nama_lengkap }}</td>
                        <td>{{ $rumah->perumahan->nama_rumah }}</td>
                        <td>
                            {{-- <a href="{{ route('pemilik_rumah.show', $rumah->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('pemilik_rumah.edit', $rumah->id) }}" class="btn btn-primary btn-sm">Edit</a> --}}
                            <!-- Add a delete button if needed -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No Pemilik Rumah records found.</p>
    @endif
@endsection
@extends('layouts.app')

@section('content')

    <h2 class="mb-3">Pemilik Rumah List</h2>
    <div class="flex align-items-center mb-5">
        <a href="{{ route('pemilik_rumah.create') }}" class="btn btn-success">Create New Pemilik Rumah</a>
    </div>

    @if(count($pemilikRumah) > 0)
        <table class="table table-striped table-hover">
            <thead class="table-primary">
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
                            <a href="{{ route('pemilik_rumah.edit', $rumah->id) }}" class="btn btn-primary">Edit</a> 
                            <form action="{{ route('pemilik_rumah.destroy', $rumah->id) }}" method="post" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No Pemilik Rumah records found.</p>
    @endif
@endsection
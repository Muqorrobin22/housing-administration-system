@extends('layouts.app')


@section("content")
    <h1 class="text-center my-5">List Perumahan</h1>
    @if(count($perumahan) > 0)
        <table class="table table-striped table-hover">
            <tr class="table-primary">
                <th>Nama Rumah</th>
                <th>Nomor Rumah</th>
                <th>Status</th>
                {{-- <th>Update Terakhir</th> --}}
                <th>Action</th>
            </tr>
            @foreach($perumahan as $rumah)
                <tr>
                    <td>{{$rumah->nama_rumah}}</td>
                    <td> {{$rumah->no_rumah}} </td>
                    <td> {{$rumah->is_occupied ? "Ditempati" : "Kosong"}} </td>
                    {{-- <td> {{$rumah->updated_at->format("Y m d")}} </td> --}}
                    <td> <a href=" {{route("perumahan.show", ["id" => $rumah->id])}} ">Edit</a> </td>
                </tr>
            @endforeach
        </table>
    @else
        <h1 class="text-center my-5">No perumahan records found.</h1>
    @endif
@endsection
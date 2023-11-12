<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perumahan List</title>
</head>
<body>
    <h1>Perumahan List</h1>

    @if(count($perumahan) > 0)
        <table>
            <tr>
                <th>Nama Rumah</th>
                <th>Nomor Rumah</th>
                <th>Status</th>
                <th>Update Terakhir</th>
                <th>Action</th>
            </tr>
            @foreach($perumahan as $rumah)
                <tr>
                    <td>{{$rumah->nama_rumah}}</td>
                    <td> {{$rumah->no_rumah}} </td>
                    <td> {{$rumah->is_occupied ? "Ditempati" : "Kosong"}} </td>
                    <td> {{$rumah->updated_at}} </td>
                    <td> edit </td>
                </tr>
            @endforeach
        </table>
    @else
        <p>No perumahan records found.</p>
    @endif

    <a href="{{ url('/') }}">Back to Home</a>
</body>
</html>
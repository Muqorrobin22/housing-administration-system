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
        <ul>
            @foreach($perumahan as $rumah)
                <li>
                    <a href="">
                        {{ $rumah->nama_rumah }}
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <p>No perumahan records found.</p>
    @endif

    <a href="{{ url('/') }}">Back to Home</a>
</body>
</html>
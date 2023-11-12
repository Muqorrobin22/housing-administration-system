<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Perumahan</title>

    <!-- Add your stylesheets, scripts, or any other meta tags here -->

    <!-- Example: Include Bootstrap CSS -->
    <link rel="stylesheet" href=" {{url("/css/app.css")}} ">
    @vite(['resources/sass/app.scss', "resources/js/app.js", "resources/css/app.css"])
</head>
<body style="font-size: 18px">

    <nav class="navbar navbar-expand-lg bg-primary px-5 py-3" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{url("/")}}">Sistem Administrasi Perumahan</a>
            <div class="navbar-nav">
              <a class="nav-link" aria-current="page" href="{{route("payments.index")}}">Pembayaran</a>
              <a class="nav-link" href="{{route("perumahan.home")}}">Perumahan</a>
              <a class="nav-link" href="{{route("pemilik_rumah.index")}}">Pemilik Rumah</a>
              <a class="nav-link" href="{{route("penduduk.index")}}">Penduduk</a>
              <a class="nav-link" href="{{route("recap.index")}}">Rekap</a>
          </div>
        </div>
      </nav>

    <div class="container mt-4">
        <!-- This is where the content of each page will be inserted -->
        @yield('content')
    </div>

    <!-- Example: Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js" integrity="sha384-eMNBoXFyygXd+WfD+TGGVJq2jUucEgU99zBM41t6z2O4qJzoZ1k3Yx/3pezsT0Dl" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyR5BfImdFHHU=&#x0A;" crossorigin="anonymous"></script>

    <!-- Add your additional scripts or JS files here -->

</body>
</html>
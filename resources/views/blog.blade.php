<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('public/frontend/css/mystyle.css') }}">

    <title>Komputer 101</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">Computer101</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                    <a class="btn btn-primary tombol" href="#">Login</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Take <span>Care</span> of Your<br>Personal<span> Computer</span></h1>
        </div>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Container -->
    <div class="container">
        <!-- Panel -->
        <div class="row justify-content-center">
            <div class="col-10 info-panel">
                <div class="row">
                    <div class="col-lg">
                        <a href="#"><img src="{{ asset('public/frontend/img/employee.png') }}" alt="employee" class="float-left">
                            <h4>News</h4>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </a>
                    </div>
                    <div class="col-lg">
                        <a href="#"><img src="{{ asset('public/frontend/img/hires.png') }}" alt="hires" class="float-left">
                            <h4>Maintenance</h4>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </a>
                    </div>
                    <div class="col-lg">
                        <a href="#"><img src="{{ asset('public/frontend/img/security.png') }}" alt="security" class="float-left">
                            <h4>Troubleshooting</h4>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Panel -->

        <!-- Content -->
        @foreach($data as $post_terbaru)
        <div class="row konten">
            <div class="col-lg">
                <img src="{{ $post_terbaru->gambar }}" alt="image1" class="img-fluid">
            </div>
            <div class="col">
                <h3>{{ $post_terbaru->judul }}</h3>
                <p>{{ $post_terbaru->content }}</p>
                <h6>Kategori : {{ $post_terbaru->category->name }}</h6>
                <h6>{{ $post_terbaru->created_at->diffForHumans() }}</h6>
            </div>
        </div>
        @endforeach
        <!-- Akhir Content -->

        <!-- footer -->
        <div class="row footer">
            <div class="col text-center">
                <p>2020 All Rights Reserved by Computer 101.</p>
            </div>
        </div>
        <!-- akhir footer -->




















        <!-- <div class="row row-cols-1 row-cols-md-3 content"> 
        <div class="col mb-4">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <h6>Date</h6>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <h6>Date</h6>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
              <h6>Date</h6>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <h6>Date</h6>
            </div>
          </div>
        </div>
      </div>
      -->
        <!-- akhir content -->





    </div>
    <!-- Akhir Container -->


























    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>
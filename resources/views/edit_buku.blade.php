<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Data Buku</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">BOOKTOPIA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/buku">Data buku</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- isi -->
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <h5>Edit Data Buku</h5>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf

                    <div class="mb-3 row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Judul Buku</label>
                        <div class="col-sm-10">
                            <input name="judul_buku" type="text" class="form-control" id="inputPassword"
                                value="{{$buku->judul_buku}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Penerbit Buku</label>
                        <div class="col-sm-10">
                            <input name="penerbit_buku" type="text" class="form-control" id="inputPassword"
                                value="{{$buku->penerbit_buku}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Genre Buku</label>
                        <div class="col-sm-10">
                            <input name="genre_buku" type="text" class="form-control" id="inputPassword"
                                value="{{$buku->genre_buku}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Penerbit Buku</label>
                        <div class="col-sm-10">
                            <input name="harga_buku" type="text" class="form-control" id="inputPassword"
                                value="{{$buku->harga_buku}}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
    <!-- footer -->
    <nav class="navbar fixed-bottom navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> &copyAya</a>
        </div>
    </nav>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>

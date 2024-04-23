<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Form Biodata</title>
  <style>
    body {
      background: url("https://wallpapercave.com/wp/wp9189221.jpg");
      background-size: cover;
      color: white;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 mx-auto ">
        <div class="card">
          <div class="card-header bg-black text-white text-center">
            <h2>Form Biodata Mahasiswa</h2>
            <hr>
            <form action="tampil" class="row g-3" method="POST">
              <div class="col-md-6">
                <label for="inputEmail4" class="form-label">NIM :</label>
                <input type="number" class="form-control" id="nim" name="nim" required>
              </div>
              <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Nama :</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
              </div>
              <div class="col-12">
                <label for="inputAddress" class="form-label">Nomor HP</label>
                <input type="number" class="form-control" id="nohp" name="nohp" required>
              </div>
              <div class="col-12">
                <label for="inputAddress2" class="form-label">Email :</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="col-md-6">
                <label for="inputCity" class="form-label">Tanggal Lahir :</label>
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
              </div>
              <div class="col-md-6">
                <label for="inputState" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" required></textarea>
              </div>
              <div class="col-12">
                <input type="submit" value="Kirim" class="btn btn-success">
                <input type="reset" value="Batal" class="btn btn-danger">
              </div>
            </form>
          </div>
        </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
      </script>
</body>

</html>
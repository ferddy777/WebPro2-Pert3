<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Tampilan Biodata</title>
  <style>
    body {
      background: url("https://wallpapercave.com/wp/wp9189221.jpg");
      background-size: cover;
      color: white;
    }

    input {
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
            <h4>Data Mahasiswa</h4>
          </div>
          <div class="card-body text-center md-10">
            <div class="mb-3 row">
              <label for="staticEmail" class="col-sm-3 col-form-label">NIM</label>
              <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext text-black" value=": <?php echo $nim; ?>">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="staticEmail" class="col-sm-3 col-form-label">Nama</label>
              <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext text-black" value=": <?php echo $nama; ?>">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="staticEmail" class="col-sm-3 col-form-label">Email</label>
              <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext text-black" value=": <?php echo $email; ?>">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="staticEmail" class="col-sm-3 col-form-label">Nomor HP</label>
              <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext text-black" value=": <?php echo $nohp; ?>">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="staticEmail" class="col-sm-3 col-form-label">Tanggal Lahir</label>
              <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext text-black"
                  value=": <?php echo $tgl_lahir; ?>">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="staticEmail" class="col-sm-3 col-form-label">Alamat</label>
              <div class="col-sm-9">
                <input type="text" readonly class="form-control-plaintext text-black" value=": <?php echo $alamat; ?>">
              </div>
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
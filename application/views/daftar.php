<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Daftar</title>
</head>

<body>
    <div class="container">
        <form action="<?php echo base_url().'biodata/tambah_action'?>" method="post">
            <h1>
                <center>
                    PENDAFTARAN USER
                </center>
            </h1>
            <div class="form-group">
                <input type="nama" class="form-control" name="nama" aria-describedby="nama" placeholder="Nama">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <input type="nim" class="form-control" name="nim" aria-describedby="nim" placeholder="Nim">
                <input type="prodi" class="form-control" name="prodi" aria-describedby="prodi" placeholder="Prodi">
                <input type="jurusan" class="form-control" name="jurusan" aria-describedby="jurusan" placeholder="jurusan">
                <input type="email" class="form-control" name="email" aria-describedby="email" placeholder="email">
                <input type="number" class="form-control" name="telp" aria-describedby="telp" placeholder="telp">
                <input type="alamat" class="form-control" name="alamat" aria-describedby="alamat" placeholder="alamat">
                <input type="date" class="form-control" name="tglLahir" aria-describedby="tglLahir" placeholder="tglLahir">
                <select class="form-control" name="kelamin">
                    <option>Laki-Laki</option>
                    <option>Perempuan</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
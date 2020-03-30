<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>daftar/register.css">
    <title>Register</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title" align="center">Form Pendaftaran</h5>
                <img align="middle" src="<?php echo base_url(); ?>daftar/img1.png" class="img1">
                <div class="row">
                    <div class="col-xs-12 col-sm-2">
                    </div>
                    <div class="col-xs-12 col-sm-8">
                        <div class="container">
                            <form action="<?php echo base_url().'biodata/tambah_action'?>" method="post">
                                <div class="form-group">
                                    <label for="nama1">Nama</label>
                                    <input type="text" class="form-control" name="nama1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="password1">Password</label>
                                    <input type="password" class="form-control" name="password1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="password2">Konfirmasi Password</label>
                                    <input type="password" class="form-control" name="password2" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="nim">NIM</label>
                                    <input type="number" class="form-control" name="nim" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="fakultas">Fakultas</label>
                                    <select class="form-control" name="fakultas">
                                        <option>Ilmu Komputer</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jurusan">Jurusan</label>
                                    <select onchange="conditionJurusan()" class="form-control" id='jurusan' name="jurusan">
                                        <option value="" hidden disabled selected value></option>
                                        <option value="teknikInformatika">Teknik Informatika</option>
                                        <option value="sistemInformasi">Sistem Informasi</option>
                                    </select>
                                </div>
                                <div class="form-group" id="prodiTeknikInformatika">
                                    <label for="prodi1">Program Studi</label>
                                    <select class="form-control" name="prodi1">
                                        <option value="4" >Teknik Informatika</option>
                                        <option value="5" >Teknik Komputer</option>
                                    </select>
                                </div>
                                <div class="form-group" id="prodiSistemInformasi">
                                    <label for="prodi1">Program Studi</label>
                                    <select class="form-control" name="prodi1">
                                        <option value="1" >Sistem Informasi</option>
                                        <option value="2" >Pendidikan Teknologi Informasi</option>
                                        <option value="3" >Teknologi Informasi</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="telepon">No Telepon</label>
                                    <input type="number" class="form-control" name="telepon" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" name="alamat" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="tgllahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tgllahir" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="jeniskelamiin">Jenis Kelamin</label>
                                    <select class="form-control" name="jeniskelamiin">
                                        <option>Pria</option>
                                        <option>Wanita</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-daftar">Daftar Sekarang</button>
                            </form>
                        </div>
                        <div class="col-xs-12 col-sm-2">

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script>
        function conditionJurusan() {
            var x = document.getElementById("jurusan").value;
            if (x == "teknikInformatika") {
                document.getElementById("prodiTeknikInformatika").style.display = "block";
                document.getElementById("prodiSistemInformasi").style.display = "none";
            } else {
                document.getElementById("prodiSistemInformasi").style.display = "block";
                document.getElementById("prodiTeknikInformatika").style.display = "none";
            }
        }
    </script>
</body>

</html>
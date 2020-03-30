<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="EditProfile.css">
    <title>Edit Profile</title>
</head>
<?php foreach($mahasiswa as $m) { ?>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title" align="center">Form Edit Profile</h5>
                <img align="middle" src="img.png" class="img">
                <p></p>
                <div class="row">
                    <div class="col-xs-12 col-sm-2">

                    </div>
                    <div class="col-xs-12 col-sm-8">
                        <div class="container">
                            <form action='<?php echo base_url().'biodata/edit_action' ?>' method="post">
                                <div class="form-group">
                                    <input  value="<?php echo $m->nim ?>" type="hidden" name="nim" id="EditNim" class="form-control" placeholder="Nim" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input value="<?php echo $m->nama ?>" type="text" name="nama1" id="EditNama" class="form-control" placeholder="Nama" required autofocus>
                                </div>

                                <div class="form-group">
                                    <input value="<?php echo $m->email ?>" type="text" name="email" id="EditEmail" class="form-control" placeholder="Email" required autofocus>
                                </div>
                                <?php
                                    if($m->id_program_studi == 1||2||3){
                                        $jur = '1';
                                    } else {
                                        $jur = '2';
                                    }
                                ?>

                                <div class="form-group">
                                    <label for="jurusan">Jurusan</label>
                                    <select value="<?php echo $jur ?> " class="form-control" name="jurusan" id="jurusan">
                                        <option value = '1'>Teknik Informatika</option>
                                        <option value = '2'>Sistem Informasi</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="prodi">Program Studi</label>
                                    <select value="<?php echo $m->id_program_studi ?> " name="prodi1" class="form-control" id="prodi">
                                        <option value="1">P1</option>
                                        <option value="2">P2</option>
                                        <option value="3">P3</option>
                                        <option value="4">P4</option>
                                        <option value="5">P5</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input value="<?php echo $m->no_telp ?>" type="text" name="telepon" id="EditPhone" class="form-control" placeholder="Telepon" required autofocus>
                                </div>

                                <div class="form-group">
                                    <textarea value="<?php //echo $m->alamat ?>" name="alamat" class="form-control" id="alamat" placeholder="Alamat" required autofocus rows="3"></textarea>
                                </div>
                                
                                <div class="form-group">
                                    <label for="tgllahir">Tanggal Lahir</label>
                                    <input value="<?php echo $m->tanggal_lahir ?>" name="tgllahir" type="date" class="form-control" id="tgllahir" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="jeniskelamin">Jenis Kelamin</label>
                                    <select class="form-control" name="jeniskelamiin" id="jeniskelamin">
                                        <option>Pria</option>
                                        <option>Wanita</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-edit">Save</button>
                            </form>
                        </div>
                        <div class="col-xs-12 col-sm-2">

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php } ?>
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
</body>

</html>
<?php
    include("koneksi.php");
        if (isset($_POST["btn-daftar"])) {
            $nama = $_POST["nama"];
            $kelas = $_POST["kelas"];
            $alamat = $_POST["alamat"];
            $sql = mysqli_query($conn,"INSERT INTO tb_siswa(id,nama,kelas,alamat) VALUES('','$nama','$kelas','$alamat')");
    }
?>
    <html lang="en">
        <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial scale=1.0">
            <title>FORM SISWA</title> 
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
            crossorigin="anonymous">                
             <style>
                .warning {
                color: #FF0000;
                }
                body {
                padding-top: 12%;
                padding-left: 30%;
                background: #70839e;
                }
                </style>
        </head>
        <body>
        <div class="row">
        <div class="col-md-8">
        <div class="card">
        <div class="p-3 mb-2 bg-warning text-dark">
            <center>DATA SISWA BARU </center>
            </div>
            
            <div class="card-body">
            <form method="post" action="simpan.php">
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col form-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" name="nama" id="Nama" class="form-control">
            </div>
                </div> <br>
                <div class="form-group row">
                    <label for="kelas" class="col-sm-2 col form-label">Kelas</label>
                    <div class="col-sm-10">
                    <input type="text" name="kelas" id="kelas" class="form-control">
                </div>
                </div> <br>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                    <input type="text" name="alamat" id="alamat" class="form-control">
                </div>
                </div> <br>
                <div class="form-group row">
                    <div class="col-sm-10">
                    <center><button type="submit" name="submit" class="btn btn-success">Simpan</button>
                    <span><a href="cetak.php" class="btn btn-danger">Reset</a></span></center>
                </div>
                </div>
            </form>
        </div>
        </div>
        </div>
        </div>
    </body>
</html>
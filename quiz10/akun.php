<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM KONTAK PENGGUNA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .warning {
            color: #5db377;
        }
        body {
            padding-top: 7%;
            padding-left: 28%;
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    FORM KONTAK USER
                </div>
                <div class="card-body">
                    <form method="post" action="signup.php">
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" id="name" class="form-control class=" warning">
                            </div>
                        </div> <br>
                        <div class="form-group row">
                            <label for="address" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" name="address" id="address" class="form-control class=" warning">
                            </div>
                            </div>
                        </div> <br>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" name="email" id="email" class="form-control class=" warning">
                            </div>
                        </div> <br>
                        <div class="form-group row">
                            <label for="angkatan" class="col-sm-2 col-form-label">Angkatan</label>
                            <div class="col-sm-9">
                                <input type="text" name="angkatan" id="angkatan" class="form-control class=" warning">
                            </div>
                        </div> <br>
                        <div class="form-group row">
                            <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                            <div class="col-sm-10">
                                <input type="text" name="jurusan" id="jurusan" class="form-control class=" warning">
                            </div>
                        </div> <br>
                        <div class="form-group row">
                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" name="username" id="username" class="form-control class=" warning">
                            </div>
                        </div> <br>
                        <div class="form-group row">
                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="text" name="password" id="password" class="form-control class=" warning">
                            </div>
                        </div> <br>
                        <div class="form-group row">
                        <div class="col-sm-10">
                        <button type="submit" name="submit" class="btn btn-primary">Daftar</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
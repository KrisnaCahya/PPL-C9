<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <title>Document</title>
</head>

<body style="background-color:#DEF7E5;">
    <div class="container my-5 col-xl-5">
    <div class="card container-fluid text-center mx-auto" style="margin-top: 80px;">
        <div class="card-body">
        <div class="row">
                <h1 class="col mx-0 my-5"style="color:#06DA3E;">KRIPSKUY</h1>
            </div>
            </div>
                <form action="proses-daftar.php" method="post">
                    <div class="row mb-3">
                        <label for="username" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="username" name = "username" placeholder="Masukkan Username" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="name" name = "name" placeholder="Masukkan Nama" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nohp" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nohp" name = "nohp" placeholder= "Masukkan No.Telepon" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="email" name = "email" placeholder= "Masukkan Email" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-8">
                        <input type="password" class="form-control" id="password" name = "password" placeholder= "Masukkan Password" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="repassword" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-8">
                        <input type="password" class="form-control" id="repassword" name = "repassword" placeholder= "Konfirmasi Password" required>
                        </div>
                    </div>
                    <div class="text-right">
                        <input class="btn btn-warning mx-auto col-sm-4 mb-5 mt-3" type="submit" name="Daftar" value="Daftar">
                        <p>Sudah punya akun? <a href="index.php">Login</a>.</p>   
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="styling/style.css">
    <title>Document</title>
</head>

<body style="background-color:#DEF7E5;">
    <div class="container my-5 py-5 col-xl-5">
    <div class="card container-fluid text-center mx-auto" style="margin-top: 50px;">
        <div class="card-body">
            <div class="row">
                <h1 class="col mx-0 my-5"style="color:#06DA3E;">KRIPSKUY</h1>
            </div>
            </div>
                <form action="proses-login.php" method="post">
                    <div class="row mb-3">
                        <label for="username" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-8">
                            <input class="form-control" type="text" id="username" name="username" placeholder="Masukkan username" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-8">
                            <input class="form-control" type="password" id="password" name="password" placeholder="Masukkan Password" required>
                        </div>
                    </div>
                    <div class="text-center my-2 mb-5">
                        <input class="btn btn-warning mx-auto col-sm-5 mb-3 mt-3" type="submit" name="Submit" value="Login">
                        <p>Tidak punya akun? <a href="signUp.php">Daftar</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
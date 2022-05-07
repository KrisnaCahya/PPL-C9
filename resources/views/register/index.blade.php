<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body style="background-color:#DEF7E5;">
    <div class="container my-5 col-xl-5">
        <div class="card container-fluid text-center mx-auto" style="margin-top: 50px;">
            <div class="card-body">
                <div class="row">
                    <h1 class="col mx-0 my-5"style="color:#06DA3E;">KRIPSKUY</h1>
                </div>
            </div>
            <form action="/register" method="POST">
                @csrf
                <div class="row mb-3">
                    <label for="username" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name = "username" placeholder="Masukkan Username" value="{{ old('username') }}">
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name = "nama" placeholder="Masukkan Nama" value="{{ old('nama') }}">
                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nohp" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('nohp') is-invalid @enderror" id="nohp" name = "nohp" placeholder= "Masukkan No.Telepon" value="{{ old('nohp') }}">
                        @error('nohp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name = "email" placeholder= "Masukkan Email" value="{{ old('email') }}">
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="alamat" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-8">
                            <input type="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name = "alamat" placeholder= "Masukkan alamat" value="{{ old('alamat') }}">
                            @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name = "password" placeholder= "Masukkan Password">
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="repassword" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control @error('repassword') is-invalid @enderror" id="repassword" name = "repassword" placeholder= "Konfirmasi Password">
                        </div>
                    </div>
                    <div class="text-right">
                        <input class="btn btn-warning mx-auto col-sm-4 mb-3 mt-3" type="submit" name="Daftar" value="Daftar">
                        <p>Sudah punya akun? <a href="login">Login</a>.</p>   
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
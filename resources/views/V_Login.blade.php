<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>

<body style="background-color:#DEF7E5;">
    <div class="container my-5 py-5 col-xl-5">
        <!-- mengecek apakah didalam session terdapat key success -->
        <div class="text-center">
            <!-- mengecek apakah didalam session terdapat key success -->
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                    <!-- mencetak flash message dengan key success -->
                    {{ session('success') }}
                    <button type="button" class="btn-close" onclick="window.location.href = 'V_Login';" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
                    <!-- mencetak flash message dengan key loginError -->
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" onclick="window.location.href = 'V_Login';" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
        <div class="card container-fluid text-center mx-auto" style="margin-top: 40px;">
            <div class="card-body">
            <div class="row">
                <h1 class="col mx-0 mb-5 mt-3 fw-bold"style="color:#06DA3E;">KRIPSKUY</h1>
            </div>
            </div>
                <form action="/V_Login" method="post">
                    <!-- men-generate token agar web terhindar dari intruder -->
                    @csrf
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-8">
                            <input class="form-control @error('email') is-invalid @enderror" type="email" id="email" name="email" placeholder="Masukkan email" value="{{ old('email') }}">
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-8">
                            <input class="form-control @error('password') is-invalid @enderror" type="password" id="password" name="password" placeholder="Masukkan Password">
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="text-center my-2 mb-5">
                        <input class="btn btn-warning mx-auto col-sm-5 mb-3 mt-5" type="submit" name="Submit" value="Login">
                        <p>Tidak punya akun? <a href="/V_Register">Daftar</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
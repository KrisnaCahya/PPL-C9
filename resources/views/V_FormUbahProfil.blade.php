<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>KripSkuy</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  </head>

  <body style="background-color:#DEF7E5;">
    <div class="container my-5 col-xl-5">
        <div class="card container-fluid mx-auto" style="margin-top: 80px;margin-left: 10px;">
            <div class="card-body">
                <div class="row">
                    <img src="https://cdn.discordapp.com/attachments/811787451621441546/961774332479143976/unknown.png" alt="" srcset="" style="width: 80px;height: 55px;" class="mx-auto mt-3 mb-5">
                </div>
            </div>
        <form method="post" action="/profil/update" >
          @csrf
          <div class="row mb-3">
              <label for="name" class="form-label mx-3">Nama</label>
              <div class="col-sm-8">
                  <input type="text" style="width: 550px;" class="form-control mx-3 mb-3 @error('name') is-invalid @enderror" id="nama" name = "nama" placeholder="Masukkan nama" value="{{ $user->nama }}">
                  @error('name')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
              </div>
          </div>
          <div class="row mb-3">
              <label for="email" class="form-label mx-3">Email</label>
              <div class="col-sm-8">
                  <input type="text" style="width: 550px;" class="form-control mx-3 mb-3 @error('email') is-invalid @enderror" id="email" name = "email" placeholder="Masukkan email" value="{{ $user->email }}">
                  @error('email')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
              </div>
          </div>
          <div class="row mb-3">
              <label for="nohp" class="form-label mx-3">No. Telepon</label>
              <div class="col-sm-8">
                  <input type="text" style="width: 550px;" class="form-control mx-3 mb-3 @error('nohp') is-invalid @enderror" id="nohp" name = "nohp" placeholder="Masukkan nohp" value="{{ $user->nohp }}">
                  @error('nohp')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
              </div>
          </div>
          <div class="row mb-3">
              <label for="alamat" class="form-label mx-3">Alamat</label>
              <div class="col-sm-8">
                  <input type="text" style="width: 550px;" class="form-control mx-3 mb-3 @error('alamat') is-invalid @enderror" id="alamat" name = "alamat" placeholder="Masukkan alamat" value="{{ $user->alamat }}">
                  @error('alamat')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                  @enderror
              </div>
          </div>
          <div class="form-group">
              <div class="row">
                  <div class="text-center">
                      <input class="btn btn-danger mx-5 col-sm-3 mb-5 mt-3" type="button" onclick="window.location.href = 'V_Profil';" name="Batal" value="Batal" >
                      <input class="btn btn-success mx-5 col-sm-3 mb-5 mt-3" type="submit" name="Simpan" value="Simpan">  
                      <input type="hidden" name="id" value="{{ $user->id }}">
                    </div>
                </div>
          </div>
        </form>
    </div>
</body>
</html>
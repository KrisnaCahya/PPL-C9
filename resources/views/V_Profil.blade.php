<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>KripSkuy</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  </head>

  <body style="background-color:#DEF7E5;">
    <div class="container my-5 col-xl-5">
        <div class="card container-fluid mx-auto" style="margin-top: 30px;margin-left: 10px;">
        @if(auth()->user()->role == 'pegawai')
          <a href="/V_BerandaPegawai" style="color:black;" aria-hidden="true"><i class="fa fa-long-arrow-left fa-2x mt-3" aria-hidden="true"></i></a>
        @else
          <a href="/V_BerandaMitra" style="color:black;" aria-hidden="true"><i class="fa fa-long-arrow-left fa-2x mt-3" aria-hidden="true"></i></a>
        @endif  
        <div class="card-body">
            <div class="row">
                    <img src="https://cdn.discordapp.com/attachments/811787451621441546/961774332479143976/unknown.png" alt="" srcset="" style="width: 80px;height: 55px;" class="mx-auto mt-3 mb-5">
                </div>
            </div>
        <form method="get" action="/profilMitra" class="mx-auto" >
              <label class="form-label mx-3 text-center">Nama</label>
              <div class="col-sm-8">
                <input type="text" class="form-control mx-3 mb-3" name="nama" style="width: 560px;" value="{{ $data->nama }}"/>
              </div>
          <div class="form-group">
            <label class="form-label mx-3">Email</label>
            <div class="col-sm-8">
              <input type="email" class="form-control mx-3 mb-3" name="email" style="width: 560px;" value="{{ $data->email }}"/>
            </div>
          </div>
          <div class="form-group">
            <label class="form-label mx-3">No.Telepon</label>
            <div class="col-sm-8">
              <input type="number" class="form-control mx-3 mb-3" name="nohp" style="width: 560px;" value="{{ $data->nohp }}"/>
            </div>
          </div>
          <div class="form-group">
            <label class="form-label mx-3">Alamat</label>
            <div class="col-sm-8">
              <input type="text" class="form-control mx-3 mb-3" name="alamat" style="width: 560px;" value="{{ $data->alamat }}"></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="text-center">
              <a class="btn btn-warning mb-5 mt-4" href="/V_FormUbahProfil">Ubah Profil</a> 
            </div>
          </div>
        </form>
      </div>
    </body>
      </html>
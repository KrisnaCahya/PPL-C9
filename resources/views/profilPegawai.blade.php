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
    <div class="container my-5 p-3">
        <!-- <img src="https://cdn.discordapp.com/attachments/811787451621441546/961774332479143976/unknown.png" alt="" srcset="" style="width: 80px;height: 55px;" class="mx-auto mt-3 mb-5"> -->
        <div class="card container-fluid mt-4" style="margin-top: 80px;margin-left: 10px;">
            <div class="card-body">
                <!-- Melakukan perulangan untuk menampilkan seluruh data user pada halaman -->
                @foreach ($data as $pegawai)
                    <div class="row">
                        <div class="container mt-4 mb-4" style="background-color:#DEF7E5;">
                            <div class="row mt-4 mx-4">
                                <p>Nama         : {{ $pegawai-> nama }} </p>
                                <p>Alamat       : {{ $pegawai-> alamat }}</p>
                                <p>No. Telepon  : {{ $pegawai-> nohp }}</p>
                                <p>Email        : {{ $pegawai-> email }}</p>
                                <form action="/profilPegawai/hapus" method="post">
                                    @csrf
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-danger mb-3" style="width: 150px;" onClick="confirm('Apakah yakin ingin menghapus data?')">Hapus Data</button>
                                        <input type="hidden" name="id" value="{{ $pegawai-> id }}">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
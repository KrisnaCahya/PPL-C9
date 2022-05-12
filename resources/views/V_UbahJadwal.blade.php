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
    <div class="container my-5 col-xl-4">
        <div class="card container-fluid text-center mx-auto" style="margin-top: 80px; border-radius: 25px;">
            <div class="card-body">
                <div class="row">
                    <a href="/V_Jadwal" class="fa fa-back"></a>
                    <img src="https://cdn.discordapp.com/attachments/811787365630738502/969106680434536478/boxproduct.png" alt="" srcset="" style="width: 100px;height:75px;" class="mx-auto mt-3 mb-3">
                </div>
            </div>
            <form action="{{ url('/jadwal/update', $data->id) }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $data->id}}">
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name = "nama" placeholder="Masukkan nama" value="{{ $data->nama }}">
                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tugas" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('tugas') is-invalid @enderror" id="tugas" name = "tugas" placeholder="Masukkan tugas" value="{{ $data->tugas }}">
                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tanggal" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name = "tanggal" placeholder= "Masukkan tanggal" value="{{ $data->tanggal }}">
                        @error('tanggal')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                        <label for="jadwal_masuk" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-8">
                            <input type="time" class="form-control @error('jadwal_masuk') is-invalid @enderror" id="jadwal_masuk" name = "jadwal_masuk" placeholder= "Masukkan jadwal masuk" value="{{ $data->jadwal_masuk }}">
                            @error('jadwal_masuk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="jadwal_pulang" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-8">
                            <input type="time" class="form-control @error('jadwal_pulang') is-invalid @enderror" id="jadwal_pulang" name = "jadwal_pulang" placeholder= "Masukkan jadwal_pulang" value="{{ $data->jadwal_pulang }}">
                            @error('jadwal_pulang')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="text-right">
                        <a href="/V_Jadwal" class="btn btn-danger mx-3 col-sm-3 mb-5 mt-3">Batal</a>
                        <input class="btn btn-warning mx-3 col-sm-3 mb-5 mt-3" type="submit" name="Simpan" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
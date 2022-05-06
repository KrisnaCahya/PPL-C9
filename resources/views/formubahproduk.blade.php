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
                    <a href="/produk" class="fa fa-back"></a>
                    <img src="https://cdn.discordapp.com/attachments/811787365630738502/969106680434536478/boxproduct.png" alt="" srcset="" style="width: 100px;height:75px;" class="mx-auto mt-3 mb-3">
                </div>
            </div>
            <form action="{{ url('/produk/update', $data->id) }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $data->id}}">
                <div class="row mb-3">
                    <label for="nama_produk" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" name = "nama_produk" placeholder="Masukkan nama produk" value="{{ $data->nama_produk }}">
                        @error('nama_produk')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="satuan" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control @error('satuan') is-invalid @enderror" id="satuan" name = "satuan" placeholder="Masukkan Satuan" value="{{ $data->satuan }}">
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
                        <label for="jumlah_produk_masuk" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control @error('jumlah_produk_masuk') is-invalid @enderror" id="jumlah_produk_masuk" name = "jumlah_produk_masuk" placeholder= "Masukkan jumlah produk masuk" value="{{ $data->jumlah_produk_masuk }}">
                            @error('jumlah_produk_masuk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="jumlah_produk_keluar" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control @error('jumlah_produk_keluar') is-invalid @enderror" id="jumlah_produk_keluar" name = "jumlah_produk_keluar" placeholder= "Masukkan jumlah produk keluar" value="{{ $data->jumlah_produk_keluar }}">
                            @error('jumlah_produk_keluar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="text-right">
                        <a href="/produk" class="btn btn-danger mx-3 col-sm-3 mb-5 mt-3">Batal</a>
                        <input class="btn btn-warning mx-3 col-sm-3 mb-5 mt-3" type="submit" name="Simpan" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
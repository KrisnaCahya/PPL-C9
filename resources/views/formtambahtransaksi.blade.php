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
        <div class="card container-fluid text-center mx-auto" style="margin-top: 120px;">
            <div class="card-body">
                <div class="row">
                <img src="https://cdn-icons-png.flaticon.com/512/1751/1751700.png" alt="" srcset="" style="width: 100px;height:75px;" class="mx-auto mt-3 mb-4">
                </div>
            </div>
            <form action="/formtambahtransaksi" method="POST">
                @csrf
                <div class="row mb-3">
                    <label for="tanggal" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name = "tanggal" placeholder= "Masukkan tanggal">
                        @error('tanggal')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama_produk" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" name = "nama_produk" placeholder="Masukkan nama produk">
                        @error('nama_produk')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="jumlah_produk" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control @error('jumlah_produk') is-invalid @enderror" id="jumlah_produk" name = "jumlah_produk" placeholder="Masukkan jumlah produk">
                        @error('jumlah_produk')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                        <label for="harga_satuan" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control @error('harga_satuan') is-invalid @enderror" id="harga_satuan" name = "harga_satuan" placeholder= "Masukkan jumlah harga satuan">
                            @error('harga_satuan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="text-right">
                        <input class="btn btn-danger mx-3 col-sm-3 mb-5 mt-3" type="button" onclick="window.location.href = 'transaksi';" name="Batal" value="Batal" >
                        <input class="btn btn-warning mx-3 col-sm-3 mb-5 mt-3" type="submit" name="Simpan" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
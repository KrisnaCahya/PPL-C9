<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

  <body style="background-color:#DEF7E5;">
    <div class="container my-5 p-3">
        <!-- <img src="https://cdn.discordapp.com/attachments/811787451621441546/961774332479143976/unknown.png" alt="" srcset="" style="width: 80px;height: 55px;" class="mx-auto mt-3 mb-5"> -->
        <div class="card container-fluid mt-4" style="margin-top: 80px;margin-left: 10px;">
            <div class="card-body">
                <div class="text-center">
                    @if(session()->has('successAddProduct'))
                    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert" style="width:1225px">
                        <!-- mencetak flash message dengan key success -->
                        {{ session('successAddProduct') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    @if(session()->has('updateSuccess'))
                    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert" style="width:1225px">
                        <!-- mencetak flash message dengan key success -->
                        {{ session('updateSuccess') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                </div>
                    <div class="row">
                            <div class="row mt-4 mx-auto">
                            @if(auth()->user()->role == 'pegawai')
                            <a href="/berandaPegawai" style="color:black;" aria-hidden="true"><i class="fa fa-long-arrow-left fa-2x" aria-hidden="true"></i></a>
                            @else
                                <a href="/berandaMitra" style="color:black;" aria-hidden="true"><i class="fa fa-long-arrow-left fa-2x" aria-hidden="true"></i></a>
                            @endif
                            <img src="img/boxproduct.png" alt="" srcset="" style="width: 100px;height:75px;" class="mx-auto mt-3 mb-3">
                            <h1 class="text-center">Data Produk KripSkuy</h1>
                            <table class="table table-bordered border-dark mt-5">
                                <thead style="background-color:#FFC13C;">
                                    <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Nama Produk</th>
                                    <th scope="col">Satuan</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Jumlah Produk Masuk</th>
                                    <th scope="col">Jumlah Produk Keluar</th>
                                    <th scope="col">Jumlah Sisa Produk</th>
                                    <th scope="col" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                @foreach ($product as $produk)
                                <tbody>
                                    <tr>
                                    <td>{{ $produk->id}}</td>
                                    <td>{{ $produk->nama_produk}}</td>
                                    <td>{{ $produk->satuan}}</td>
                                    <td>{{ $produk->tanggal}}</td>
                                    <td>{{ $produk->jumlah_produk_masuk}}</td>
                                    <td>{{ $produk->jumlah_produk_keluar}}</td>
                                    <td>{{ $produk->jumlah_sisa_produk}}</td>
                                    <td class="text-center">
                                        <!-- <input type="hidden" name="id" value="{{ $produk->id }}"> -->
                                        <a href="#" class="btn btn-danger fa fa-trash delete" data-id="{{ $produk->id }}" data-name="{{ $produk->nama_produk }}"></a>
                                        <a href="/formubahproduk/{{ $produk->id }}" class="btn btn-warning fa fa-edit"></a>
                                    </td>
                                    </tr>
                                </tbody>
                                @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-warning mb-5" style="margin-top:50px;" href="/formtambahproduk">Tambah Data Produk</a> 
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
<script>
    $('.delete').click(function(){
        var produk_id = $(this).attr('data-id');
        var nama_produk = $(this).attr('data-name');
        const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
        confirmButton: 'btn btn-warning mx-3',
        cancelButton: 'btn btn-danger mx-3'
    },
        buttonsStyling: false
})

    swalWithBootstrapButtons.fire({
        text: "Yakin ingin menghapus data produk ID "+produk_id+" dengan nama "+nama_produk+"?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#FFC107',
        cancelButtonColor: '#FF5252',
        confirmButtonText: 'Iya',
        cancelButtonText: 'Tidak',
        reverseButtons: true
    }).then((result) => {
    if (result.isConfirmed) {
        window.location = "/produk/delete/"+produk_id+""
        swalWithBootstrapButtons.fire(
            'Terhapus!',
            'Data produk berhasil dihapus',
            'success'
    )
  }
})
    })
    
</script>
</html>
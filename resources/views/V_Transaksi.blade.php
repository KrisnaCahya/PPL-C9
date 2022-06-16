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
        <div class="card container-fluid mt-4" style="margin-top: 80px;margin-left: 10px;">
            <div class="card-body">
                    <div class="row">
                            <div class="row mt-4 mx-auto">
                            @if(auth()->user()->role == 'pegawai')
                            <a href="/V_BerandaPegawai" style="color:black;" aria-hidden="true"><i class="fa fa-long-arrow-left fa-2x" aria-hidden="true"></i></a>
                            @else
                                <a href="/V_BerandaMitra" style="color:black;" aria-hidden="true"><i class="fa fa-long-arrow-left fa-2x" aria-hidden="true"></i></a>
                            @endif
                            <img src="https://cdn-icons-png.flaticon.com/512/1751/1751700.png" alt="" srcset="" style="width: 100px;height:75px;" class="mx-auto mt-3 mb-3">
                            <h1 class="text-center">Data Transaksi KripSkuy</h1>
                            <table class="table table-bordered border-dark mt-5">
                                <thead style="background-color:#FFC13C;">
                                    <tr>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Nama Produk</th>
                                    <th scope="col">Jumlah Produk</th>
                                    <th scope="col">Pemasukan</th>
                                    <th scope="col">Pengeluaran</th>
                                    <th scope="col" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                @foreach ($transaksi as $itemTransaksi)
                                <tbody>

                                    <tr>
                                    <td>{{ $itemTransaksi->tanggal}}</td>
                                    <td>{{ $itemTransaksi->nama_produk}}</td>
                                    <td>{{ $itemTransaksi->jumlah_produk}}</td>
                                    <td>{{ $itemTransaksi->pemasukan}}</td>
                                    <td>{{ $itemTransaksi->pengeluaran}}</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-danger fa fa-trash delete mx-1" data-id="{{ $itemTransaksi->id }}" data-name="{{ $itemTransaksi->nama_produk }}"></a>
                                        <a href="/formubahtransaksi/{{ $itemTransaksi->id }}" class="btn btn-warning fa fa-edit mx-1"></a>
                                    </td>
                                    </tr>
                                </tbody>
                                @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-warning mb-5" style="margin-top:50px;" href="/V_FormTambahTransaksi">Tambah</a> 
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
<script>
    $('.delete').click(function(){
        var transaksi_id = $(this).attr('data-id');
        var nama_produk = $(this).attr('data-name');
        const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
        confirmButton: 'btn btn-warning mx-3',
        cancelButton: 'btn btn-danger mx-3'
    },
        buttonsStyling: false
})

    swalWithBootstrapButtons.fire({
        title: "Peringatan!",
        text: "Yakin ingin menghapus data transaksi ID "+transaksi_id+" dengan nama "+nama_produk+"?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#FFC107',
        cancelButtonColor: '#FF5252',
        confirmButtonText: 'Iya',
        cancelButtonText: 'Tidak',
        reverseButtons: true
    }).then((result) => {
    if (result.isConfirmed) {
        window.location = "/transaksi/delete/"+transaksi_id+""
        swalWithBootstrapButtons.fire(
            'Terhapus!',
            'Data produk berhasil dihapus',
            'success',
    )
  }
})
    })
    
</script>
</html>
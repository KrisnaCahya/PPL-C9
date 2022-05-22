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
                    <div class="row">
                            <div class="row mt-4 mx-auto">
                            @if(auth()->user()->role == 'pegawai')
                            <a href="/V_BerandaPegawai" style="color:black;" aria-hidden="true"><i class="fa fa-long-arrow-left fa-2x" aria-hidden="true"></i></a>
                            @else
                                <a href="/V_BerandaMitra" style="color:black;" aria-hidden="true"><i class="fa fa-long-arrow-left fa-2x" aria-hidden="true"></i></a>
                            @endif
                            <img src="https://cdn-icons-png.flaticon.com/512/2693/2693507.png" alt="" srcset="" style="width: 100px;height:75px;" class="mx-auto mt-3 mb-3">
                            <h1 class="text-center">Data Jadwal Pegawai</h1>
                            <table class="table table-bordered border-dark mt-5">
                                <thead style="background-color:#FFC13C;">
                                    <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Tugas</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Jam Masuk</th>
                                    <th scope="col">Jam Pulang</th>
                                    @if(auth()->user()->role == 'owner')
                                    <th scope="col" class="text-center">Aksi</th>
                                    @endif
                                    </tr>
                                </thead>
                                @foreach ($data as $rowDataJadwal)
                                <tbody>
                                    <?php
                                     $no=1;
                                    ?>
                                    <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $rowDataJadwal->nama }}</td>
                                    <td>{{ $rowDataJadwal->tugas }}</td>
                                    <td>{{ $rowDataJadwal->tanggal }}</td>
                                    <td>{{ $rowDataJadwal->jam_masuk }}</td>
                                    <td>{{ $rowDataJadwal->jam_pulang }}</td>
                                    @if(auth()->user()->role == 'owner')
                                    <td class="text-center">
                                        <!-- <input type="hidden" name="id" value="{{ $rowDataJadwal->id }}"> -->
                                        <a href="#" class="btn btn-danger fa fa-trash delete" data-id="{{ $rowDataJadwal->id }}" data-name="{{ $rowDataJadwal->nama }}"></a>
                                        <a href="/UbahJadwal/{{ $rowDataJadwal->id }}" class="btn btn-warning fa fa-edit"></a>
                                    </td>
                                    @endif
                                    </tr>
                                </tbody>
                                @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                    @if(auth()->user()->role == 'owner')
                    <a class="btn btn-warning mb-5" style="margin-top:50px;" href="/V_TambahJadwal">Tambah</a>
                    @endif
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
<script>
    $('.delete').click(function(){
        var jadwal_id = $(this).attr('data-id');
        var nama = $(this).attr('data-name');
        const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
        confirmButton: 'btn btn-warning mx-3',
        cancelButton: 'btn btn-danger mx-3'
    },
        buttonsStyling: false
})

    swalWithBootstrapButtons.fire({
        title: "Peringatan!",
        text: "Yakin ingin menghapus data jadwal ID "+jadwal_id+" dengan nama "+nama+"?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#FFC107',
        cancelButtonColor: '#FF5252',
        confirmButtonText: 'Iya',
        cancelButtonText: 'Tidak',
        reverseButtons: true
    }).then((result) => {
    if (result.isConfirmed) {
        window.location = "/jadwal/delete/"+jadwal_id+""
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
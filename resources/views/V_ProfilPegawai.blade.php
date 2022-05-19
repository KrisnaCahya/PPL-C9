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
    <div class="container my-5 p-3">
        <!-- <img src="https://cdn.discordapp.com/attachments/811787451621441546/961774332479143976/unknown.png" alt="" srcset="" style="width: 80px;height: 55px;" class="mx-auto mt-3 mb-5"> -->
        <div class="card container-fluid mt-4" style="margin-top: 80px;margin-left: 10px;">
            <a href="/V_BerandaMitra" style="color:black;" aria-hidden="true"><i class="fa fa-long-arrow-left fa-2x mt-4" aria-hidden="true"></i></a>
            <div class="card-body">
                <div class="text-center">
                    <img src="https://cdn.discordapp.com/attachments/811787451621441546/961774487697760316/unknown.png" alt="" srcset="" style="width: 75px;height:75px;" class="mx-auto mt-3 mb-3">
                    <h2 class="text-center">Data Pegawai KripSkuy</h2>
                </div>
                <!-- Melakukan perulangan untuk menampilkan seluruh data user pada halaman -->
                @foreach ($data as $pegawai)
                    <div class="row">
                        <div class="container mt-4 mb-4" style="background-color:#DEF7E5;">
                            <div class="row mt-4 mx-4">
                                <p>Nama         : {{ $pegawai-> nama }} </p>
                                <p>Alamat       : {{ $pegawai-> alamat }}</p>
                                <p>No. Telepon  : {{ $pegawai-> nohp }}</p>
                                <p>Email        : {{ $pegawai-> email }}</p>
                                @csrf
                                <div class="text-end">
                                <a href="#" class="btn btn-danger fa fa-trash delete px-5 py-2 my-3" data-id="{{ $pegawai->id }}" data-name="{{ $pegawai->nama }}"></a>
                                    <input type="hidden" name="id" value="{{ $pegawai-> id }}">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
<script>
    $('.delete').click(function(){
        var pegawai_id = $(this).attr('data-id');
        var nama_pegawai = $(this).attr('data-name');
        const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
        confirmButton: 'btn btn-warning mx-3',
        cancelButton: 'btn btn-danger mx-3'
    },
        buttonsStyling: false
})

    swalWithBootstrapButtons.fire({
        title: "Peringatan!",
        text: "Yakin ingin menghapus data pegawai ID "+pegawai_id+" dengan nama "+nama_pegawai+"?",
        icon: 'warning',
        showCancelButton: true,
        padding: '3em',
        confirmButtonColor: '#FFC107',
        cancelButtonColor: '#FF5252',
        confirmButtonText: 'Iya',
        cancelButtonText: 'Tidak',
        reverseButtons: true
    }).then((result) => {
    if (result.isConfirmed) {
        window.location = "/pegawai/delete/"+pegawai_id+""
        swalWithBootstrapButtons.fire(
            'Terhapus!',
            'Data pegawai berhasil dihapus',
            'success'
    )
  }
})
    })
    
</script>
</html>
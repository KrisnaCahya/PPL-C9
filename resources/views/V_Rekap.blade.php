<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/2.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
    <title>Document</title>
</head>

  <body style="background-color:#DEF7E5;">
    <div class="container my-5 p-3">
        <!-- <img src="https://cdn.discordapp.com/attachments/811787451621441546/961774332479143976/unknown.png" alt="" srcset="" style="width: 80px;height: 55px;" class="mx-auto mt-3 mb-5"> -->
        <div class="card container-fluid mt-4" style="margin-top: 80px;margin-left: 10px;">
            <div class="card-body">
                    <div class="row">
                    <div class="row">
                        <!-- <img src="https://cdn-icons-png.flaticon.com/512/1751/1751700.png" alt="" srcset="" style="width: 100px;height:75px;" class="mx-auto mt-3 mb-3"> -->
                    </div>
                    <div class="row mt-4 mx-auto">
                            <a href="/V_Transaksi" class="fa fa-back"></a>
                            @if(auth()->user()->role == 'pegawai')
                            <a href="/V_BerandaPegawai" style="color:black;" aria-hidden="true"><i class="fa fa-long-arrow-left fa-2x" aria-hidden="true"></i></a>
                            @else
                                <a href="/V_BerandaMitra" style="color:black;" aria-hidden="true"><i class="fa fa-long-arrow-left fa-2x" aria-hidden="true"></i></a>
                            @endif
                            <img src="https://cdn-icons-png.flaticon.com/512/557/557933.png" alt="" srcset="" style="width: 100px;height:75px;" class="mx-auto mt-3 mb-3">
                            <h1 class="text-center mb-5">Rekapitulasi Keuangan KripsKuy</h1>
                            <input class="datepicker" id="datepicker" onkeydown="return false">
                            <table class="table table-bordered border-dark mt-5">
                            <thead style="background-color:#FFC13C;" class="text-center">
                            <tr>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Pemasukan</th>
                                <th scope="col">Pengeluaran</th>
                                <th scope="col">Keuntungan</th>
                            </tr>
                            </thead>
                            @foreach ($data as $itemRekap)
                            <tbody>
                                <?php
                                   
                                    $no=1;
                                ?>
                                    <tr>
                                    <td>{{ $itemRekap->tanggal }}</td>
                                    <td>{{ $itemRekap->pemasukan }}</td>
                                    <td>{{ $itemRekap->pengeluaran }}</td>
                                    <td>{{ $itemRekap->pemasukan - $itemRekap->pengeluaran }}</td>
                                    </tr>   
                                </tbody>
                                @endforeach
                                <tr>
                                <td class="fw-bold">Total</td>
                                <td>{{ $data->sum('pemasukan') }}</td>
                                <td>{{ $data->sum('pengeluaran') }}</td>
                                <td>{{ $data->sum('pemasukan') - $data->sum('pengeluaran') }}</td>
                                </tr>   
                                </table>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</body>
    <script type="text/javascript">
        var dp=$("#datepicker").datepicker({
            setDates: new Date(),
            autoclose: true,
            format: "MM-yyyy",
            startView: "months", 
            minViewMode: "months"});
        $('.datepicker').datepicker('setDate', new Date(window.location.pathname.split('/')[2], window.location.pathname.split('/')[3]-1, 1));
            dp.on('changeMonth', function(e){
            console.log(e.date);
            window.location = `/V_Rekap/${e.date.getFullYear()}/${e.date.getMonth()+1}`;
        });
    </script>    

</html>
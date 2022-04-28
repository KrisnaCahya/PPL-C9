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
    <div class="container my-5 p-5" style="background-color:#89C791;">
        <div class="row justify-content-start my-5">
            <div class="col-4">
                <div class="card container-fluid" style="width: 15rem;background-color:#DEF7E5;">
                    <div class="card-body">
                        <a style="text-decoration:none;color:black;" href="/profil">
                            <div class="col">
                                <div class="row">
                                    <img src="https://cdn.discordapp.com/attachments/811787451621441546/961774332479143976/unknown.png" alt="" srcset="" style="width: 100px;height:75px;" class="mx-auto mt-3">
                                </div>
                                <div class="row">
                                    <p class="text-center mt-4">Profil Pegawai</p>
                                </div>
                            </div>
                        </a> 
                    </div>     
                </div>
            </div>
            <div class="col-4">
                <div class="card container-fluid" style="width: 15rem;background-color:#DEF7E5;">
                    <div class="card-body">
                        <a style="text-decoration:none;color:black;" href="/transaksi">
                            <div class="col">
                                <div class="row">
                                    <img src="https://cdn-icons-png.flaticon.com/512/1751/1751700.png" alt="" srcset="" style="width: 100px;height:75px;" class="mx-auto mt-3">
                                </div>
                                <div class="row">
                                    <p class="text-center mt-4">Transaksi</p>
                                </div>
                            </div>
                        </a> 
                    </div>     
                </div>
            </div>
            
            <div class="col-4">
                <div class="card container-fluid" style="width: 15rem;background-color:#DEF7E5;">
                    <div class="card-body">
                        <div class="col">
                            <div class="row">
                                <img src="https://cdn-icons-png.flaticon.com/512/2693/2693507.png" alt="" srcset="" style="width: 100px;height:75px;" class="mx-auto mt-3">
                            </div>
                            <div class="row">
                                <p class="text-center mt-4">Jadwal</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            
            <div class="row justify-content-start mt-5 mb-5">
                <div class="col-4">
                    <div class="card container-fluid" style="width: 15rem;background-color:#DEF7E5;">
                        <div class="card-body">
                        <a style="text-decoration:none;color:black;" href="/produk">
                            <div class="col">
                                <div class="row">
                                    <img src="https://cdn-icons-png.flaticon.com/512/1524/1524539.png" alt="" srcset="" style="width: 100px;height:75px;" class="mx-auto mt-3">
                                </div>
                                <div class="row">
                                    <p class="text-center mt-4">Produk</p>
                                </div>
                            </div>
                        </a>
                        </div>  
                    </div>
                </div>
                <div class="col-4">
                    <div class="card container-fluid" style="width: 15rem;background-color:#DEF7E5;">
                        <div class="card-body">
                            <a style="text-decoration:none;color:black;" href="/login">
                            <form action="/logout" method="POST">
                                <div class="col">
                                    <div class="row">
                                        <img src="https://cdn.discordapp.com/attachments/811787365630738502/969047737083502632/unknown.png" alt="" srcset="" style="width: 100px;height:75px;" class="mx-auto mt-3">
                                    </div>
                                    <div class="row">
                                        <div class="text-center">
                                            @csrf
                                            <button class="btn mt-4">Logout</button>
                                        </div>
                                    </div>  
                                </div>
                            </form>
                            <!-- </a> -->
                        </div>  
                    </div>
                </div>
            </div>
</body>
</html>
<?php
    include 'config.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    
    $sql = mysqli_query($connection, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
    $result = mysqli_num_rows($sql);
    // echo $result
    if ($result) {
        echo "Anda Berhasil Masuk!";
        echo "Klik <a> href='index.php'>disini</a> untuk melanjutkan";
        }
     else {
        echo "EMAIL DAN PASSWORD ANDA SALAH..ISI DENGAN BENAR";
    }
    
?>
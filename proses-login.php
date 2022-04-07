<?php
    include 'config.php';

    extract($_GET);
    // $email = $_POST['email'];
    // $password = $_POST['password'];
    if(isset($_GET['username'], $_GET['password'])){
        echo ($username + $password);
    }

    if (!empty($email) && !empty($password)) {
        $sql = mysqli_query($connection, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
        $result = mysqli_num_rows($sql);
        if ($result) {
            echo "Anda Berhasil Masuk!";
            echo "Klik <a> href='index.php'>disini</a> untuk melanjutkan";
            }
        } else {
            echo "EMAIL DAN PASSWORD ANDA SALAH..ISI DENGAN BENAR";
    }
    
?>
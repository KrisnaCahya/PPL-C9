<?php
//menyertakan file program koneksi.php pada register
require('config.php');
//inisialisasi session
session_start();
 
$error = '';
$validate = '';
 
//mengecek apakah sesssion username tersedia atau tidak jika tersedia maka akan diredirect ke halaman index
if( isset($_SESSION['username']) ) header('Location: login.php');
 
//mengecek apakah form disubmit atau tidak
if( isset($_POST['Submit']) ){
         
        // menghilangkan backshlases
        $username = stripslashes($_POST['username']);
        //cara sederhana mengamankan dari sql injection
        $username = mysqli_real_escape_string($connection, $username);
         // menghilangkan backshlases
        $password = stripslashes($_POST['password']);
         //cara sederhana mengamankan dari sql injection
        $password = mysqli_real_escape_string($connection, $password);
        
        //cek apakah nilai yang diinputkan pada form ada yang kosong atau tidak
        if(!empty(trim($username)) && !empty(trim($password))){
 
            //select data berdasarkan username dari database
            $query      = "SELECT * FROM user WHERE username = '$username'";
            $result     = mysqli_query($connection, $query);
            $rows       = mysqli_num_rows($result);
 
            if ($rows != 0) {
                $hash   = mysqli_fetch_assoc($result)['password'];
                if(password_verify($password, $hash)){
                    $_SESSION['username'] = $username;
                
                    header('Location: beranda.php');
                }
                             
            //jika gagal maka akan menampilkan pesan error
            } else {
                $error =  'Register User Gagal !!';
            }
             
        }else {
            $error =  'Data tidak boleh kosong !!';
        }
    } 
 
?>
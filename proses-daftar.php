<?php
//menyertakan file program koneksi.php pada register
include 'config.php';
//inisialisasi session
session_start();
 
$error = '';
$validate = '';
//mengecek apakah form registrasi di submit atau tidak
if( isset($_POST['Daftar']) ){
        // menghilangkan backshlases
        $username = stripslashes($_POST['username']);
        //cara sederhana mengamankan dari sql injection
        $username = mysqli_real_escape_string($connection, $username);
        $name     = stripslashes($_POST['name']);
        $name     = mysqli_real_escape_string($connection, $name);
        $nohp     = stripslashes($_POST['nohp']);
        $nohp     = mysqli_real_escape_string($connection, $nohp);
        $email    = stripslashes($_POST['email']);
        $email    = mysqli_real_escape_string($connection, $email);
        $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($connection, $password);
        $repass   = stripslashes($_POST['repassword']);
        $repass   = mysqli_real_escape_string($connection, $repass);
        //cek apakah nilai yang diinputkan pada form ada yang kosong atau tidak
        if(!empty(trim($name)) && !empty(trim($username)) && !empty(trim($nohp)) && !empty(trim($email))){
            //mengecek apakah password yang diinputkan sama dengan re-password yang diinputkan kembali
            if($password == $repass){
                //memanggil method cek_nama untuk mengecek apakah user sudah terdaftar atau belum
                if( cek_nama($name,$connection) == 0 ){
                    //hashing password sebelum disimpan didatabase
                    $pass  = password_hash($password, PASSWORD_DEFAULT);
                    //insert data ke database
                    $query = "INSERT INTO user (username, name, nohp, email, password ) VALUES ('$username','$name', '$nohp', '$email', '$pass')";
                    $result   = mysqli_query($connection, $query);
                    //jika insert data berhasil maka akan diredirect ke halaman index.php serta menyimpan data username ke session
                    if ($result) {
                        $_SESSION['username'] = $username;
                        
                        header('Location: beranda.php');
                     
                    //jika gagal maka akan menampilkan pesan error
                    } else {
                        $error =  'Register User Gagal !!';
                    }
                }else{
                        $error =  'Username sudah terdaftar !!';
                }
            }else{
                $validate = 'Password tidak sama !!';
            }
             
        }else {
            $error =  'Data tidak boleh kosong !!';
        }
    } 
    //fungsi untuk mengecek username apakah sudah terdaftar atau belum
    function cek_nama($username,$connection){
        $nama = mysqli_real_escape_string($connection, $username);
        $query = "SELECT * FROM user WHERE username = '$nama'";
        if( $result = mysqli_query($connection, $query) ) return mysqli_num_rows($result);
    }
?>
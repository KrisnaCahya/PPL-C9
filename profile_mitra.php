<!DOCTYPE html>
<html lang="en-US">
  <head>
  <title>KripSkuy</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
  <link rel="stylesheet" href="styling/style.css">
  </head>
  <?php
  include 'config.php';
  session_start();
$username=$_SESSION['username'];
$query=mysqli_query($connection,"SELECT * FROM user where username='$username'");
$row=mysqli_fetch_array($query);
  ?>
  <body style="background-color:#DEF7E5;">
    <div class="container my-5 col-xl-5">
    <div class="card container-fluid text-center mx-auto" style="margin-top: 80px;">
        <div class="card-body">
          <div class="row">
            <img src="https://cdn.discordapp.com/attachments/811787451621441546/961774332479143976/unknown.png" alt="" srcset="" style="width: 50px;height:25px;" class="mx-auto mt-3">
          </div>
        </div>
        <form method="post" action="#" >
          <div class="form-group">
            <label>name</label>
            <input type="text" class="form-control" name="name" style="width:20em;" placeholder="Enter your name" value="<?php echo $row['name']; ?>" required />
          </div>
          <div class="form-group">
            <label>email</label>
            <input type="email" class="form-control" name="email" style="width:20em;" placeholder="Enter your email" required value="<?php echo $row['email']; ?>" />
          </div>
          <div class="form-group">
            <label>nohp</label>
            <input type="number" class="form-control" name="nohp" style="width:20em;" placeholder="Enter your Number" value="<?php echo $row['nohp']; ?>">
          </div>
          <div class="form-group">
            <label>alamat</label>
            <input type="text" class="form-control" name="alamat" style="width:20em;" required placeholder="Enter your alamat" value="<?php echo $row['alamat']; ?>"></textarea>
          </div>
          <div class="form-group">
            <!-- <input type="submit" name="submit" class="btn btn-primary" style="width:20em; margin:0;"><br><br> -->
            <input class="btn btn-warning mx-auto col-sm-4 mb-5 mt-3" type="submit" name="submit" value="Ubah Profil">
            <!-- <center>
             <a href="index.php">Log out</a>
           </center> -->
          </div>
        </form>
      </div>
    </body>
      </html>
      <?php
      if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email    = stripslashes($_POST['email']);
        $email    = mysqli_real_escape_string($connection, $email);
        $nohp = $_POST['nohp'];
        $alamat = $_POST['alamat'];
      $query = "UPDATE user SET name = '$name',
                      email = '$email', nohp = $nohp, alamat = '$alamat'
                      WHERE username = '$username'";
                    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "beranda.php";
        </script>
        <?php
             }              
?>
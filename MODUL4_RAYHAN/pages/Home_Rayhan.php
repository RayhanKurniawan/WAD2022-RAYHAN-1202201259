<?php
  include '../config/connector.php';
  $querry=mysqli_query($connect, "SELECT * FROM showroom_rayhan_table");
  $cek=mysqli_num_rows($querry);
  if ($cek==0){
    $masuk="Add_Rayhan.php";
  }
  else{
    $masuk="ListCar_Rayhan.php";
  }
session_start();
if(!isset($_SESSION['email']))
{
  header("location:Login_Rayhan.php");
}

$email = $_SESSION['email'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-primary">
      <div class="d-flex justify-content-left container-fluid">
        <ul class="navbar-nav" style="padding-left:100px;color:white">
          <li class="nav-item"><a class= "nav-link" href="Home_Rayhan.php">Home</a>
          <li class="nav-item"><a class= "nav-link" href="<?= $masuk ?>">MyCar</a>
        </ul> 
      </div>
      <a type="button" class="btn btn-sm btn-light" style="margin-right:30px;" href="Add_Rayhan.php">AddCar</a>
      <div class="dropdown">
        <?php
        $query = mysqli_query($connect, "SELECT * FROM user_rayhan WHERE email = '$email'");
        if($query){
          while($select = mysqli_fetch_assoc($query)){ ?>
        <a class="btn btn-light btn-sm dropdown-toggle " role="button" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin-right:50px;">
          <?= $select['nama'] ?>
        </a>
      <?php }
    }
        ?>
        <ul class="dropdown-menu" style="margin-right:50px;">
          <li><a class="dropdown-item" href="Profile_Rayhan.php">Profile</a></li>
          <li><a class="dropdown-item" href="../config/logout.php">Logout</a></li>
        </ul>
      </div>
    </nav>
    <div class="row mx-auto w-75 p-3 mt-2">
      <div class="col-6 text-left" style="margin-top: 150px">
        <h1 style="font-size:330%; font-family: Arial; font-weight: 600" alt="center">Selamat Datang Di <br>
        Show Room Rayhan </h1>
        <p style="font-size:90%" style="color:DDDDDD;">Showroom Rayhan merupaan layanan rental mobil terkenal se-Indonesia. Showroom Rayhan memiliki banyak jenis pilihan mobil dengan harga sewa yang terjangkau.</p>
        <a class="btn btn-primary" href="<?= $masuk ?>" role="button" style= "width:100px; height:45px">MyCar</a>
        <div class="mb-3">
          <div class="d-flex left">
          <img src="../asset/images/logo-ead.png" alt="" style="width:100px;height:30px;float:left;margin-top:20px"/> <p style= "padding-left: 20px;margin-top:20px" >Rayhan_1202201259</p>       
          </div>
        </div>
      </div>
      <div class="col-6 text-center">
        <img src="https://cdn1-production-images-kly.akamaized.net/oAPWmK2tdbseKQKZk0DfS9GnYkU=/1200x900/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3714042/original/058782300_1639548727-0000463948.jpg" style="width:400px;margin-top: 150px" alt="">
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
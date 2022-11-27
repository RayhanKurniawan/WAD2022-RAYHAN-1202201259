<?php
include '../config/connector.php';
session_start();
if(!isset($_SESSION['email'])){
  header("location:Login_Rayhan.php");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link rel="stylesheet" href="../asset/style/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-primary">
      <div class="d-flex justify-content-left container-fluid">
        <ul class="navbar-nav" style="padding-left:100px;font-color:white">
          <li class="nav-item"><a class= "nav-link" href="Home_Rayhan.php">Home</a>
          <li class="nav-item"><a class= "nav-link" href="Add_Rayhan.php">MyCar</a>
        </ul> 
      </div>
    </nav>
    <div style="padding:50px; text-align: center;">
        <h1>Profile</h1>
    </div>
    <?php
    $query = mysqli_query($connect, "SELECT * FROM user_rayhan WHERE email = '" . $_SESSION['email'] . "'");
    if($query){
      while($select = mysqli_fetch_assoc($query)) { ?>
    <div class="div">
        <div class="form">
            
        <form action="../config/edit_profile.php?id=<?=$select['id']?>" method="post" enctype="multipart/form-data" style="width: 650px">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama mobil" name="email" value="<?= $select['email']?>" disabled>
            </div>
            
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="nama" value="<?= $select['nama']?>">
            </div>
            
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nomor Handphone</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="merk mobil" name="no_hp" value="<?= $select['no_hp'] ?>">
            </div>
            
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleFormControlInput1" name="password" required>
            </div>
            
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="exampleFormControlTextarea1"  name="konfirmasipassword" required>
            </div>
            
            <div class="mb-3">
                <label for="formFile" class="form-label">Warna Navbar</label>
                <input class="form-control" type="text" id="formFile" name="foto_mobil" value="">
            </div>
            
            <button type="submit" class="btn btn-primary" role="button" style= "width:100px; height:45px;margin-bottom:50px">Selesai</button>    
        </form>
    </div>
</div>
      <?php }
    }
    ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
    </html>
<?php
include ('../config/connector.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary">
      <div class="d-flex justify-content-left container-fluid">
        <ul class="navbar-nav" style="padding-left:100px;font-color:white">
          <li class="nav-item"><a class= "nav-link" href="http://localhost:8080/MODUL3_RAYHAN/pages/Home_Rayhan.php#">Home</a>
          <li class="nav-item"><a class= "nav-link" href="http://localhost:8080/MODUL3_RAYHAN/pages/Add_Rayhan.php#">MyCar</a>
        </ul> 
      </div>
    </nav>
    <div class="row row-cols-4 m-5">

        <?php
        $banyak=0;
    $query = mysqli_query($connect, "SELECT FROM showroom_rayhan_table WHERE id=1");
    
    if($query){
        while($select = mysqli_fetch_assoc($query)){
            $banyak++;
            ?>
    <div class="col">
        
        <div class="card" style="width: 18rem;">
            <img src="../asset/images/<?=$select['foto_mobil']?>" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title"><?=$select['nama_mobil'] ?></h5>
                <p class="card-text"><?=$select['deskripsi'] ?></p>
                <a href="Detail_Rayhan.php?id=<?= $select['id_mobil']?>" class="btn btn-primary">Detail</a>
                <a href="../config/delete.php?id=<?= $select['id_mobil']?>" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
    <?php
    }
}
?>
</div>
<div class="jumlah" style="margin-left: 50px">
    Jumlah Mobil : <?php echo $banyak?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
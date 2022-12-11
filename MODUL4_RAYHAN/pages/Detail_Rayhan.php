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
        <ul class="navbar-nav" style="padding-left:100px;font-color:white">
          <li class="nav-item"><a class= "nav-link" href="Home_Rayhan.php">Home</a>
          <li class="nav-item"><a class= "nav-link" href="Add_Rayhan.php">MyCar</a>
        </ul> 
      </div>
    </nav>
    <div style="padding:50px;">
        <h1>Detail Mobil</h1>
        <p>Melihat Keterangan Mobil</p>
    </div>
    <?php
      $id_mobil = $_GET['id'];
      $query = mysqli_query($connect, "SELECT * FROM showroom_rayhan_table WHERE id_mobil ='$id_mobil'");

    if($query){
        while($select = mysqli_fetch_assoc($query)){
            ?>
    <div class="div" style="display: flex; width: 100%; justify-content: space-around">

        <div class="mobil">
            <img src="../asset/images/<?=$select['foto_mobil']?>" alt="" style="width: 500px">
        </div>
        <div class="form" width="700px">
            
        <form action="../config/edit.php" method="post" enctype="multipart/form-data" style="width: 650px">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Mobil</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama mobil" name="nama_mobil" value="<?= $select['nama_mobil'] ?>" disabled>
            </div>
            
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Pemilik</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama - NIM" name="nama_pemilik" value="<?= $select['pemilik_mobil'] ?>" disabled>
            </div>
            
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Merk</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="merk mobil" name="merk_mobil" value="<?= $select['merk_mobil'] ?>" disabled>
            </div>
            
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tanggal Beli</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="tanggal beli" name="tanggal_beli" value="<?= $select['tanggal_beli'] ?>" disabled>
            </div>
            
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi" disabled><?= $select['deskripsi'] ?></textarea>
            </div>
            
            <div class="mb-3">
                <label for="formFile" class="form-label">Foto</label>
                <input class="form-control" type="file" id="formFile" name="foto_mobil" value="<?= $select['foto_mobil'] ?>" disabled>
            </div>
            <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Lunas" <?php if($select['status_pembayaran']=="Lunas") echo 'checked'?> disabled> 
        <label class="form-check-label" for="flexRadioDefault1">
          Lunas
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="Belum Lunas" <?php if($select['status_pembayaran']=="Belum Lunas") echo 'checked'?> disabled > 
        <label class="form-check-label" for="flexRadioDefault2">
          Belum Lunas
        </label>
      </div>
            
            <a href="Edit_Rayhan.php?id=<?= $select['id_mobil']?>" type="submit" class="btn btn-primary" role="button" style= "width:100px; height:45px;margin-bottom:50px">Edit</a>    
        </form>
    </div>
</div>
<?php
    }
}
?>
    
        
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
    </html>
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
          <li class="nav-item"><a class= "nav-link" href="http://localhost:8080/MODUL3_RAYHAN/pages/Home_Rayhan.php#">Home</a>
          <li class="nav-item"><a class= "nav-link" href="http://localhost:8080/MODUL3_RAYHAN/pages/Add_Rayhan.php#">MyCar</a>
        </ul> 
      </div>
    </nav>
    <div style="padding:50px;">
        <h1>Tambah Mobil</h1>
        <p>Tambah Mobil Baru Anda Ke List Show Room</p>
    </div>
    <form action="../config/insert.php" method="post" enctype="multipart/form-data" style="padding-left:50px;width:60%">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Mobil</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama mobil" name="nama_mobil">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Pemilik</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama - NIM" name="pemilik_mobil">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Merk</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="merk mobil" name="merk_mobil">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tanggal Beli</label>
            <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="tanggal beli" name="tanggal_beli">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Foto</label>
            <input class="form-control" type="file" id="formFile" name="foto_mobil">
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="status_pembayaran" id="flexRadioDefault1" value="Lunas">
        <label class="form-check-label" for="flexRadioDefault1">
          Lunas
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="status_pembayaran" id="flexRadioDefault2" value="Belum Lunas">
        <label class="form-check-label" for="flexRadioDefault2">
          Belum Lunas
        </label>
      </div>
        <button type="submit" class="btn btn-primary" role="button" style= "width:100px; height:45px;margin-bottom:50px">Selesai</button>    
      </form>
    
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="d-flex justify-content-between align-items-center" style="height: 100vh;">
    <div class="img" style="margin-left:0px;">
        <img src="../asset/images/awallogin_rev.jpg" style="transform: scaleX(-1);width: 700px; height: 713px;" alt="">
    </div>
        <form action="../config/add_acc.php" method="post" style="width:50%;margin: 10px 50px">
            <h1 style="padding-bottom:20px;">Register</h1>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputNama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" aria-describedby="namalengkap" >
            </div>
            <div class="mb-3">
                <label for="exampleInputnohp" class="form-label">Nomor Handphone </label>
                <input type="text" class="form-control" name="no_hp" aria-describedby="nomorhp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" name="password" onkeyup ='check();'required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Konfirmasi Kata Sandi</label>
                <input type="password" class="form-control" name="konfirmasipassword" onkeyup ='check();'required>
            </div>
            <!-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div> -->
            <button type="submit" class="btn btn-primary">Daftar</button>
            <p class="mb-4" style="text-align: left,">Anda sudah punya akun? <a href="Login_Rayhan.php">Login</a></p>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
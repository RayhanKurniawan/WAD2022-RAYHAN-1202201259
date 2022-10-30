<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="punyabooking.css">
    <title>Booking</title>
    <style>
        input, select{
            width: 100%;
        }
        input[type='checkbox']{
            width:20px;
        }
    </style>
</head>
<body>
<!-- INI NAVBAR -->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Rayhan_Home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Rayhan_Booking.php">Booking</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<!-- INI EAD RENT -->
<h2 align="center">Rent your car now!</h2>

<!-- INI FORMNYA -->
<div class="ini_formnya">
<div class="row">
<div class="container col-sm-6">
        <div class="container-fluid justify-content-center">
        <img src="<?php echo $_GET['mobil']?>" class="card-img-top" style="width: 500px">
        <form action="Rayhan_MyBooking.php" method="POST">
          <label for="name"> Name </label>
          <input type="text" id="name" name="name" value="RAYHAN_1202201259" readonly>

          <label for="date"> Book Date </label>
          <input type="date" id="date" name="date" placeholder="dd/mm/yyyy">

          <label for="startTime"> Start Time </label>
          <input type="time" id="startTime" name="time" placeholder="">
          
          <label for="duration"> Duration (Days) </label>
          <input type="number" id="duration" name="duration" placeholder="">

          <label for="carType">Car Type </label>
          <select name="CarType" id="CarType" placeholder="">
            <option value="Isuzu MU-X">Isuzu MU-X</option>
            <option value="Honda City">Honda City</option>
            <option value="Suzuki XL7">Suzuki XL7</option>
          </select>

          <label for="phonenumber"> Phone Number</label>
          <input type="text" id="phonenumber" name="phonenumber" placeholder="">
          <div class="radio">
            <input type="checkbox" name="cartype[]" value="Health Protocol"><label>Health protocol / Rp 25.000</label>
          </div>
          <div class="radio">
            <input type="checkbox" name="cartype[]" value="Driver"><label>Driver / Rp 100.000</label>
          </div>
          <div class="radio">
            <input type="checkbox" name="cartype[]" value="Fuel Filled"><label>Fuel filled / Rp 250.000</label>
          </div>
          <input class="btn btn-success" type="submit" value="Book">
        </form>
      </div>
    </div>
    </div>
</div>



<!-- INI FOOTER -->
<div class="text-center p-3" style="background-color: gray;">
    © 2022 Copyright:
    <a class="text-white">Created by Muhammad Rayhan Kurniawan_1202201259</a>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>
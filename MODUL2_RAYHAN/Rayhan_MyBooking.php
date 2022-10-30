<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>My Booking</title>
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
<h1 align="center">Thank You RAYHAN_1202201259 for Reserving</h1>
<h2 align="center">Please double check your reservation details</h2>

<!-- INI FORMNYA -->
<?php
    $nama =$_POST['name'];
     $date = $_POST['date'];
     $time = $_POST['time'];
     $duration = $_POST['duration'];
     $cartype = $_POST['CarType'];
     $phonenumber = $_POST['phonenumber'];
     $price = 0;
     

     if ($cartype == "Isuzu MU-X") {
          $price += (int)$duration * 490000;
     } else if ($cartype == "Honda City") {
          $price += (int)$duration * 330000;
     } else if ($cartype == "Suzuki XL7") {
          $price += (int)$duration * 250000;
     }
     ?>
            <div class="container">
                <h1 class="text-center">Hasil</h1>
                <table class="table">
                    <thread>
                        <tr>
                            <th scope="col">Booking Number</th>
                            <th scope="col">Name</th>
                            <th scope="col">Check In</th>
                            <th scope="col">Check Out</th>
                            <th scope="col">Car Type</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Service</th>
                            <th scope="col">Total Price</th>
                        </tr>
    </thread>
    <tbody>
        <tr>
            <th scope="row"><?php echo rand() ?></th>
            <td><?php echo $nama ?></td>
            <td><?php echo "$date $time" ?></td>
            <td><?php echo date('Y-m-d', strtotime("+" . $duration ."day", strtotime($date))) . " " . $time;?></td>
            <td><?php echo $cartype ?></td>
            <td><?php echo $phonenumber ?></td>
            <td><?php  ?></td>
            <td><?php echo "Rp $price" ?></td>
        </tr>
    </tbody>
    </table>






<!-- INI FOOTER -->
<div class="text-center p-3" style="background-color: gray;">
    © 2022 Copyright:
    <a class="text-white">Created by Muhammad Rayhan Kurniawan_1202201259</a>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>
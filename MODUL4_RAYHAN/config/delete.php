<?php
include("connector.php");
    $id= $_GET["id"];
    mysqli_query($connect, "DELETE from showroom_rayhan_table WHERE id_mobil=$id");
    header("Location:../pages/ListCar_Rayhan.php")
?>
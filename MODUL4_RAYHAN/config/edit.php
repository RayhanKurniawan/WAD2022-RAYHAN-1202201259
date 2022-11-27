<?php
    include('connector.php');
    $id_mobil = $_GET['id'];
    $nama_mobil = $_POST['nama_mobil'];
    $pemilik_mobil = $_POST['pemilik_mobil'];
    $merk_mobil = $_POST['merk_mobil'];
    $tanggal_beli = $_POST['tanggal_beli'];
    $deskripsi = $_POST['deskripsi'];
    $foto_mobil = $_FILES['foto_mobil']['name'];
    $foto_tmp = $_FILES['foto_mobil']['tmp_name'];
    $status_pembayaran = $_POST['status_pembayaran'];

    $path = '../asset/images/';

    move_uploaded_file($foto_tmp, $path.$foto_mobil);

    $query = mysqli_query($connect, "UPDATE showroom_rayhan_table SET nama_mobil = '$nama_mobil', pemilik_mobil = '$pemilik_mobil', merk_mobil='$merk_mobil', 
    tanggal_beli='$tanggal_beli', deskripsi = '$deskripsi', foto_mobil='$foto_mobil', status_pembayaran='$status_pembayaran' WHERE id = '$id_mobil'");
                        
    if($query){
        echo "<script>alert('Berhasil update')</script>";
        echo "<meta http-equiv='refresh' content='1 url=../pages/ListCar_Rayhan.php'>";
    } else {
        echo "<script>alert('Gagal update)</script>";
        echo "<meta http-equiv='refresh' content='1 url=../pages/ListCar_Rayhan.php'>";
    }
?>

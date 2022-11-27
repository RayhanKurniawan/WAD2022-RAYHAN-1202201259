<?php
    include('connector.php');
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $no_hp = $_POST['no_hp'];
    $password = $_POST['password'];
    $konfirmasipassword = $_POST['konfirmasipassword'];
    // $duplikat = $_POST['duplikat'];

    // if(mysqli_num_rows($duplikat)>0){
    //     echo "<script> alert('Email Dobel')</script>";
    //     echo "<meta http-equiv='refresh' content='1 url=../pages/Register_Rayhan.php'>";
    // }
    // else{
        if($password==$konfirmasipassword){
            $query= "INSERT INTO user_rayhan (email, nama, no_hp, password)
                    VALUES('$email', '$nama', '$no_hp', '$password')";
            mysqli_query($connect,$query);
            echo "<script>alert('Registrasi Berhasil')</script>";
            echo "<meta http-equiv='refresh' content='1 url=../pages/Login_Rayhan.php'>";
        }
        else{
            echo "<script>alert('Registrasi Gagal')</script>";
            echo "<meta http-equiv='refresh' content='1 url=../pages/Register_Rayhan.php'>";
        }
    // }
    // $query = mysqli_query($connect, "INSERT INTO user_rayhan(email, nama, no_hp, password)
    //                                 VALUES('$email', '$nama', '$no_hp', '$password')");
    
    // if($query){
    //     echo "<script>alert('Registrasi Berhasil')</script>";
    //     echo "<meta http-equiv='refresh' content='1 url=../pages/Login_Rayhan.php'>";
    // } else {
    //     echo "<script>alert('Registrasi Gagal')</script>";
    //     echo "<meta http-equiv='refresh' content='1 url=../pages/Register_Rayhan.php'>";
    // }
?>
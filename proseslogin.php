<?php

include 'koneksi.php';
 $user = $_POST['username'];
 $pass = md5($_POST['password']);
  

 $sql="SELECT * from admin where username='".$user."' AND password='".$pass."'";
    $result=mysqli_query($conn, $sql);
    $num_rows=mysqli_num_rows($result);
    $row=mysqli_fetch_row($result);
    if($num_rows>0){
      error_reporting(0);
        session_start();
        $_SESSION["username"]=$row['username'];
        $_SESSION["password"]=$row['password'];
        echo "<script>alert('Anda Berhasil LOGIN');</script>";
        echo "<script>location='home.php';</script>";
    } else {
        echo "<script>alert('Username atau Password Admin tidak benar !!!');</script>";
        echo "<script>location='index.php';</script>";
    }

?>


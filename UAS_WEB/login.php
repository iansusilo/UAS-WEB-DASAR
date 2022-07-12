<?php
require 'koneksi.php';

session_start();

//ambil data dari form
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "select * from user where username = '$username'");

$result = mysqli_num_rows($query);

if ($result > 0) {
  $data = mysqli_fetch_assoc($query);

  //cek level user (admin atau user)
  if ($data['level'] == "admin") {
    $_SESSION['user'] = $data['username'];
    $_SESSION['level'] = "admin";
    //tentukan halaman yang diakses admin
    header("Location:admin/home_admin.php");
  } else if ($data['level'] == "user") {
    $_SESSION['user'] = $data['username'];
    $_SESSION['level'] = "user";
    //tentukan halaman yang diakses user
    header("Location:user/home_user.php");
  }
} else {
  header("Location:login_page.php?alert=salah");
}

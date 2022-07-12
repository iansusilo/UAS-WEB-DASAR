<?php
require 'koneksi.php';

$id_user = $_POST['id_user'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password =  $_POST['password'];
$level = 'user';

mysqli_query($koneksi, "insert into user values('$id_user', '$nama', '$username', '$password','$level')");

header("location:login_page.php?alert=sukses");

<?php
$koneksi = mysqli_connect("localhost", "root", "", "uas_pweb");

if (!$koneksi) {
  die("<script>alert('Gagal terhubung dengan database')</script>");
}

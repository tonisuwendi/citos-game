<?php
session_start();
require 'php/koneksi.php';

$kode = $_SESSION['kode'];
mysqli_query($conn, "UPDATE users SET status_dua = '1' WHERE kode = '$kode'");

 ?>

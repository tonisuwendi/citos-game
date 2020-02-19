<?php
$server = "localhost";
$name = "tery4731_cilacap";
$pwd = "cilacap123";
$dbname = "tery4731_cilacap";

$conn = mysqli_connect($server,$name,$pwd,$dbname);

if(mysqli_connect_errno()){
  echo "koneksi gagal!";
}


 ?>

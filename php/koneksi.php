<?php
$server = "localhost:3306";
$name = "root";
$pwd = "";
$dbname = "citos";

$conn = mysqli_connect($server,$name,$pwd,$dbname);

if(mysqli_connect_errno()){
  echo "koneksi gagal!";
}


 ?>

<?php
session_start();
require 'php/koneksi.php';

if(!isset($_SESSION['login'])){
  header("Location: index.php");
  exit;
}
$kode = $_SESSION['kode'];

mysqli_query($conn, "UPDATE users SET status = '1' WHERE kode = '$kode'");


function pertanyaan1(){
  $pertanyaan = $_POST['jawaban'];
  global $conn;
  $kode = $_SESSION['kode'];
  $query = mysqli_query($conn, "SELECT * FROM users WHERE kode = '$kode'");
  $data = mysqli_fetch_array($query);
  $point = $data['points'];
  if($pertanyaan == "jawaban1"){
    $pointbaru = $point + 2;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return true;
  }else{
    $pointbaru = $point - 1;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return false;
  }
}

function pertanyaan2(){
  $pertanyaan = $_POST['jawaban'];
  global $conn;
  $kode = $_SESSION['kode'];
  $query = mysqli_query($conn, "SELECT * FROM users WHERE kode = '$kode'");
  $data = mysqli_fetch_array($query);
  $point = $data['points'];
  if($pertanyaan == "jawaban2"){
    $pointbaru = $point + 2;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return true;
  }else{
    $pointbaru = $point - 1;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return false;
  }
}

function pertanyaan3(){
  $pertanyaan = $_POST['jawaban'];
  global $conn;
  $kode = $_SESSION['kode'];
  $query = mysqli_query($conn, "SELECT * FROM users WHERE kode = '$kode'");
  $data = mysqli_fetch_array($query);
  $point = $data['points'];
  if($pertanyaan == "jawaban2"){
    $pointbaru = $point + 2;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return true;
  }else{
    $pointbaru = $point - 1;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return false;
  }
}

function pertanyaan4(){
  $pertanyaan = $_POST['jawaban'];
  global $conn;
  $kode = $_SESSION['kode'];
  $query = mysqli_query($conn, "SELECT * FROM users WHERE kode = '$kode'");
  $data = mysqli_fetch_array($query);
  $point = $data['points'];
  if($pertanyaan == "jawaban2"){
    $pointbaru = $point + 2;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return true;
  }else{
    $pointbaru = $point - 1;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return false;
  }
}

function pertanyaan5(){
  $pertanyaan = $_POST['jawaban'];
  global $conn;
  $kode = $_SESSION['kode'];
  $query = mysqli_query($conn, "SELECT * FROM users WHERE kode = '$kode'");
  $data = mysqli_fetch_array($query);
  $point = $data['points'];
  if($pertanyaan == "jawaban2"){
    $pointbaru = $point + 2;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return true;
  }else{
    $pointbaru = $point - 1;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return false;
  }
}

function pertanyaan6(){
  $pertanyaan = $_POST['jawaban'];
  global $conn;
  $kode = $_SESSION['kode'];
  $query = mysqli_query($conn, "SELECT * FROM users WHERE kode = '$kode'");
  $data = mysqli_fetch_array($query);
  $point = $data['points'];
  if($pertanyaan == "jawaban2"){
    $pointbaru = $point + 2;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return true;
  }else{
    $pointbaru = $point - 1;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return false;
  }
}

function pertanyaan7(){
  $pertanyaan = $_POST['jawaban'];
  global $conn;
  $kode = $_SESSION['kode'];
  $query = mysqli_query($conn, "SELECT * FROM users WHERE kode = '$kode'");
  $data = mysqli_fetch_array($query);
  $point = $data['points'];
  if($pertanyaan == "jawaban1"){
    $pointbaru = $point + 2;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return true;
  }else{
    $pointbaru = $point - 1;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return false;
  }
}

function pertanyaan8(){
  $pertanyaan = $_POST['jawaban'];
  global $conn;
  $kode = $_SESSION['kode'];
  $query = mysqli_query($conn, "SELECT * FROM users WHERE kode = '$kode'");
  $data = mysqli_fetch_array($query);
  $point = $data['points'];
  if($pertanyaan == "jawaban2"){
    $pointbaru = $point + 2;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return true;
  }else{
    $pointbaru = $point - 1;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return false;
  }
}

function pertanyaan9(){
  $pertanyaan = $_POST['jawaban'];
  global $conn;
  $kode = $_SESSION['kode'];
  $query = mysqli_query($conn, "SELECT * FROM users WHERE kode = '$kode'");
  $data = mysqli_fetch_array($query);
  $point = $data['points'];
  if($pertanyaan == "jawaban1"){
    $pointbaru = $point + 2;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return true;
  }else{
    $pointbaru = $point - 1;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return false;
  }
}

function pertanyaan10(){
  $pertanyaan = $_POST['jawaban'];
  global $conn;
  $kode = $_SESSION['kode'];
  $query = mysqli_query($conn, "SELECT * FROM users WHERE kode = '$kode'");
  $data = mysqli_fetch_array($query);
  $point = $data['points'];
  if($pertanyaan == "jawaban2"){
    $pointbaru = $point + 2;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return true;
  }else{
    $pointbaru = $point - 1;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return false;
  }
}

function pertanyaan11(){
  $pertanyaan = $_POST['jawaban'];
  global $conn;
  $kode = $_SESSION['kode'];
  $query = mysqli_query($conn, "SELECT * FROM users WHERE kode = '$kode'");
  $data = mysqli_fetch_array($query);
  $point = $data['points'];
  if($pertanyaan == "jawaban1"){
    $pointbaru = $point + 2;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return true;
  }else{
    $pointbaru = $point - 1;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return false;
  }
}

function pertanyaan12(){
  $pertanyaan = $_POST['jawaban'];
  global $conn;
  $kode = $_SESSION['kode'];
  $query = mysqli_query($conn, "SELECT * FROM users WHERE kode = '$kode'");
  $data = mysqli_fetch_array($query);
  $point = $data['points'];
  if($pertanyaan == "jawaban1"){
    $pointbaru = $point + 2;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return true;
  }else{
    $pointbaru = $point - 1;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return false;
  }
}

function pertanyaan13(){
  $pertanyaan = $_POST['jawaban'];
  global $conn;
  $kode = $_SESSION['kode'];
  $query = mysqli_query($conn, "SELECT * FROM users WHERE kode = '$kode'");
  $data = mysqli_fetch_array($query);
  $point = $data['points'];
  if($pertanyaan == "jawaban2"){
    $pointbaru = $point + 2;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return true;
  }else{
    $pointbaru = $point - 1;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return false;
  }
}

function pertanyaan14(){
  $pertanyaan = $_POST['jawaban'];
  global $conn;
  $kode = $_SESSION['kode'];
  $query = mysqli_query($conn, "SELECT * FROM users WHERE kode = '$kode'");
  $data = mysqli_fetch_array($query);
  $point = $data['points'];
  if($pertanyaan == "jawaban1"){
    $pointbaru = $point + 2;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return true;
  }else{
    $pointbaru = $point - 1;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return false;
  }
}

function pertanyaan15(){
  $pertanyaan = $_POST['jawaban'];
  global $conn;
  $kode = $_SESSION['kode'];
  $query = mysqli_query($conn, "SELECT * FROM users WHERE kode = '$kode'");
  $data = mysqli_fetch_array($query);
  $point = $data['points'];
  if($pertanyaan == "jawaban2"){
    $pointbaru = $point + 2;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return true;
  }else{
    $pointbaru = $point - 1;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return false;
  }
}

function pertanyaan16(){
  $pertanyaan = $_POST['jawaban'];
  global $conn;
  $kode = $_SESSION['kode'];
  $query = mysqli_query($conn, "SELECT * FROM users WHERE kode = '$kode'");
  $data = mysqli_fetch_array($query);
  $point = $data['points'];
  if($pertanyaan == "jawaban2"){
    $pointbaru = $point + 2;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return true;
  }else{
    $pointbaru = $point - 1;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return false;
  }
}

function pertanyaan17(){
  $pertanyaan = $_POST['jawaban'];
  global $conn;
  $kode = $_SESSION['kode'];
  $query = mysqli_query($conn, "SELECT * FROM users WHERE kode = '$kode'");
  $data = mysqli_fetch_array($query);
  $point = $data['points'];
  if($pertanyaan == "jawaban1"){
    $pointbaru = $point + 2;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return true;
  }else{
    $pointbaru = $point - 1;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return false;
  }
}

function pertanyaan18(){
  $pertanyaan = $_POST['jawaban'];
  global $conn;
  $kode = $_SESSION['kode'];
  $query = mysqli_query($conn, "SELECT * FROM users WHERE kode = '$kode'");
  $data = mysqli_fetch_array($query);
  $point = $data['points'];
  if($pertanyaan == "jawaban1"){
    $pointbaru = $point + 2;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return true;
  }else{
    $pointbaru = $point - 1;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return false;
  }
}

function pertanyaan19(){
  $pertanyaan = $_POST['jawaban'];
  global $conn;
  $kode = $_SESSION['kode'];
  $query = mysqli_query($conn, "SELECT * FROM users WHERE kode = '$kode'");
  $data = mysqli_fetch_array($query);
  $point = $data['points'];
  if($pertanyaan == "jawaban2"){
    $pointbaru = $point + 2;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return true;
  }else{
    $pointbaru = $point - 1;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return false;
  }
}

function pertanyaan20(){
  $pertanyaan = $_POST['jawaban'];
  global $conn;
  $kode = $_SESSION['kode'];
  $query = mysqli_query($conn, "SELECT * FROM users WHERE kode = '$kode'");
  $data = mysqli_fetch_array($query);
  $point = $data['points'];
  if($pertanyaan == "jawaban2"){
    $pointbaru = $point + 2;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return true;
  }else{
    $pointbaru = $point - 1;
    mysqli_query($conn, "UPDATE users SET points = '$pointbaru' WHERE kode = '$kode'");
    return false;
  }
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Game Lautan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="css/dasar-112.css">
  </head>
  <body>
    <?php
    $kode = $_SESSION['kode'];
    $querypoint = mysqli_query($conn, "SELECT * FROM users WHERE kode = '$kode'");
    $data = mysqli_fetch_array($querypoint);
     ?>

    <div class="point-saya">
      <h3>Pointmu = <?php echo $data['points']; ?></h3>
    </div>

    <section class="wrapper">
      <img data-toggle="modal" data-target="#ikan1" src="assets/img/FISH1.png" alt="" class="ikan1">
      <img data-toggle="modal" data-target="#ikan2" src="assets/img/FISH2.png" alt="" class="ikan2">
      <img data-toggle="modal" data-target="#ikan3" src="assets/img/FISH3.png" alt="" class="ikan3">
      <img data-toggle="modal" data-target="#ikan4" src="assets/img/FISH4.png" alt="" class="ikan4">
      <img data-toggle="modal" data-target="#ikan5" src="assets/img/FISH5.png" alt="" class="ikan5">
      <img data-toggle="modal" data-target="#ikan6" src="assets/img/FISH6.png" alt="" class="ikan6">
      <img data-toggle="modal" data-target="#ikan7" src="assets/img/FISH2.png" alt="" class="ikan7">
      <img data-toggle="modal" data-target="#ikan8" src="assets/img/FISH3.png" alt="" class="ikan8">
      <img data-toggle="modal" data-target="#ikan9" src="assets/img/FISH4.png" alt="" class="ikan9">
      <img data-toggle="modal" data-target="#ikan10" src="assets/img/FISH5.png" alt="" class="ikan10">
      <img data-toggle="modal" data-target="#ikan11" src="assets/img/FISH6.png" alt="" class="ikan11">
      <img data-toggle="modal" data-target="#ikan12" src="assets/img/FISH2.png" alt="" class="ikan12">
      <img data-toggle="modal" data-target="#ikan13" src="assets/img/FISH3.png" alt="" class="ikan13">
      <img data-toggle="modal" data-target="#ikan14" src="assets/img/FISH4.png" alt="" class="ikan14">
      <img data-toggle="modal" data-target="#ikan15" src="assets/img/FISH5.png" alt="" class="ikan15">
      <img data-toggle="modal" data-target="#ikan16" src="assets/img/FISH1.png" alt="" class="ikan16">
      <img data-toggle="modal" data-target="#ikan17" src="assets/img/FISH2.png" alt="" class="ikan17">
      <img data-toggle="modal" data-target="#ikan18" src="assets/img/FISH3.png" alt="" class="ikan18">
      <img data-toggle="modal" data-target="#ikan19" src="assets/img/FISH4.png" alt="" class="ikan19">
      <img data-toggle="modal" data-target="#ikan20" src="assets/img/FISH5.png" alt="" class="ikan20">
    </section>




    <?php if(isset($_SESSION['login'])){ ?>
      <?php
      $kode = $_SESSION['kode'];
      $query = mysqli_query($conn, "SELECT * FROM users WHERE kode = '$kode'");
      $data = mysqli_fetch_array($query);
       ?>
       <?php if($data['status_dua'] == 0){ ?>
    <section class="penutup-bg"></section>
    <section class="welcome" id="welcome">
      <h1>Klik pada salah satu ikan</h1>
      <a style="color: white; cursor: pointer;" id="tutup-welcome">Ok</a>
    </section>
  <?php } ?>
  <?php } ?>

  <a href="index.php" class="back-home">Kembali Ke Permukaan</a>




  <!-- ikan 1 -->
  <div class="modal fade" id="ikan1" tabindex="-1" role="dialog" aria-labelledby="ikan1Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ikan1Label">Pertanyaan Ikan 1</h5>
        </div>
        <div class="modal-body">
          Benteng Pendem merupakan benteng peninggalan ?
          <form action="" method="post">
          <select name="jawaban" class="form-control">
            <option value="jawaban1">Belanda</option>
            <option value="jawaban2">Jepang</option>
          </select>
        </div>
        <div class="modal-footer">
          <input type="submit" name="pertanyaan1" class="btn btn-primary">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- ikan 2 -->
  <div class="modal fade" id="ikan2" tabindex="-1" role="dialog" aria-labelledby="ikan2Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ikan2Label">Pertanyaan Ikan 2</h5>
        </div>
        <div class="modal-body">
          Gua yang terdapat di Kampung Laut bernama ?
          <form action="" method="post">
          <select name="jawaban" class="form-control">
            <option value="jawaban1">Pindul</option>
            <option value="jawaban2">Masigit Sela</option>
          </select>
        </div>
        <div class="modal-footer">
          <input type="submit" name="pertanyaan2" class="btn btn-primary">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- ikan 3 -->
  <div class="modal fade" id="ikan3" tabindex="-1" role="dialog" aria-labelledby="ikan3Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ikan3Label">Pertanyaan Ikan 3</h5>
        </div>
        <div class="modal-body">
          Kemit Forest Education terdapat di daerah ?
          <form action="" method="post">
          <select name="jawaban" class="form-control">
            <option value="jawaban1">Kawunganten</option>
            <option value="jawaban2">Sidareja</option>
          </select>
        </div>
        <div class="modal-footer">
          <input type="submit" name="pertanyaan3" class="btn btn-primary">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- ikan 4 -->
  <div class="modal fade" id="ikan4" tabindex="-1" role="dialog" aria-labelledby="ikan4Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ikan4Label">Pertanyaan Ikan 4</h5>
        </div>
        <div class="modal-body">
          Pantai Jetis merupakan pantai yang berada di ?
          <form action="" method="post">
          <select name="jawaban" class="form-control">
            <option value="jawaban1">Kebumen</option>
            <option value="jawaban2">Adipala</option>
          </select>
        </div>
        <div class="modal-footer">
          <input type="submit" name="pertanyaan4" class="btn btn-primary">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- ikan 5 -->
  <div class="modal fade" id="ikan5" tabindex="-1" role="dialog" aria-labelledby="ikan5Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ikan5Label">Pertanyaan Ikan 5</h5>
        </div>
        <div class="modal-body">
          Wisata pohon cemara di Adipala disebut ?
          <form action="" method="post">
          <select name="jawaban" class="form-control">
            <option value="jawaban1">Cemara Rindang Bunton</option>
            <option value="jawaban2">Cemara Sewu Bunton</option>
          </select>
        </div>
        <div class="modal-footer">
          <input type="submit" name="pertanyaan5" class="btn btn-primary">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- ikan 6 -->
  <div class="modal fade" id="ikan6" tabindex="-1" role="dialog" aria-labelledby="ikan6Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ikan6Label">Pertanyaan Ikan 6</h5>
        </div>
        <div class="modal-body">
          Museum Pahlawan yang terdapat di Kroya adalah museum ?
          <form action="" method="post">
          <select name="jawaban" class="form-control">
            <option value="jawaban1">Museom Soedirman Susilo</option>
            <option value="jawaban2">Museom Soesilo Soedarman</option>
          </select>
        </div>
        <div class="modal-footer">
          <input type="submit" name="pertanyaan6" class="btn btn-primary">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- ikan 7 -->
  <div class="modal fade" id="ikan7" tabindex="-1" role="dialog" aria-labelledby="ikan7Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ikan7Label">Pertanyaan Ikan 7</h5>
        </div>
        <div class="modal-body">
          Tanam Sari Rasa merupakan tempat wisata di ?
          <form action="" method="post">
          <select name="jawaban" class="form-control">
            <option value="jawaban1">Sampang</option>
            <option value="jawaban2">Sidareja</option>
          </select>
        </div>
        <div class="modal-footer">
          <input type="submit" name="pertanyaan7" class="btn btn-primary">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- ikan 8 -->
  <div class="modal fade" id="ikan8" tabindex="-1" role="dialog" aria-labelledby="ikan8Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ikan8Label">Pertanyaan Ikan 8</h5>
        </div>
        <div class="modal-body">
          Waduk Wisata yang terdapat di Kawunganten bernama ?
          <form action="" method="post">
          <select name="jawaban" class="form-control">
            <option value="jawaban1">Waduk Sempor</option>
            <option value="jawaban2">Waduk Kubangkangkung</option>
          </select>
        </div>
        <div class="modal-footer">
          <input type="submit" name="pertanyaan8" class="btn btn-primary">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- ikan 9 -->
  <div class="modal fade" id="ikan9" tabindex="-1" role="dialog" aria-labelledby="ikan9Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ikan9Label">Pertanyaan Ikan 9</h5>
        </div>
        <div class="modal-body">
          Gunung Selok wisata yang terletak di ?
          <form action="" method="post">
          <select name="jawaban" class="form-control">
            <option value="jawaban1">Adipala</option>
            <option value="jawaban2">Binangun</option>
          </select>
        </div>
        <div class="modal-footer">
          <input type="submit" name="pertanyaan9" class="btn btn-primary">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- ikan 10 -->
  <div class="modal fade" id="ikan10" tabindex="-1" role="dialog" aria-labelledby="ikan10Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ikan10Label">Pertanyaan Ikan 10</h5>
        </div>
        <div class="modal-body">
          Curug Mandala dan Penampen berada di ?
          <form action="" method="post">
          <select name="jawaban" class="form-control">
            <option value="jawaban1">Kawunganten</option>
            <option value="jawaban2">Jeruk Legi</option>
          </select>
        </div>
        <div class="modal-footer">
          <input type="submit" name="pertanyaan10" class="btn btn-primary">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- ikan 11 -->
  <div class="modal fade" id="ikan11" tabindex="-1" role="dialog" aria-labelledby="ikan11Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ikan11Label">Pertanyaan Ikan 11</h5>
        </div>
        <div class="modal-body">
          Pantai yang paling terkenal di Cilacap adalah ?
          <form action="" method="post">
          <select name="jawaban" class="form-control">
            <option value="jawaban1">Pantai teluk penyu</option>
            <option value="jawaban2">Pantai Kalipat</option>
          </select>
        </div>
        <div class="modal-footer">
          <input type="submit" name="pertanyaan11" class="btn btn-primary">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- ikan 12 -->
  <div class="modal fade" id="ikan12" tabindex="-1" role="dialog" aria-labelledby="ikan12Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ikan12Label">Pertanyaan Ikan 12</h5>
        </div>
        <div class="modal-body">
          Pantai yang terdapat di Pulau Nusakambangan bagian timur adalah ?
          <form action="" method="post">
          <select name="jawaban" class="form-control">
            <option value="jawaban1">Pantai Karang Pandan</option>
            <option value="jawaban2">Pantai Permisan</option>
          </select>
        </div>
        <div class="modal-footer">
          <input type="submit" name="pertanyaan12" class="btn btn-primary">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- ikan 13 -->
  <div class="modal fade" id="ikan13" tabindex="-1" role="dialog" aria-labelledby="ikan13Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ikan13Label">Pertanyaan Ikan 13</h5>
        </div>
        <div class="modal-body">
          Taman Bungan yang terdapat di Binangun bernama ?
          <form action="" method="post">
          <select name="jawaban" class="form-control">
            <option value="jawaban1">Taman Bunga Sari Rasa</option>
            <option value="jawaban2">Taman Bunga Tali Asmoro</option>
          </select>
        </div>
        <div class="modal-footer">
          <input type="submit" name="pertanyaan13" class="btn btn-primary">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- ikan 14 -->
  <div class="modal fade" id="ikan14" tabindex="-1" role="dialog" aria-labelledby="ikan14Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ikan14Label">Pertanyaan Ikan 14</h5>
        </div>
        <div class="modal-body">
          Hutan Payau terdapat di daerah ?
          <form action="" method="post">
          <select name="jawaban" class="form-control">
            <option value="jawaban1">Karangtalun, Cilacap Utara</option>
            <option value="jawaban2">Donan, Cilacap Tengah</option>
          </select>
        </div>
        <div class="modal-footer">
          <input type="submit" name="pertanyaan14" class="btn btn-primary">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- ikan 15 -->
  <div class="modal fade" id="ikan15" tabindex="-1" role="dialog" aria-labelledby="ikan15Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ikan15Label">Pertanyaan Ikan 15</h5>
        </div>
        <div class="modal-body">
          Alun-alun Kabupaten Cilacap terletak di kelurahan ?
          <form action="" method="post">
          <select name="jawaban" class="form-control">
            <option value="jawaban1">Tambakreja</option>
            <option value="jawaban2">Sidanegara</option>
          </select>
        </div>
        <div class="modal-footer">
          <input type="submit" name="pertanyaan15" class="btn btn-primary">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>

   <!-- ikan 16 -->
  <div class="modal fade" id="ikan16" tabindex="-1" role="dialog" aria-labelledby="ikan16Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ikan16Label">Pertanyaan Ikan 16</h5>
        </div>
        <div class="modal-body">
          Tari tradisional dari Cilacap Jawa Tengah adalah
          <form action="" method="post">
          <select name="jawaban" class="form-control">
            <option value="jawaban1">Trunajaya</option>
            <option value="jawaban2">Jalungmas</option>
          </select>
        </div>
        <div class="modal-footer">
          <input type="submit" name="pertanyaan16" class="btn btn-primary">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>


<!-- ikan 17 -->
  <div class="modal fade" id="ikan17" tabindex="-1" role="dialog" aria-labelledby="ikan17Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ikan17Label">Pertanyaan Ikan 17</h5>
        </div>
        <div class="modal-body">
          Di bawah ini tradisi khas Cilacap adalah
          <form action="" method="post">
          <select name="jawaban" class="form-control">
            <option value="jawaban1">Sedekah laut</option>
            <option value="jawaban2">Aruk bahari</option>
          </select>
        </div>
        <div class="modal-footer">
          <input type="submit" name="pertanyaan17" class="btn btn-primary">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>


<!-- ikan 18 -->
  <div class="modal fade" id="ikan18" tabindex="-1" role="dialog" aria-labelledby="ikan18Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ikan18Label">Pertanyaan Ikan 18</h5>
        </div>
        <div class="modal-body">
          Di bawah ini yang merupakan makanan khas Cilacap adalah 
          <form action="" method="post">
          <select name="jawaban" class="form-control">
            <option value="jawaban1">Brekecek</option>
            <option value="jawaban2">Seblak</option>
          </select>
        </div>
        <div class="modal-footer">
          <input type="submit" name="pertanyaan18" class="btn btn-primary">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- ikan 19 -->
  <div class="modal fade" id="ikan19" tabindex="-1" role="dialog" aria-labelledby="ikan19Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ikan19Label">Pertanyaan Ikan 19</h5>
        </div>
        <div class="modal-body">
          Kerupuk bulat yang berwarna coklat dan rasanya gurih khas Cilacap adalah 
          <form action="" method="post">
          <select name="jawaban" class="form-control">
            <option value="jawaban1">kerupuk gendar</option>
            <option value="jawaban2">kerupuk tengiri</option>
          </select>
        </div>
        <div class="modal-footer">
          <input type="submit" name="pertanyaan19" class="btn btn-primary">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>


  <!-- ikan 20 -->
  <div class="modal fade" id="ikan20" tabindex="-1" role="dialog" aria-labelledby="ikan20Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ikan20Label">Pertanyaan Ikan 20</h5>
        </div>
        <div class="modal-body">
          Brekecek khas Cilacap berbahan dasar ikan?
          <form action="" method="post">
          <select name="jawaban" class="form-control">
            <option value="jawaban1">Tengiri</option>
            <option value="jawaban2">Jahan</option>
          </select>
        </div>
        <div class="modal-footer">
          <input type="submit" name="pertanyaan20" class="btn btn-primary">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>








    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">

      $(document).ready(function(){
        $("section.wrapper").css("opacity", "1");
        $("section.welcome").css("opacity", "1");
        $("section.penutup-bg").css("opacity", "0.5");
        $("a.back-home").css("opacity", "1");

        $("#tutup-welcome").click(function(){
          $("section.welcome").css("display", "none");
          $("section.penutup-bg").css("display", "none");
        })

        $("#tutup-welcome").click(function(){
          $(document).load("update.php");
        })

        $("section.wrapper img").click(function(){
          $(this).css("animation-play-state", "paused");
        })

        // $("section.wrapper img").mouseover(function(){
        //   $(this).css("animation-play-state", "paused");
        // })
        //
        // $("section.wrapper img").mouseleave(function(){
        //   $(this).css("animation-play-state", "running");
        // })

        $(".modal-footer button").click(function(){
          $("section.wrapper img").css("animation-play-state", "running");
        })


      })
    </script>

  </body>
</html>

<?php

if(isset($_POST['pertanyaan1'])){
  if(pertanyaan1($_POST)){
    echo "<script>
      swal({
        title: 'Selamat!',
        text: 'Jawaban Anda Benar. Kamu mendapatkan 2 point',
        icon: 'success'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }
}

if(isset($_POST['pertanyaan2'])){
  if(pertanyaan2($_POST)){
    echo "<script>
      swal({
        title: 'Selamat!',
        text: 'Jawaban Anda Benar. Kamu mendapatkan 2 point',
        icon: 'success'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }
}

if(isset($_POST['pertanyaan3'])){
  if(pertanyaan3($_POST)){
    echo "<script>
      swal({
        title: 'Selamat!',
        text: 'Jawaban Anda Benar. Kamu mendapatkan 2 point',
        icon: 'success'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }
}

if(isset($_POST['pertanyaan4'])){
  if(pertanyaan4($_POST)){
    echo "<script>
      swal({
        title: 'Selamat!',
        text: 'Jawaban Anda Benar. Kamu mendapatkan 2 point',
        icon: 'success'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }
}

if(isset($_POST['pertanyaan5'])){
  if(pertanyaan5($_POST)){
    echo "<script>
      swal({
        title: 'Selamat!',
        text: 'Jawaban Anda Benar. Kamu mendapatkan 2 point',
        icon: 'success'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }
}

if(isset($_POST['pertanyaan6'])){
  if(pertanyaan6($_POST)){
    echo "<script>
      swal({
        title: 'Selamat!',
        text: 'Jawaban Anda Benar. Kamu mendapatkan 2 point',
        icon: 'success'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }
}

if(isset($_POST['pertanyaan7'])){
  if(pertanyaan7($_POST)){
    echo "<script>
      swal({
        title: 'Selamat!',
        text: 'Jawaban Anda Benar. Kamu mendapatkan 2 point',
        icon: 'success'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }
}

if(isset($_POST['pertanyaan8'])){
  if(pertanyaan8($_POST)){
    echo "<script>
      swal({
        title: 'Selamat!',
        text: 'Jawaban Anda Benar. Kamu mendapatkan 2 point',
        icon: 'success'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }
}

if(isset($_POST['pertanyaan9'])){
  if(pertanyaan9($_POST)){
    echo "<script>
      swal({
        title: 'Selamat!',
        text: 'Jawaban Anda Benar. Kamu mendapatkan 2 point',
        icon: 'success'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }
}

if(isset($_POST['pertanyaan10'])){
  if(pertanyaan10($_POST)){
    echo "<script>
      swal({
        title: 'Selamat!',
        text: 'Jawaban Anda Benar. Kamu mendapatkan 2 point',
        icon: 'success'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }
}

if(isset($_POST['pertanyaan11'])){
  if(pertanyaan11($_POST)){
    echo "<script>
      swal({
        title: 'Selamat!',
        text: 'Jawaban Anda Benar. Kamu mendapatkan 2 point',
        icon: 'success'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }
}

if(isset($_POST['pertanyaan12'])){
  if(pertanyaan12($_POST)){
    echo "<script>
      swal({
        title: 'Selamat!',
        text: 'Jawaban Anda Benar. Kamu mendapatkan 2 point',
        icon: 'success'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }
}

if(isset($_POST['pertanyaan13'])){
  if(pertanyaan13($_POST)){
    echo "<script>
      swal({
        title: 'Selamat!',
        text: 'Jawaban Anda Benar. Kamu mendapatkan 2 point',
        icon: 'success'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }
}

if(isset($_POST['pertanyaan14'])){
  if(pertanyaan14($_POST)){
    echo "<script>
      swal({
        title: 'Selamat!',
        text: 'Jawaban Anda Benar. Kamu mendapatkan 2 point',
        icon: 'success'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }
}

if(isset($_POST['pertanyaan15'])){
  if(pertanyaan15($_POST)){
    echo "<script>
      swal({
        title: 'Selamat!',
        text: 'Jawaban Anda Benar. Kamu mendapatkan 2 point',
        icon: 'success'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }
}

if(isset($_POST['pertanyaan16'])){
  if(pertanyaan16($_POST)){
    echo "<script>
      swal({
        title: 'Selamat!',
        text: 'Jawaban Anda Benar. Kamu mendapatkan 2 point',
        icon: 'success'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }
}

if(isset($_POST['pertanyaan17'])){
  if(pertanyaan17($_POST)){
    echo "<script>
      swal({
        title: 'Selamat!',
        text: 'Jawaban Anda Benar. Kamu mendapatkan 2 point',
        icon: 'success'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }
}

if(isset($_POST['pertanyaan18'])){
  if(pertanyaan18($_POST)){
    echo "<script>
      swal({
        title: 'Selamat!',
        text: 'Jawaban Anda Benar. Kamu mendapatkan 2 point',
        icon: 'success'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }
}

if(isset($_POST['pertanyaan19'])){
  if(pertanyaan19($_POST)){
    echo "<script>
      swal({
        title: 'Selamat!',
        text: 'Jawaban Anda Benar. Kamu mendapatkan 2 point',
        icon: 'success'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }
}

if(isset($_POST['pertanyaan20'])){
  if(pertanyaan20($_POST)){
    echo "<script>
      swal({
        title: 'Selamat!',
        text: 'Jawaban Anda Benar. Kamu mendapatkan 2 point',
        icon: 'success'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar.php', 500);
      });
    </script>";
  }
}

 ?>

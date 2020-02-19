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

function pertanyaan5(){
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

function pertanyaan6(){
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

function pertanyaan7(){
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

function pertanyaan8(){
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

?>

<!DOCTYPE html>
<html>
<head>
	<title>Game Lautan</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/dasar-21.css">
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

	 <div class="wrapper">
      <img data-toggle="modal" data-target="#kapal1" src="assets/img/kapal1.png" alt="" class="kapal1">
      <img data-toggle="modal" data-target="#kapal2" src="assets/img/kapal2.png" alt="" class="kapal2">
      <img data-toggle="modal" data-target="#kapal3" src="assets/img/kapal5.png" alt="" class="kapal5">
      <img data-toggle="modal" data-target="#kapal4" src="assets/img/kapal6.png" alt="" class="kapal6">
      <img data-toggle="modal" data-target="#kapal5" src="assets/img/kapal2.png" alt="" class="kapal7">
      <img data-toggle="modal" data-target="#kapal6" src="assets/img/kapal1.png" alt="" class="kapal8">
      <img data-toggle="modal" data-target="#kapal7" src="assets/img/kapal5.png" alt="" class="kapal9">
      <img data-toggle="modal" data-target="#kapal8" src="assets/img/kapal6.png" alt="" class="kapal10">
    </div>

		<!-- kapal 1 -->
	  <div class="modal fade" id="kapal1" tabindex="-1" role="dialog" aria-labelledby="kapal1Label" aria-hidden="true">
	    <div class="modal-dialog" role="document">
	      <div class="modal-content">
	        <div class="modal-header">
	          <h5 class="modal-title" id="kapal1Label">Pertanyaan 1</h5>
	        </div>
	        <div class="modal-body">
	          Desa Wisata yang ada di Ngangglik Kab. Sleman
	          <form action="" method="post">
	          <select name="jawaban" class="form-control">
	            <option value="jawaban1">Tanjung</option>
	            <option value="jawaban2">Kuta</option>
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

		<!-- kapal 2 -->
	  <div class="modal fade" id="kapal2" tabindex="-2" role="dialog" aria-labelledby="kapal2Label" aria-hidden="true">
	    <div class="modal-dialog" role="document">
	      <div class="modal-content">
	        <div class="modal-header">
	          <h5 class="modal-title" id="kapal2Label">Pertanyaan 2</h5>
	        </div>
	        <div class="modal-body">
	          Gunung Putri terdapat di kota
	          <form action="" method="post">
	          <select name="jawaban" class="form-control">
	            <option value="jawaban1">Semarang</option>
	            <option value="jawaban2">Bandung</option>
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

		<!-- kapal 3 -->
	  <div class="modal fade" id="kapal3" tabindex="-3" role="dialog" aria-labelledby="kapal3Label" aria-hidden="true">
	    <div class="modal-dialog" role="document">
	      <div class="modal-content">
	        <div class="modal-header">
	          <h5 class="modal-title" id="kapal3Label">Pertanyaan 3</h5>
	        </div>
	        <div class="modal-body">
	          Puncak Gunung Semeru disebut
	          <form action="" method="post">
	          <select name="jawaban" class="form-control">
	            <option value="jawaban1">Jayawijaya</option>
	            <option value="jawaban2">Mahameru</option>
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

		<!-- kapal 4 -->
	  <div class="modal fade" id="kapal4" tabindex="-4" role="dialog" aria-labelledby="kapal4Label" aria-hidden="true">
	    <div class="modal-dialog" role="document">
	      <div class="modal-content">
	        <div class="modal-header">
	          <h5 class="modal-title" id="kapal4Label">Pertanyaan 4</h5>
	        </div>
	        <div class="modal-body">
	          Danau yang terkenal di Sumatra Utara
	          <form action="" method="post">
	          <select name="jawaban" class="form-control">
	            <option value="jawaban1">Toba</option>
	            <option value="jawaban2">Bengawan Solo</option>
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

    <!-- kapal 5 -->
    <div class="modal fade" id="kapal5" tabindex="-5" role="dialog" aria-labelledby="kapal5Label" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="kapal5Label">Pertanyaan 5</h5>
          </div>
          <div class="modal-body">
            Tradisi Dugderan adalah tradisi yang berasal dari 
            <form action="" method="post">
            <select name="jawaban" class="form-control">
              <option value="jawaban1">Semarang</option>
              <option value="jawaban2">Wonosobo</option>
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

    <!-- kapal 6 -->
    <div class="modal fade" id="kapal6" tabindex="-6" role="dialog" aria-labelledby="kapal6Label" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="kapal6Label">Pertanyaan 6</h5>
          </div>
          <div class="modal-body">
            Di bawah ini makanan khas Salatiga adalah
            <form action="" method="post">
            <select name="jawaban" class="form-control">
              <option value="jawaban1">Soto esto</option>
              <option value="jawaban2">Nasi langgi</option>
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

    <!-- kapal 7 -->
    <div class="modal fade" id="kapal7" tabindex="-7" role="dialog" aria-labelledby="kapal7Label" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="kapal7Label">Pertanyaan 7</h5>
          </div>
          <div class="modal-body">
            Pecel Pincuk Garahan adalah makanan khas dari?
            <form action="" method="post">
            <select name="jawaban" class="form-control">
              <option value="jawaban1">Jombang</option>
              <option value="jawaban2">Jember</option>
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

     <!-- kapal 8 -->
    <div class="modal fade" id="kapal8" tabindex="-8" role="dialog" aria-labelledby="kapal8Label" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="kapal8Label">Pertanyaan 8</h5>
          </div>
          <div class="modal-body">
            Tari kipas Pakarena berasal dari
            <form action="" method="post">
            <select name="jawaban" class="form-control">
              <option value="jawaban1">Sulsel</option>
              <option value="jawaban2">Kalsel</option>
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

    <a href="index.php" class="kembali btn btn-primary">KEMBALI</a>


		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
        setTimeout(document.location.href='dasar2.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar2.php', 500);
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
        setTimeout(document.location.href='dasar2.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar2.php', 500);
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
        setTimeout(document.location.href='dasar2.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar2.php', 500);
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
        setTimeout(document.location.href='dasar2.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar2.php', 500);
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
        setTimeout(document.location.href='dasar2.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar2.php', 500);
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
        setTimeout(document.location.href='dasar2.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar2.php', 500);
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
        setTimeout(document.location.href='dasar2.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar2.php', 500);
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
        setTimeout(document.location.href='dasar2.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar2.php', 500);
      });
    </script>";
  }
}

?>

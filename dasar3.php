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

function pertanyaan2(){
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

function pertanyaan3(){
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
    <link rel="stylesheet" type="text/css" href="css/dasar-31.css">
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
  <a href="index.php" class="btn btn-info kembali">KEMBALI</a>
	 <div class="wrapper">
      <img data-toggle="modal" data-target="#hewan1" src="assets/img/hewan1.png" alt="" class="hewan1">
      <img data-toggle="modal" data-target="#hewan2" src="assets/img/hewan2.png" alt="" class="hewan2">
      <img data-toggle="modal" data-target="#hewan3" src="assets/img/hewan3.png" alt="" class="hewan3">
      <img data-toggle="modal" data-target="#hewan4" src="assets/img/hewan4.png" alt="" class="hewan4">
      <img data-toggle="modal" data-target="#hewan5" src="assets/img/hewan5.png" alt="" class="hewan5">
      <img data-toggle="modal" data-target="#hewan6" src="assets/img/hewan1.png" alt="" class="hewan6">
      <img data-toggle="modal" data-target="#hewan7" src="assets/img/hewan2.png" alt="" class="hewan7">
      <img data-toggle="modal" data-target="#hewan8" src="assets/img/hewan3.png" alt="" class="hewan8">
      <img data-toggle="modal" data-target="#hewan9" src="assets/img/hewan4.png" alt="" class="hewan9">
      <img data-toggle="modal" data-target="#hewan10" src="assets/img/hewan5.png" alt="" class="hewan10">

    </div>

		<!-- hewan 1 -->
	  <div class="modal fade" id="hewan1" tabindex="-1" role="dialog" aria-labelledby="hewan1Label" aria-hidden="true">
	    <div class="modal-dialog" role="document">
	      <div class="modal-content">
	        <div class="modal-header">
	          <h5 class="modal-title" id="hewan1Label">Pertanyaan 1</h5>
	        </div>
	        <div class="modal-body">
	          Menara yang sudah terkenal oleh dunia yang berada di Paris adalah menara ?
	          <form action="" method="post">
	          <select name="jawaban" class="form-control">
	            <option value="jawaban1">Pissa</option>
	            <option value="jawaban2">Eifel</option>
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

		<!-- hewan 2 -->
	  <div class="modal fade" id="hewan2" tabindex="-2" role="dialog" aria-labelledby="hewan2Label" aria-hidden="true">
	    <div class="modal-dialog" role="document">
	      <div class="modal-content">
	        <div class="modal-header">
	          <h5 class="modal-title" id="hewan2Label">Pertanyaan 2</h5>
	        </div>
	        <div class="modal-body">
	          Pangakalan Angkatan Laut Amerika Serikat yang menjadi wisata di Hawaii bernama ?
	          <form action="" method="post">
	          <select name="jawaban" class="form-control">
	            <option value="jawaban1">Pearl Harbor</option>
	            <option value="jawaban2">Diamond Head</option>
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

		<!-- hewan 3 -->
	  <div class="modal fade" id="hewan3" tabindex="-3" role="dialog" aria-labelledby="hewan3Label" aria-hidden="true">
	    <div class="modal-dialog" role="document">
	      <div class="modal-content">
	        <div class="modal-header">
	          <h5 class="modal-title" id="hewan3Label">Pertanyaan 3</h5>
	        </div>
	        <div class="modal-body">
	          Fushimi Inari Taisha adalah kuil yang ada di ?
	          <form action="" method="post">
	          <select name="jawaban" class="form-control">
	            <option value="jawaban1">Kyoto, Jepang</option>
	            <option value="jawaban2">Tokyo, Jepang</option>
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

		<!-- hewan 4 -->
	  <div class="modal fade" id="hewan4" tabindex="-4" role="dialog" aria-labelledby="hewan4Label" aria-hidden="true">
	    <div class="modal-dialog" role="document">
	      <div class="modal-content">
	        <div class="modal-header">
	          <h5 class="modal-title" id="hewan4Label">Pertanyaan 4</h5>
	        </div>
	        <div class="modal-body">
	          Teluk Hanauma di Hawai berada di pulau bernama ?
	          <form action="" method="post">
	          <select name="jawaban" class="form-control">
	            <option value="jawaban1">Oahu</option>
	            <option value="jawaban2">Kuhio</option>
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


		<!-- hewan 5 -->
		<div class="modal fade" id="hewan5" tabindex="-5" role="dialog" aria-labelledby="hewan5Label" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="hewan5Label">Pertanyaan 5</h5>
					</div>
					<div class="modal-body">
						Nama lain dari Hagia Sophia di Istanbul adalah ?
						<form action="" method="post">
						<select name="jawaban" class="form-control">
							<option value="jawaban1">Hagya Sofya</option>
							<option value="jawaban2">Aya Sofya</option>
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


<!-- hewan 6 -->
    <div class="modal fade" id="hewan6" tabindex="-6" role="dialog" aria-labelledby="hewan6Label" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="hewan6Label">Pertanyaan 6</h5>
          </div>
          <div class="modal-body">
            Grand Palace adalah bangunan wisata di Thailand yang dibangun pada tahun
            <form action="" method="post">
            <select name="jawaban" class="form-control">
              <option value="jawaban1">1782</option>
              <option value="jawaban2">1872</option>
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

    <!-- hewan 7 -->
    <div class="modal fade" id="hewan7" tabindex="-7" role="dialog" aria-labelledby="hewan7Label" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="hewan7Label">Pertanyaan 7</h5>
          </div>
          <div class="modal-body">
            Di bawah ini yang merupakan makanan khas dari Thailand adalah
            <form action="" method="post">
            <select name="jawaban" class="form-control">
              <option value="jawaban1">Chai Tow Kway</option>
              <option value="jawaban2">Tom Yum Kung</option>
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

     <!-- hewan 8 -->
    <div class="modal fade" id="hewan8" tabindex="-8" role="dialog" aria-labelledby="hewan8Label" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="hewan8Label">Pertanyaan 8</h5>
          </div>
          <div class="modal-body">
            Seni Ikebana adalah kesenian merangkai bunga yang berasal dari
            <form action="" method="post">
            <select name="jawaban" class="form-control">
              <option value="jawaban1">Korea</option>
              <option value="jawaban2">Jepang</option>
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

    <!-- hewan 9 -->
    <div class="modal fade" id="hewan9" tabindex="-9" role="dialog" aria-labelledby="hewan9Label" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="hewan9Label">Pertanyaan 9</h5>
          </div>
          <div class="modal-body">
            Jalebi adalah makanan khas dari
            <form action="" method="post">
            <select name="jawaban" class="form-control">
              <option value="jawaban1">India</option>
              <option value="jawaban2">Rusia</option>
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

    <!-- hewan 10 -->
    <div class="modal fade" id="hewan10" tabindex="-10" role="dialog" aria-labelledby="hewan10Label" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="hewan10Label">Pertanyaan 10</h5>
          </div>
          <div class="modal-body">
            Pha That Luang atau Stupa emas terdapat di negara
            <form action="" method="post">
            <select name="jawaban" class="form-control">
              <option value="jawaban1">Laos</option>
              <option value="jawaban2">Vietnam</option>
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
        setTimeout(document.location.href='dasar3.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar3.php', 500);
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
        setTimeout(document.location.href='dasar3.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar3.php', 500);
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
        setTimeout(document.location.href='dasar3.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar3.php', 500);
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
        setTimeout(document.location.href='dasar3.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar3.php', 500);
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
        setTimeout(document.location.href='dasar3.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar3.php', 500);
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
        setTimeout(document.location.href='dasar3.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar3.php', 500);
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
        setTimeout(document.location.href='dasar3.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar3.php', 500);
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
        setTimeout(document.location.href='dasar3.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar3.php', 500);
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
        setTimeout(document.location.href='dasar3.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar3.php', 500);
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
        setTimeout(document.location.href='dasar3.php', 500);
      });
    </script>";
  }else{
    echo "<script>
      swal({
        title: 'Ups!',
        text: 'Jawaban Anda Salah. Pointmu berkurang 1',
        icon: 'error'
      }).then(function(){
        setTimeout(document.location.href='dasar3.php', 500);
      });
    </script>";
  }
}

?>

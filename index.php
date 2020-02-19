<?php
session_start();

require 'php/koneksi.php';

if(isset($_POST['kirim'])){
  $nama = addslashes(htmlspecialchars($_POST['nama']));
  $kode = time() . rand();

  mysqli_query($conn, "INSERT INTO users (nama, kode) VALUES ('$nama', '$kode')");

  $_SESSION['login'] = true;
  $_SESSION['kode'] = $kode;
  $_SESSION['nama'] = $nama;




}

function jamSekarang(){
	date_default_timezone_set("Asia/Jakarta");

	$b = time();
	$hour = date("G",$b);

	if ($hour>=0 && $hour<=11)
	{
	echo "Selamat Pagi";
	}
	elseif ($hour >=11 && $hour<=14)
	{
	echo "Selamat Siang ";
	}
	elseif ($hour >=15 && $hour<=17)
	{
	echo "Selamat Sore ";
	}
	elseif ($hour >=17 && $hour<=18)
	{
	echo "Selamat Petang ";
	}
	elseif ($hour >=19 && $hour<=23)
	{
	echo "Selamat Malam ";
	}
}

if(isset($_SESSION['login'])){
  $kode_user = $_SESSION['kode'];
  $query = mysqli_query($conn, "SELECT * FROM users WHERE kode = '$kode_user'");
  $data = mysqli_fetch_array($query);
  $ambilNama = $data['nama'];
  $hasilNamaDepan = implode(" ", array_slice(explode(" ", $ambilNama), 0, 1));
}


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Game Lautan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-11.css">
    <link rel="stylesheet" href="asset/css/style-1.css">
    <link rel="stylesheet" href="css/flickity-docs.css">
    <link rel="stylesheet" href="flickity.css" media="screen">
    <link rel="stylesheet" href="flickity.min.css" media="screen">


  </head>

  <body  class="page--index`">

    <?php
$querypoint = mysqli_query($conn, "SELECT * FROM users ORDER BY points DESC LIMIT 3");
 ?>
    <div class="point">
  <div class="top">
    <h1>Top 3 point</h1>
  </div>
  <?php while($data = mysqli_fetch_array($querypoint)){ ?>
    <p><?php echo $data['nama'] ?> = <?php echo $data['points']; ?> point</p>
  <?php } ?>
</div>


    <div class="hero-carousel" data-flickity="" data-js="hero-carousel" id="androver">
      <div class="hero-carousel__cell hero-carousel__cell--1">
        <div class="hero-carousel__cell__content">
          <a href="dasar2.php"><img class="island1" src="asset/img/island1.png"></a>
        </div>
      </div>

      <div class="hero-carousel__cell hero-carousel__cell--1">
        <div class="hero-carousel__cell__content">
          <a href="dasar.php"><img class="island2" src="asset/img/island2.png"></a>
        </div>
      </div>

      <div class="hero-carousel__cell hero-carousel__cell--1">
        <div class="hero-carousel__cell__content">
          <a href="dasar3.php"><img class="island3" src="asset/img/island3.png"></a>

        </div>
      </div>
    </div>

	<div class="primarysatu" id="webver">
        <div id="level1" class="page">
            <div class="island island-left" id="island-left">
                <div class="left-island"><img class="img-island" src="asset/img/island1.png"></div>
            </div>

            <div class="island island-right" id="island-right">
                <center><div class="right-island"><img class="img-island" src="asset/img/island3.png"></div><center>
            </div>
            <div class="island island-primary" id="island-main">
                <center><div class="main-island"><img class="img-island" src="asset/img/island2.png"></div><center>
            </div>

        </div>

        <div id="level2" class="page">

        </div>

        <div id="level3" class="page">

        </div>

    </div>

    <?php if(isset($_SESSION['login'])){ ?>
    <?php
    $kode_user = $_SESSION['kode'];
    $queryStatus = mysqli_query($conn, "SELECT * FROM users WHERE kode = '$kode_user'");
    $dataStatus = mysqli_fetch_array($queryStatus);
     ?>
     <?php if($dataStatus['status'] == 0){ ?>
       <div class="overlay">
           <div class="diver">
               <img class="main-diver" src="asset/img/diver.png">
           </div>
       </div>


       <div class="primary">
             <div id="level1" class="page">
                 <div class="island island-left" id="island-left">
                     <div class="left-island"><img class="img-island" src="asset/img/island1.png"></div>
                 </div>

                 <div class="island island-right" id="island-right">
                     <center><div class="right-island"><img class="img-island" src="asset/img/island3.png"></div><center>
                 </div>
                 <div class="island island-primary" id="island-main">
                     <center><div class="main-island"><img class="img-island" src="asset/img/island2.png"></div><center>
                 </div>

             </div>

             <div id="level2" class="page">

             </div>

             <div id="level3" class="page">

             </div>

         </div>
     <?php }else{ ?>
       <div class="primary">
             <div id="level1" class="page">
                 <div class="island island-left" id="island-left">
                    <a href="dasar2.php"><div class="left-island"><img class="img-island" src="asset/img/island1.png"></div></a>
                 </div>

                 <div class="island island-right" id="island-right">
                    <a href="dasar3.php"><center><div class="right-island"><img class="img-island" src="asset/img/island3.png"></div><center></a>
                 </div>
                 <div class="island island-primary" id="island-main">
                    <a href="dasar.php"> <center><div class="main-island"><img class="img-island" src="asset/img/island2.png"></div><center></a>
                 </div>

             </div>

             <div id="level2" class="page">

             </div>

             <div id="level3" class="page">

             </div>

         </div>
     <?php } ?>
   <?php } ?>

   <?php if(isset($_SESSION['login'])){ ?>
     <?php
     $kode_user = $_SESSION['kode'];
     $queryStatus = mysqli_query($conn, "SELECT * FROM users WHERE kode = '$kode_user'");
     $data = mysqli_fetch_array($queryStatus);
      ?>
     <?php if($data['status'] == 0){ ?>

   <!-- <section class="penutup-bg"></section> -->
   <section class="ucapan" id="ucapan">
     <form action="" method="post">
       <h1><?php echo jamSekarang(); ?>, <?php echo $hasilNamaDepan; ?></h1>
       <p>Yuk, menyelam sambil belajar!</p>
      <a href="dasar.php"><button type="button" name="kirim">Go</button></a>
   </form>
   </section>

  <?php } ?>

  <?php } ?>





    <?php if(!isset($_SESSION['login'])){ ?>
    <section class="penutup-bg"></section>
    <section class="input-nama" id="input-nama">
      <div class="top">
        <h3>Masukan Nama</h3>
      </div>
      <form action="" method="post">
      <div class="bottom">
        <input type="text" name="nama" placeholder="Nama Kamu">
      </div>
      <div class="aksi">
        <button type="submit" name="kirim">Kirim</button>
      </div>
    </form>
    </section>
    <?php } ?>




  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script src="asset/js/main.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript">

  $(".img-island").click(function() {
      $(".overlay").toggle();
      $(".primary").addClass("blur-filter");
      $("#ucapan").css("display", "block");
      $("#ucapan").css("transform", "translate(0,0)");
      $("#ucapan").css("opacity", "1");
  });

  $("#close").click(function(){
      $(".overlay").toggle();
      $(".primary").removeClass("blur-filter");
  });
  </script>
  </body>

  <script src="js/flickity-docs.min.js"></script>
</html>

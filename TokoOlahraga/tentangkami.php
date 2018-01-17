<?php require_once("koneksi.php");
    if (!isset($_SESSION)) {
        session_start();
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Produk</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<?php include"logo.php";?>
				<div class="span9">
					<div class="navbar navbar-inverse">
			    		<div class="navbar-inner">
			          		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			          		</a>
			      		   <?php include"menu.php" ?>
			        	</div>
			      	</div>
				</div>	
			</div>
		</div>	
	</header>
	

	<div id="page-title">
		<div id="page-title-inner">
			<div class="container">
				<h2><i class="ico-usd ico-white"></i>Keranjang</h2>
			</div>
		</div>	
	</div>
	<div id="wrapper">
		<div class="container">

            <div class="title"><h3>Tentang Kami</h3></div>
                <p> Halo sahabat yang luar biasa, pada kesempatan kali ini izinkan kami dari DolSport untuk memperkenalkan diri. Mudah-mudahan dengan adanya perkenalan ini sahabat-sahabat sekalian akan lebih senang berbelanja di toko online ini.</p>

         <p> Sungguh terhormat bagi kami, jika Anda datang ke toko ini dan bisa memperoleh banyak hal yang bermanfaat.<p>

         <p> DolSport  adalah sebuah toko yang menyediakan berbagai jenis peralatan olahraga. Bermula dari sebuah bangunan yang berlokasi di Jalan kotagede, toko kami akhirnya bisa menjangkau pasar yang lebih luas lagi melalui internet.</p>

        <p>Seiring dengan semakin berkembangnya teknologi, maka kami mencoba berinovasi dalam berbisnis. Salah satu bentuk inovasinya adalah dengan menyediakan berbagai layanan toko kami melalui media internet, dan toko online ini adalah salah satu bentuk pelayanan kami kepada Anda.</p>

        <p>DolSport  didirikan oleh Saya sendiri (faris auzan)  pada tahun 2017 . Keberadaan dari toko online ini diharapkan dapat mempermudah Anda untuk mendapatkan berbagai produk berkualitas tinggi namun dengan harga yang 
        terjangkau.</p>

        <p>Dalam memberi layanan, kami selalu mencoba memberi persembahan terbaik kepada siapapun. Selain itu kami juga selalu menjunjung tinggi nilai-nilai etika yang baik, seperti kejujuran, ketepatan, dan profesionalitas dalam berbisnis. Mudah-mudahan dengannya toko online kami bisa memberi banyak manfaat bagi Anda.</p>

        <p>Sekian dulu perkenalan ini. Semoga perkenalan ini bisa memberi inspirasi dan manfaat bagi Anda.</p>


        <p>DolSport </p>
		</div>
	  </div>
	</div>	
	
	<div id="copyright">
	<?php include"footer.php" ?>
		
	</div>	
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script def src="js/custom.js"></script>

</body>
</html>	
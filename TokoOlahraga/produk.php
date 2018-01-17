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
	<?php 
	if(empty($_GET['aksi'])) {
		include ("barang_tampil.php");
	} else {
		switch($_GET['aksi'])
		{
			case("barang"): include("barang_tampil.php");
			break;
			case("kategori"): include("data_kategori.php");
			break;
			case("pembelian"): include("pembelian.php");
			break;
		}}
	?>
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
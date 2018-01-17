<?php require_once("koneksi.php");
    if (!isset($_SESSION)) {
        session_start();
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<?php include"logo.php"; ?>
				<div class="span9">
					
					<div class="navbar navbar-inverse">
			    		<div class="navbar-inner">
			          		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			          		</a>
			          		<?php include "menu.php"; ?>
			        	</div>
			      	</div>
					
				</div>	
			</div>
		</div>		
	</header>
	<div class="slider-wrapper">
		
	</div>
	<div id="wrapper">
    	<div class="container">
      		<div class="row">
	               <?php
                    $sql = mysqli_query($koneksi, "SELECT * FROM barang ORDER BY idbarang DESC limit 9");
                    while($data = mysqli_fetch_array($sql)){
                    ?>
        		<div class="span4">
          			<div class="icons-box">
                        <div class="title"><h3><?php echo $data['namabarang']; ?></h3></div>
                        <img src="<?php echo "images/".$data['gambar']; ?>" />
						<div><h3>Rp.<?php echo number_format($data['harga'],2,",",".");?></h3></div>
						<div class="clear"><a href="detailbarang.php?kd=<?php echo $data['idbarang'];?>" class="btn btn-lg btn-danger">Detail</a> <a href="detailbarang.php?kd=<?php echo $data['idbarang'];?>" class="btn btn-lg btn-success">Beli &raquo;</a></div>
					
                    </div>
        		</div>
                <?php } ?>
      			</div>
				</div>
			</div>
			<hr>	
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
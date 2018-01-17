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
				<h2><i class="ico-stats ico-white"></i>Produk Detail Produk</h2>
			</div>
		</div>	
	</div>
	<div id="wrapper">
    	<div class="container">     
      		<div class="row">
            <div class="col-sm-6">
                    <?php                  
						$query = mysqli_query($koneksi, "SELECT * FROM barang WHERE idbarang='$_GET[kd]'");
						$data  = mysqli_fetch_array($query);
					?>
        		
                    <div class="hero-unit" style="margin-left: 20px;">
                    <table>
                        <tr>
                        <td colspan="4"><center><div class="title"><h3><?php echo $data['namabarang']; ?></h3></div></center></td>
                        </tr>
                        <tr>
						<td colspan="4"><center><img src="<?php echo "images/".$data['gambar']; ?>" width="100"/></center></td>
                        </tr>
                        <tr>
                        <td></td>
                        <td size="200"><h3>Harga</h3></td>
                        <td><h3>:</h3></td>
						<td><div><h3>Rp.<?php echo number_format($data['harga'],2,",",".");?></h3></div></td>
                        </tr>
                        <tr>
                        <td></td>
                        <td><h3>Stock</h3></td>
                        <td><h3>:</h3></td>
                        <td><div><h3><?php if ($data['stok'] >= 1){
	                           echo '<strong style="color: blue;">Stok Ada</strong>';	
                                } else {
	                           echo '<strong style="color: red;">Stok Kosong</strong>';	
                                }; ?></h3></div></td>
                        </tr>
                        <tr>
                        <td></td>
                        <td><h3>Warna</h3></td>
                        <td><h3>:</h3></td>
                        <td><div><h3><?php echo $data['warna']; ?></h3></div></td>
                        </tr>
                        <tr>
                        <td></td>
                        <td><h3>Keterangan</h3></td>
                        <td><h3>:</h3></td>
                        <td><div><h3><?php echo $data['deskripsi']; ?></h3></div></td>
                        </tr>
                        <tr>
                        <td></td>
                        <td></td>
                        <td></td>
						<td><div class="clear"> 
						<a href="produk.php?aksi=pembelian" class="btn btn-lg btn-danger">Beli</a></div></td>
                        </tr>
                    </table>
                    </div>
      		      </div>
				</div>	
				</div>
				
                </div>
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
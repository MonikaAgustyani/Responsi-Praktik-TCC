	<div id="page-title">
		<div id="page-title-inner">
			<div class="container">
				<h2><i class="ico-stats ico-white"></i>Produk Kami</h2>
			</div>
		</div>	
	</div>
	<div id="wrapper">
	<?php include "koneksi.php";
				$kd= $_GET['kode'];
				$query = mysqli_query($koneksi,"select * from barang where idkategori ='$kd' ORDER BY idbarang DESC");
	?>
    	<div class="container"> 
      		<div class="row">
			<?php while($data=mysqli_fetch_array($query)){ ?>
        		<div class="span4">
          			<div class="icons-box">
                        <div class="title"><h3><?php echo $data['namabarang']; ?></h3></div>
                        <img src="<?php echo "images/".$data['gambar']; ?>" />
						<div><h3>Rp.<?php echo number_format($data['harga'],2,",",".");?></h3></div>
						<div class="clear"><a href="detailproduk.php?hal=detailbarang&kd=<?php echo $data['idbarang'];?>" class="btn btn-lg btn-danger">Detail</a> <a href="detailproduk.php?hal=detailbarang&kd=<?php echo $data['idbarang'];?>" class="btn btn-lg btn-success">Beli</a></div>
                    </div>
        		</div><?php }?>
      		</div>
      		
		</div>	
	</div>
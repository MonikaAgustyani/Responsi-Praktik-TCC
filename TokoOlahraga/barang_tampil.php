<div id="page-title">
		<div id="page-title-inner">
			<div class="container">
				<h2><i class="ico-stats ico-white"></i>Produk Kami</h2>
			</div>
		</div>	
	</div>
	<div id="wrapper">
    	<div class="container"> 
      		<div class="row">
      		<div class="row">
      		<form action="produk.php" method="post">
				<div class="col-md-6">
					<input type="text" name="nama_barang" placeholder="Masukkan keyword pencarian barang" />
				</div>
				<div class="col-md-6">
					<button class="btn btn-success" type="submit" name="cari">Cari</button>
				</div>
				</form>
			</div>
			
			<?php
				if(isset($_POST['cari'])){
					$key = $_POST['nama_barang'];
					$sql = mysqli_query($koneksi, "SELECT * FROM barang WHERE namabarang LIKE '%$key%' ORDER BY idbarang DESC");
				}
				else {
					$sql = mysqli_query($koneksi, "SELECT * FROM barang ORDER BY idbarang DESC");
				}
				
				if(mysqli_num_rows($sql) == 0){
					echo "Tidak ada produk!";
				}else{
					while($data = mysqli_fetch_assoc($sql)){
            ?>
        		<div class="span4">
          			<div class="icons-box">
                        <div class="title"><h3><?php echo $data['namabarang']; ?></h3></div>
                        <img src="<?php echo "images/".$data['gambar']; ?>" />
						<div><h3>Rp.<?php echo number_format($data['harga'],2,",",".");?></h3></div>
						<div class="clear"><a href="detailbarang.php?kd=<?php echo $data['idbarang'];?>" class="btn btn-lg ">Detail</a> <a href="detailbarang.php?kd=<?php echo $data['idbarang'];?>" class="btn btn-lg btn-success">Beli</a></div>
                    </div>
        		</div>
            <?php   
              	}
              }  
            ?>
      		</div>
		  </div>			
		</div>
				
			          		<div class="nav-collapse collapse">
			            		<ul class="nav">
			              			<li><a href="index.php">Beranda</a></li>
			              			<li><a href="produk.php">Produk Kami</a></li>
                                    <li><a href="tentangkami.php">Tentang Kami</a></li>
			              			<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategori<b class="caret"></b></a>
			                			
			                		<?php
										include "Connections/koneksi.php";
										$data=mysqli_query($koneksi,"select * from kategori");
									?>
									<ul class="dropdown-menu">
										<?php while($row=mysqli_fetch_array($data)){ ?>
			                  				<li><a href="produk.php?aksi=kategori&kode=<?php echo $row['idkategori']; ?>"><?php echo $row['nama']; ?></a></li>
			                  		<?php }?>
			                			</ul>
			              			</li>
			              			
			              			<li class="dropdown">
			                			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin<b class="caret"></b></a>
			                			<ul class="dropdown-menu">

			                			<?php 
										if(isset($_SESSION['username'])){
											include "koneksi.php";
										?>	
											<li><a href="halamanadmin.php">Halaman Admin</a></li>
			                				<li><a href="logout.php">Keluar</a></li>
			                			<?php
										}else{
										?>
			                  				<li><a href="halamanadmin.php">Masuk</a></li>
			                  			<?php }  ?>
			                			</ul>
			              			</li>
			            		</ul>
			          		</div>
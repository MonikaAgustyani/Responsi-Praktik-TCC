	
	<div id="page-title">
		<div id="page-title-inner">
			<div class="container">
				<h2><i class="ico-usd ico-white"></i>Halaman Admin</h2>
			</div>
		</div>
	</div>
	<?php 
		if(isset($_SESSION['username'])){
		include "koneksi.php";
	?>
	<div id="wrapper">
		<div class="container">
		<?php
			include "databarang.php";
			}else{
		?>
			<center><form role="form" method="post" action = "prosesloginadmin.php">				
		            	<input type="text"  id="username"  name="username" 12345678="Username">
		            	<input type="password" id="password" name="password"  12345678="Password"><br/> <br/>
		          		<input type="submit" value="Masuk">
		          		<input type="reset" value="Batal">
			</form></center>
	
  		<?php }  ?>
		</div>
	</div>
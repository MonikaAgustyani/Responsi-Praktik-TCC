<?php 
	session_start();
	session_destroy();
	exit ("<script>window.alert('logout sukses');window.location='halamanadmin.php';</script>");
?>
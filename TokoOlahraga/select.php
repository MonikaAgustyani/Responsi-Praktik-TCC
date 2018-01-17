<?php 
if(empty($_GET['aksi'])) {
	include ("login-admin.php");
} else {
	switch($_GET['aksi'])
	{
		case("login"): include("login-admin.php");
		break;
		case("databarang"): include("databarang.php");
		break;
		case("tambahbarang"): include("tambahbarang.php");
		break;
		case("editbarang"): include("editbarang.php");
		break;
	}}
?>
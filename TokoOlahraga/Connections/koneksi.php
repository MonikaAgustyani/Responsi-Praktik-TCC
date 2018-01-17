<?php
$db_host = "172.17.0.1";
$db_user = "root";
$db_pass = "root";
$db_name = "olahraga";


$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_error()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}
?>

<?php
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$username' AND password='$password'");
$data = mysqli_fetch_array($query);

if ($data >= 1){
	session_start();
	$_SESSION['username']    = $username;
	$_SESSION['password']    = $password;
    
	exit("<script>alert('Selamat datang $username'); window.location = 'halamanadmin.php'</script>");	
} else {
	exit("<script>alert('Username dan Password tidak valid.'); window.location = 'loginadmin.php'</script>");	
}
?>
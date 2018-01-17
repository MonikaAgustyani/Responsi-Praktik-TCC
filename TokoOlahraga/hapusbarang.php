<?php
include"koneksi.php";
$idbarang = $_GET['idbarang'];
$sql = mysqli_query($koneksi,"delete from barang where idbarang='$idbarang'") or die("Gagal menghapus data.");
 mysqli_close($koneksi);

exit("<script>alert('Data Berhasil Di Hapus'); window.location = 'halamanadmin.php'</script>");
?>

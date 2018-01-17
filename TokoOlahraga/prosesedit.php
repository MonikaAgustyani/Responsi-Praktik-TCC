<?php
	if(isset($_POST['idbarang'])){
		$idbarang = $_POST['idbarang'];
		$foto_lama = $_POST['foto_lama'];
		$simpan = "EDIT";
	}else{
		$simpan = "BARU";
	}
$namabarang	= $_POST ['namabarang'];
$harga	= $_POST ['harga'];
$stok 	= $_POST['stok'];
$warna 	= $_POST['warna'];
$ukuran = $_POST['ukuran'];
$idkategori = $_POST['idkategori'];
$deskripsi 	= $_POST['deskripsi'];

$foto	= $_FILES['foto']['name'];
$tmpName = $_FILES['foto']['tmp_name'];
$size	= $_FILES['foto']['size'];
$type	= $_FILES['foto']['type'];

$maxsize	= 1500000;
$typeYgBoleh = array("image/jpeg","image/png","image/pjpeg");

$dirFoto	= "images";
if(!is_dir($dirFoto))
mkdir($dirFoto);
$fileTujuanFoto = $dirFoto."/".$foto;


$dataValid="YA";

if ($size > 0 ){
if ($size > $maxsize) {
echo "Ukuran File Terlalu Besar <br/>";
$dataValid="TIDAK";
}
if(!in_array($type, $typeYgBoleh)){
echo "Type File Tidak Dikenal <br/>";
$dataValid="TIDAK";
}
}

include "koneksi.php";

if($simpan == "EDIT"){
	if($size == 0){
		$foto = $foto_lama;
	}
	$sql = mysqli_query($koneksi,"update barang set
			namabarang = '$namabarang' ,
			harga = '$harga' ,
			stok = '$stok' ,
			gambar = '$foto',
			warna = '$warna',
			ukuran = '$ukuran',
			idkategori = '$idkategori',
			deskripsi = '$deskripsi'
			where idbarang = $idbarang");
}else{
	$sql = mysqli_query($koneksi,"insert into barang
			(namabarang,harga,stok,gambar,warna,ukuran,idkategori,deskripsi)
			values
			('$namabarang',$harga,$stok,'$foto',$warna',$ukuran',$idkategori',$deskripsi') ");
}

$data = $sql or die (mysqli_error("gagal!"));
if (!$data){
echo "Gagal Simpan Silahkan Ulangi!</br>";
echo "<input type='button' value='Kembali'
onClick='self.history.back()'>";
exit;
}else {
exit("<script>alert('Data Berhasil Diubah'); window.location = 'halamanadmin.php'</script>");
}

if ($size > 0) {
if (!move_uploaded_file($tmpName, $fileTujuanFoto)){
echo "Gagal Upload Gambar..<br/>";
exit;
} else{
	exit("<script>alert('Data berhasil di perbaharui'); windows.location = 'halamanadmin.php'</script>");
}
}

?>

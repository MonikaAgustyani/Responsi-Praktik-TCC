<?php
  include"koneksi.php";
  $idbarang=$_POST['idbarang'];
  $nmbarang=$_POST['nmbarang'];
  $harga=$_POST['harga'];
  $stok=$_POST['stok'];
  $warna=$_POST['warna'];
  $ukuran=$_POST['ukuran'];
  $kategori=$_POST['kategori'];
  $deskripsi=$_POST['deskripsi'];

  $foto = $_FILES['foto']['name'];
  $tmpName = $_FILES['foto']['tmp_name'];
  $size = $_FILES['foto']['size'];
  $type = $_FILES['foto']['type'];

  $maxsize = 2500000;
  $typeYgBoleh = array("image/jpeg","image/png","image/pjpeg");

  $dirFoto = "images";
  if(!is_dir($dirFoto))
    mkdir($dirFoto);
  $fileTujuanFoto = $dirFoto."/".$foto;

  $dataValid = "YA";

  if($size > 0){
    if($size > $maxsize){
      echo "Ukuran File Terlalu Besar<br />";
      $dataValid="TIDAK";
    }
    if(!in_array($type, $typeYgBoleh)){
      echo "Type File Tidak Dikenal<br />";
      $dataValid = "TIDAK";
    }
  }

  if (empty($idbarang))
  {             
     die("Isikan Kode Barang!");
  }
  else if(empty($nmbarang))
  {
     die("Isikan  Nama Barang!");
  }
  else if(empty($harga))
  {
     die("Isikan  Harga Barang!");
  }
  else if(empty($stok))
  {
     die("Isikan  Stok Barang!");
  }
  else if(empty($kategori))
  {
     die("Isikan  Kategori Barang!");
  }
  else if(empty($deskripsi))
  {
     die("Isikan  Deskripsi Barang!");
  }
  else
  {
    $cek_id=mysqli_query($koneksi,"select  idbarang from barang where idbarang='$idbarang'");
     $ada=$cek_id  or die (mysqli_error("gagal!"));
     if(mysqli_num_rows($ada)>0)
     { die("Id Sudah Ada!"); }

  $sql = mysqli_query($koneksi,"insert into barang (idbarang, namabarang, harga, stok, gambar, warna, ukuran, idkategori, deskripsi) values ('$idbarang', '$nmbarang', '$harga', '$stok', '$foto', '$warna', '$ukuran', '$kategori', '$deskripsi')");
  $data=$sql or die (mysqli_error("gagal!"));
  if(!$data){
    echo "Gagal Simpan, silahkan diulangi! <br />";
    echo mysqli_error($kon);
    echo "<br/><input type='button' value='Kembali' onClick='self.history.back()'>";
    exit;
  } else {
    
  }
  }
  if($size > 0){
    if(!move_uploaded_file($tmpName, $fileTujuanFoto)){
      echo "Gagal Upload Gambar..<br />";
      exit;
    } else {
      exit("<script>alert('Data Berhasil Ditambahkan'); window.location = 'halamanadmin.php'</script>");
    }

  }
?>
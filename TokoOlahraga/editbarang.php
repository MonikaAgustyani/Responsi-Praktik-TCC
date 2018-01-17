<div class="container">
  <h2><i class="ico-usd ico-white"></i>Tambah Data</h2>
</div>  
  <div id="wrapper">
    <div class="container">
    <?php
    $idbarang = $_GET["idbarang"];
    include"koneksi.php";

    $sql = mysqli_query($koneksi,"select * from barang where idbarang = '$idbarang'");
    $data = mysqli_fetch_array($sql);

    $namabarang = $data["namabarang"];
    $harga = $data["harga"];
    $stok = $data["stok"];
    $foto = $data["gambar"];
    $warna = $data["warna"];
    $ukuran = $data["ukuran"];
    $idkategori = $data["idkategori"];
    $deskripsi = $data["deskripsi"];
    ?>
    <form action="prosesedit.php" method="post" enctype="multipart/form-data">
    <table class="table table-condensed">
    <tr>
        <td><label for="Kode Barang">Kode Barang</label></td>
        <td><input type="hidden" name="idbarang" value="<?php echo $idbarang;?>"/></td>
    </tr>
    <tr>
        <td><label for="Nama Barang">Nama Barang</label></td>
        <td><input type="text" name="namabarang" value="<?php echo $namabarang; ?>"/></td>
    </tr>
    <tr>
        <td><label for="Harga Barang">Harga Barang</label></td>
        <td><input type="text" name="harga" value="<?php echo $harga; ?>"/></td>
    </tr>
    <tr>
        <td><label for="Stok Barang">Stok</label></td>
        <td><input type="text" name="stok"value="<?php echo $stok;?>"/></td>
    </tr>
    <tr>
        <td><label for="Warna Barang">Warna</label></td>
        <td><input type="text" name="warna"value="<?php echo $warna;?>"/></td>
    </tr>
    <tr>
        <td><label for="Ukuran">Ukuran</label></td>
        <td><input type="text" name="ukuran"value="<?php echo $ukuran;?>"/></td>
    </tr>
    <tr>
        <td><label for="Warna Barang">Kategori</label></td>
        <td><input type="text" name="idkategori"value="<?php echo $idkategori;?>"/></td>
    </tr>
    <tr>
        <td><label for="Deskripsi Barang">Deskripsi</label></td>
        <td><textarea name ="deskripsi"><?php echo $deskripsi ?></textarea>
        </td>
    </tr>
    <tr>
        <td><label for="Gambar">Gambar</label></td>
        <td>
            <input type="file" name="foto">
            <input type="hidden" name="foto_lama" value="<?php echo $foto;?>"/>
            <img src="<?php echo "images/".$foto; ?>" width="100px"/>
        </td>
    </tr>
    <tr>
        <td><input type="submit" value="Simpan" name="finish"  class="btn btn-sm btn-primary"/>
        <input type='button' value='Kembali' onClick='self.history.back()' class="btn btn-sm btn-primary">
      
    </tr>
    </table>
    </form>
    </div>
  </div>
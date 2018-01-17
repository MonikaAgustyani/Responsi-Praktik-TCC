<div class="container">
  <h2><i class="ico-usd ico-white"></i>Tambah Data</h2>
</div>  
  <div id="wrapper">
    <div class="container">
    <form action="prosestambahbarang.php" method="post" enctype="multipart/form-data">
    <table class="table table-condensed">
    <tr>
        <td><label for="Kode Barang">Kode Barang</label></td>
        <td><input name="idbarang" type="text" maxlength="11" size="200" /></td>
    </tr>
    <tr>
        <td><label for="Nama Barang">Nama Barang</label></td>
        <td><input name="nmbarang" type="text" class="required" size="200" /></td>
    </tr>
    <tr>
        <td><label for="Harga Barang">Harga Barang</label></td>
        <td><input name="harga" type="text" size="200" /></td>
    </tr>
    <tr>
        <td><label for="Stok Barang">Stok</label></td>
        <td><input name="stok" type="text" size="200" /></td>
    </tr>
    <tr>
        <td><label for="Warna Barang">Warna</label></td>
        <td><input name="warna" type="text" size="200" /></td>
    </tr>
    <tr>
        <td><label for="Ukuran">Ukuran</label></td>
        <td><input name="ukuran" type="text" size="200" /></td>
    </tr>

    <?php 
    include"koneksi.php";
    $sql = mysqli_query($koneksi,"SELECT * FROM kategori");
    ?>
    <tr>
        <td><label for="Warna Barang">Kategori</label></td>
        <td><select name="kategori">
            <?php
                while($data=mysqli_fetch_array($sql)){ ?>
                <option  value="<?php echo $data['idkategori'];?>"><?php echo $data['nama']; ?></option>
                <?php } ?> 
            </select>
        </td>
    </tr>

    <tr>
        <td><label for="Deskripsi Barang">Deskripsi</label></td>
        <td><textarea name="deskripsi" type="text" size="200" /> </textarea></td>
    </tr>
    <tr>
        <td><label for="Gambar">Gambar</label></td>
        <td><input name="foto" type="file" size="200" /></td>
    </tr>
    <tr>
        <td><input type="submit" value="Tambah Data" name="finish"  class="btn btn-sm btn-primary"/>
        <input type='button' value='Kembali' onClick='self.history.back()' class="btn btn-sm btn-primary">
    </tr>
    </table>
    </form>
    </div>
  </div>
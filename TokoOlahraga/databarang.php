 <div id="wrapper">
   <a href="halamanadmin.php?aksi=tambahbarang" class="btn btn-xs btn-success">Tambah Data Barang</a> <br>
    <div class="container">
    <?php
      include"koneksi.php";
      $query = mysqli_query($koneksi,"select * from barang") or die("Gagal melakukan query.");
      while ($data = mysqli_fetch_array($query)) {
    ?>
    <table class="table table-hover table-condensed">
        <tr>
          <th><center>Kode Barang</center></th>
          <th><center>Nama Barang</center></th>
          <th><center>Harga</center></th>
          <th><center>Stok</center></th>
          <th><center>Gambar</center></th>
          <th><center>Warna</center></th>
          <th><center>Ukuran</center></th>
          <th><center>Kategori</center></th>
          <th><center>Deskripsi</center></th>
          <th><center>Opsi</center></th>
        </tr>
        <tr>
          <td><center><?php echo $data['idbarang'];?></center></td>
          <td><center><?php echo $data['namabarang'];?></center></td>
          <td><center><?php echo number_format($data['harga']); ?></center></td>
          <td><center><?php echo $data['stok']; ?></center></td>
          <td><center><img src=<?php echo "images/".$data['gambar']; ?> alt="" width="100"/></center></td>
          <td><center><?php echo $data['warna']; ?></center></td>
          <td><center><?php echo $data['ukuran']; ?></center></td>
          <td><center><?php echo $data['idkategori']; ?></center></td>
          <td><center><?php echo $data['deskripsi']; ?></center></td>
          <td><center>
                <a href="halamanadmin.php?aksi=editbarang&idbarang=<?php echo $data['idbarang']; ?>" class="btn btn-xs btn-warning">Edit</a> 
                <a href="hapusbarang.php?idbarang=<?php echo $data['idbarang']; ?>" onclick="return confirm('apakah anda yakin akan menghapus?')" class="btn btn-xs btn-danger">Hapus</a>
              </center>
          </td>
        </tr>
      </table>
    <?php
      };
      mysqli_close($koneksi);
    ?>

    </div>
  </div>
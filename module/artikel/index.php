<?php require('../../template/header.php'); ?>
<?php
include("../../class/koneksi.php");

// query untuk menampilkan data
$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Data Barang</title>
</head>
<body>
    <div class="container">
        <h1>Data Barang</h1>
        <div class="main">
        <a class="tambah" href="tambah.php">Tambah Barang</a>
    <table>
    <tr>
        <th>Gambar</th>
        <th>Nama Barang</th>
        <th>Katagori</th>
        <th>Harga Jual</th>
        <th>Harga Beli</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>
    <?php if($result): ?>
    <?php while($row = mysqli_fetch_array($result)): ?>
    <tr>
        <td><img src="gambar/<?= $row['gambar'];?>" alt="<?=
$row['nama'];?>"></td>
        <td><?= $row['nama'];?></td>
        <td><?= $row['kategori'];?></td>
        <td><?= $row['harga_beli'];?></td>
        <td><?= $row['harga_jual'];?></td>
        <td><?= $row['stok'];?></td>
        <td class="aksi">
            <a class="ubah" href="ubah.php?id=<?= $row['id_barang']; ?>">Ubah</a>
            <a class="hapus" href="delete.php?id=<?= $row['id_barang']; ?>">Hapus</a>
        </td>
    </tr>
    <?php endwhile; else: ?>
    <tr>
        <td colspan="7">Belum ada data</td>
     </tr>
        <?php endif; ?>
        </table>
    </div>
    </div>
    <style>
    	body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  margin: 0;
  padding: 0;
}

h1 {
  text-align: center;
}

.main {
  margin-top: 20px;
}

.tambah {
  display: inline-block;
  padding: 15px 15px;
  background-color: #0151f2;
  color: #fff;
  text-decoration: none;
  border-radius: 10px;
}

.table, td, th {
    border: 1px solid;
    border: 1px solid #ddd;
    padding: 12px;
    text-align: left;
  }
  
  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 15px;
  }

  img {
    max-width: 80px;
    height: auto;
}
    </style>
</body>
</html>
<?php require('../../template/footer.php'); ?>
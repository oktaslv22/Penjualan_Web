<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Cat</title>
</head>
<body>

<div class="container">
    <h1>Data Cat</h1>
    <a href="tambahdata.php">Tambah Data</a><br><br>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
	            <th>Stok</th>
	            <th>Harga</th>
	            <th>Ukuran</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>   
<?php
  // Include / load file koneksi.php
  include "koneksicat.php";
  // Buat query untuk menampilkan semua data siswa
  $sql = $pdo->prepare("SELECT * FROM cat");
  $sql->execute(); // Eksekusi querynya
  while($data = $sql->fetch()){ // Ambil semua data dari hasil eksekusi $sql
    echo "<tr>";
    echo "<td>".$data['id']."</td>";
    echo "<td>".$data['namabarang']."</td>";
    echo "<td>".$data['stok']."</td>";
    echo "<td>".$data['harga']."</td>";
    echo "<td>".$data['ukuran']."</td>";
    echo "<td><a href='ubahdata.php?id=".$data['id']."'>Ubah</a></td>";
    echo "<td><a href='proseshapus.php?id=".$data['id']."'>Hapus</a></td>";
    echo "</tr>";
  }
?>     
    </table>
</div>

</body>
</html>
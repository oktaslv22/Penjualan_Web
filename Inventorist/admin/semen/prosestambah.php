<?php
include "koneksi.php";
$no = $_POST['id'];
$namabarang = $_POST['namabarang'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$sql = $pdo->prepare("INSERT INTO semen(id, namabarang, stok, harga) VALUES(:id,:namabarang,:stok,:harga)");
$sql->bindParam(':id', $no);
$sql->bindParam(':namabarang', $namabarang);
$sql->bindParam(':stok', $stok);
$sql->bindParam(':harga', $harga);
$sql->execute(); 

if($sql){ 
  header("location: indexsemen.php"); // Redirect ke halaman index.php
}else{
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='tambahdata.php'>Kembali Ke Form</a>";
}
?>
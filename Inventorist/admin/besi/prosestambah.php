<?php
include "koneksi.php";
$no = $_POST['id'];
$namabarang = $_POST['namabarang'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$ukuran = $_POST['ukuran'];
$sql = $pdo->prepare("INSERT INTO besi(id, namabarang, stok, harga, ukuran) VALUES(:id,:namabarang,:stok,:harga,:ukuran)");
$sql->bindParam(':id', $no);
$sql->bindParam(':namabarang', $namabarang);
$sql->bindParam(':stok', $stok);
$sql->bindParam(':harga', $harga);
$sql->bindParam(':ukuran', $ukuran);
$sql->execute(); 

if($sql){ 
  header("location: indexbesi.php"); 
}else{
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='tambahdata.php'>Kembali Ke Form</a>";
}
?>
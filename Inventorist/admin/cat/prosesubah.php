<?php
include "koneksicat.php";
$id = $_GET['id'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];
$sql = $pdo->prepare("UPDATE cat SET id=:id, stok=:stok, harga=:harga WHERE id=:id");
$sql->bindParam(':stok', $stok);
$sql->bindParam(':harga', $harga);
$sql->bindParam(':id', $id);
$execute = $sql->execute(); 
if($execute){ 
  header("location: indexcat.php"); 
}else{
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='ubahdata'>Kembali Ke Form</a>";
}
?>
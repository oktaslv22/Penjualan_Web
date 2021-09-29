<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = $pdo->prepare("DELETE FROM besi WHERE id=:id");
$sql->bindParam(':id', $id);
$execute = $sql->execute(); 
if($execute){ 
  header("location: indexbesi.php"); 
}else{
  echo "Data gagal dihapus. <a href='indexbesi.php'>Kembali</a>";
}
?>
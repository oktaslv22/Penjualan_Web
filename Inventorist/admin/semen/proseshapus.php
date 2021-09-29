<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = $pdo->prepare("DELETE FROM semen WHERE id=:id");
$sql->bindParam(':id', $id);
$execute = $sql->execute(); 
if($execute){ 
  header("location: indexsemen.php"); 
}else{
  echo "Data gagal dihapus. <a href='indexsemen.php'>Kembali</a>";
}
?>
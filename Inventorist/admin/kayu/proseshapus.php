<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = $pdo->prepare("DELETE FROM lis_kayu WHERE id=:id");
$sql->bindParam(':id', $id);
$execute = $sql->execute(); 
if($execute){ 
  header("location: indexkayu.php"); 
}else{
  echo "Data gagal dihapus. <a href='indexkayu.php'>Kembali</a>";
}
?>
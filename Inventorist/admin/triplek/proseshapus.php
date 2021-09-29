<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = $pdo->prepare("DELETE FROM triplek WHERE id=:id");
$sql->bindParam(':id', $id);
$execute = $sql->execute(); 
if($execute){ 
  header("location: indextriplek.php"); 
}else{
  echo "Data gagal dihapus. <a href='indextriplek.php'>Kembali</a>";
}
?>
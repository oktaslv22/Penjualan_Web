<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = $pdo->prepare("DELETE FROM pipa WHERE id=:id");
$sql->bindParam(':id', $id);
$execute = $sql->execute(); 
if($execute){ 
  header("location: indexpipa.php"); 
}else{
  echo "Data gagal dihapus. <a href='indexpipa.php'>Kembali</a>";
}
?>
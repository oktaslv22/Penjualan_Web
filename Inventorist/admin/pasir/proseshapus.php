<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = $pdo->prepare("DELETE FROM pasir WHERE id=:id");
$sql->bindParam(':id', $id);
$execute = $sql->execute(); 
if($execute){ 
  header("location: indexpasir.php"); 
}else{
  echo "Data gagal dihapus. <a href='indexpasir.php'>Kembali</a>";
}
?>
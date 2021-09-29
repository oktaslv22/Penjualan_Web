<?php
// Load file koneksi.php
include "koneksicat.php";
// Ambil data ID yang dikirim oleh index.php melalui URL
$id = $_GET['id'];
// Query untuk menghapus data siswa berdasarkan ID yang dikirim
$sql = $pdo->prepare("DELETE FROM cat WHERE id=:id");
$sql->bindParam(':id', $id);
$execute = $sql->execute(); // Eksekusi / Jalankan query
if($execute){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: indexcat.php"); // Redirect ke halaman index.php
}else{
  // Jika Gagal, Lakukan :
  echo "Data gagal dihapus. <a href='indexcat.php'>Kembali</a>";
}
?>
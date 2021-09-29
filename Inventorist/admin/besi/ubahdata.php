<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Besi</title>
</head>
<body>
<h1>Update Data Besi</h1>
  <?php
  include "koneksi.php";
  $id = $_GET['id'];
  $sql = $pdo->prepare("SELECT * FROM besi WHERE id=:id");
  $sql->bindParam(':id', $id);
  $sql->execute();
  $data = $sql->fetch();
  ?>
  <form method="post" action="prosesubah.php?id=<?php echo $id; ?>">
    <table cellpadding="8">
        <tr>
            <td>Stok</td>
            <td><input type="text" name="stok" value="<?php echo $data['stok']; ?>"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="text" name="harga" value="<?php echo $data['harga']; ?>"></td>
        </tr>
    </table>
    <hr>
    <input type="submit" value="Ubah">
    <a href="indexcat.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>



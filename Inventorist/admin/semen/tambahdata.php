<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Semen</title>
</head>
<body>
<h1>Tambah Data Semen</h1>
<form method="post" action="prosestambah.php">
    <table cellpadding="8">
        <tr>
            <td>No</td>
            <td><input type="text" name="id"></td>
        </tr>
        <tr>
            <td>Nama Barang</td>
            <td><input type="text" name="namabarang"></td>
        </tr>
        <tr>
            <td>Stok Barang</td>
            <td><input type="text" name="stok"></td>
        </tr>
        <tr>
            <td>Harga Barang</td>
            <td><textarea name="harga"></textarea></td>
        </tr>
    </table>
    <hr>
    <input type="submit" value="Simpan">
    <a href="indexsemen.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>




<?php

$server="localhost:3307";
$user="root";
$pass="";
$database_name="online_store";

$koneksi=mysqli_connect($server, $user, $pass, $database_name);
if ($koneksi){
        echo "dapat terhubung";

    }
else{
    echo "Mysql tidak terhubung";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang</title>
</head>
<body>
    <h1>Tambah Barang</h1>
    <form action="simpan_barang.php" method="POST">
        Nama Barang: <input type="text" name="nama_barang"><br>
        Harga: <input type="text" name="harga"><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
<body>Alogoritma pemrograman<>/a>database_name@abstract
 dengan ini menyatakan bahwa semua han</body>
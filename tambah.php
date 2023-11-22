<?php
$conn = mysqli_connect("localhost","root","","online_store");
if(isset($_POST["submit"])){
    $kodebarang = $_POST["kodebarang"];
    $namabarang = $_POST["namabarang"];
    $gambar = $_POST["gambar"];
    $hargajual = $_POST["hargajual"];
    $stokbarang = $_POST["stokbarang"];


    $query = "INSERT INTO online_store
        VALUES
            ('','$kodebarang','$namabarang','$gambar','$hargajual','$stokbarang')
            ";
        mysqli_query($conn,$query);
    
}
?>
<?php
include_once("../conn/db_connect.php");

$id =$_GET['idProduk'];
$result = mysqli_query($koneksi, "DELETE FROM produk WHERE idProduk=$id");

header("location: index.php?page=stok");
?>
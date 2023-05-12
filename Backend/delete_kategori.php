<?php
require_once 'dbkoneksi.php';
$delete = $_GET['iddel'];
$sql = "DELETE FROM kategori_produk WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$delete]);

header('location:kategori_produk.php');
?>
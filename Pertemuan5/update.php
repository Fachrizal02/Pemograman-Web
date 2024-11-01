<?php
include "koneksi.php";

$id = $_GET['id'];
$npm = $_POST['Npm'];
$nama = $_POST['nama'];
$query = "UPDATE biodata SET npm='$npm', nama='$nama' where id='$id'"; 
$mysqli->query($query);
header('location:index.php');
?>
<?php

include '../koneksi.php';

if(isset($_POST['simpan']))
{
    $id_user = $_POST['id'];
    $nama_user = $_POST['nama'];
    $usia = $_POST['usia'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id_level = 3;
    
    $sql = "INSERT INTO user (id, nama, usia, username, password, id_level)
    VALUES ('$id_user', '$nama_user', '$usia', '$username', '$password', $id_level)";

$res = mysqli_query($koneksi, $sql);

$count = mysqli_affected_rows($koneksi);

if($count == 1){
    header("Location: index.php");
 }else {
    header("Location: registrasi.php");
 }
 
}
else 
{
    header("Location: registrasi.php");    
}

?>

<?php
session_start();
include '../koneksi.php';

if(isset($_POST['btnlogin']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT id_user, nama_user FROM user 
    WHERE username='$username' AND password='$password'";
$res = mysqli_query($koneksi, $sql);

$count = mysqli_affected_rows($koneksi);

if($count == 1)
    {
        $data_login = mysqli_fetch_assoc($res);
        
        $_SESSION['id_user'] = $data_login['id_user']; 
        //nilainya digunakan waktu insert peminjaman
        
        $_SESSION['nama_user'] = $data_login['nama']; 
        //nilainya bisa digunakan di navbar, mis. 'Hai, [nama_petugas]'

        header("Location: http://localhost/corona_web/index-tampilan.php");
    }
    else
    {   
        header("Location: http://localhost/corona_web/login/index.php");
    }

}
?>

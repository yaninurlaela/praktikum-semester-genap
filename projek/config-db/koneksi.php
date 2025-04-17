<?php
// membuat koneksi 
$konek_db = new mysqli("localhost","root","","evaluasi");
// periksa koneksi
if($konek_db->connect_error){
    die("koneksi gagal :". $konek_db->connect_error);
}
?>
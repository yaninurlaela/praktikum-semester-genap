<?php

//membuat koneksi di database
$yani = new mysqli('localhost','root','','sekolah');
if($yani-> connect_error){
    die('koneksi_gagal:' .$yani->connect_errno);
    //fungsi die untuk mematikan proses php
}
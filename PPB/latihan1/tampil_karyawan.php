<?php

//membuat koneksi di database
$yani = new mysqli('localhost','root','','praktikum2');
if($yani-> connect_error){
    die('koneksi_gagal:' .$yani->connect_errno);
    //fungsi die untuk mematikan proses php
}

$query = "select * from karyawan";

//jalankan query
$hasil = $yani->query(query: $query);
$res = $yani->query(query: $query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Id karyawan</th>
                <th>Nama lengkap</th>
                <th>Tanggal lahir</th>
                <th>Jenis kelamin</th>
                <th>Id jabatan</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                while($item = $hasil->fetch_assoc()){
                    echo "<tr>
                    <td>".$item['id_karyawan']."</td>
                    <td>".$item['nama']."</td>
                    <td>".$item['tanggal_lahir']."</td>
                    <td>".$item['jenis_kelamin']."</td>
                    <td>".$item['id_jabatan']."</td>
                </tr>
            ";
         }
            ?>
        </tbody>
    </table>
    <br>
    <table>
        <thead>
            <tr>
                <th>Id karyawan</th>
                <th>Nama lengkap</th>
                <th>Tanggal lahir</th>
                <th>Jenis kelamin</th>
                <th>Id jabatan</th>
            </tr>
        </thead>
        <tbody>
            <?php while($item = $res->fetch_assoc()):?>
                <tr>
                    <td><?=$item['id_karyawan']?></td>
                    <td><?=$item['nama']?></td>
                    <td><?=$item['tanggal_lahir']?></td>
                    <td><?=$item['jenis_kelamin']?></td>
                    <td><?=$item['id_jabatan']?></td>
                </tr>
           <?php endwhile;?>
        </tbody>
    </table>
</body>
</html>
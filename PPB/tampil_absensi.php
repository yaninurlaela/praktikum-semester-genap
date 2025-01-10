<?php

$yani = new mysqli('localhost','root','','praktikum2');
if($yani-> connect_error){
    die('koneksi_gagal:' .$yani->connect_error);
}

$query = "select * from absensi";

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
                <th>Id absensi</th>
                <th>Id karyawan</th>
                <th>Tanggal</th>
                <th>Jam massuk</th>
                <th>Jam keluar</th>
            </tr>
        </thead>
    <tbody>
        <?php while($item = $res->fetch_assoc()):?>
            <tr>
                <td><?=$item['id_absensi']?></td>
                <td><?=$item['id_karyawan']?></td>
                <td><?=$item['tanggal']?></td>
                <td><?=$item['jam_masuk']?></td>
                <td><?=$item['jam_keluar']?></td>
            </tr>
            <?php endwhile;?>
    </tbody>
 </table>
</body>
</html>
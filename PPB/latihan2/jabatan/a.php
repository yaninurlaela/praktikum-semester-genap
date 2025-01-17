<?php 
$konek_db = new mysqli("localhost", "root", "", "praktikum2");
if ($konek_db->connect_error) {
    die("Koneksi gagal: " . $konek_db->connect_error);
}
if (isset($_POST['nama_jabatan'])) {
    $nama_jabatan = $_POST['nama_jabatan'];
    $gaji_pokok = $_POST['gaji_pokok'];
    $hasil = $konek_db->query(query: "INSERT INTO jabatan(nama_jabatan,gaji_pokok) VALUES('$nama_jabatan', $gaji_pokok )");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/bootstrap.css">
</head>
<body>
    <!-- On tables -->
<table class="table-primary">id jabatan</table>
<table class="table-secondary">nama jabatan</table>
<table class="table-success">gaji pokok</table>
<table class="table-danger">...</table>
<table class="table-warning">...</table>
<table class="table-info">...</table>
<table class="table-light">...</table>
<table class="table-dark">...</table>

<!-- On rows -->
<tr class="table-primary">...</tr>
<tr class="table-secondary">...</tr>
<tr class="table-success">...</tr>
<tr class="table-danger">...</tr>
<tr class="table-warning">...</tr>
<tr class="table-info">...</tr>
<tr class="table-light">...</tr>
<tr class="table-dark">...</tr>

<!-- On cells (`td` or `th`) -->
<tr>
  <td class="table-primary">...</td>
  <td class="table-secondary">...</td>
  <td class="table-success">...</td>
  <td class="table-danger">...</td>
  <td class="table-warning">...</td>
  <td class="table-info">...</td>
  <td class="table-light">...</td>
  <td class="table-dark">...</td>
</tr>
</body>
</html>
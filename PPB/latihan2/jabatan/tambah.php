<?php
// 1.membuat koneksi ke database
$konek_db = new mysqli("localhost", "root", "", "praktikum2");
// 2.periksa koneksi ke database
if ($konek_db->connect_error) {
    die("Koneksi gagal: " . $konek_db->connect_error);
}
// 3.membuat query untuk menambah data
if (isset($_POST['nama_jabatan'])) { //pilih salah satu dari form 
    // plain text query
    $nama_jabatan = $_POST['nama_jabatan'];
    $gaji_pokok = $_POST['gaji_pokok'];

    //jalankan query
    $hasil = $konek_db->query(query: "INSERT INTO jabatan(nama_jabatan,gaji_pokok) VALUES('$nama_jabatan', $gaji_pokok )");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data jabatan</title>
    <link rel="stylesheet" href="../assets/bootstrap.css">
</head>

<body>
    <!-- form tambah jabatan -->
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Hallo</strong> Data berhasil di tambahkan
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php if (isset($hasil)): ?>

    <?php endif; ?>
    <div class="container">
        <form action="" method="post">
            <div class="mb-3">
                <label for="nama_jabatan" class="form-label">Nama jabatan</label>
                <input type="text" class="form-control" id="nama_jabatan" placeholder="Direktur" name="nama_jabatan">
            </div>
            <div class="mb-3">
                <label for="gaji_pokok" class="form-label">Gaji pokok</label>
                <input type="number" class="form-control" id="gaji_pokok" placeholder="" name="gaji_pokok">
            </div>
            <button class="btn btn-primary">Simpan</button>
        </form>
    </div>
    <!-- akhir form -->

    <script src="../assets/bootstrap.js"></script>
</body>

</html>
<?php
require "config-db/koneksi.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM petugas WHERE username='$username'";
    $result = mysqli_query($konek_db, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if($password == $row["password"]) {
            header("Location: index.php");
        } else {
            echo "password salah";
        }
    } else {
        echo "usrname salah";
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="assets/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap-icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body class="bg-body-tertiary">
    <div class="d-flex vh-100 justify-content-center align-items-center">
        <div id="login-box" class="d-flex shadow">
            <div class="img-box">
                <img src="assets/img/bg-logo.jpg" alt="" srcset="">
            </div>
            <div class="form-box bg-white px-4 py-5">
                <h1 class="h2">Selamat Datang</h1>
                <p class="text-black-50 mb-5">Masukkan nama pengguna dan kata sandi anda</p>
                <form action="" method="post">
                    <label for="username" class="form-label text-black-50">Nama Pengguna</label>
                    <div class="position-relative d-flex align-items-center mb-3">
                        <input type="text" id="username" name="username" class="form-control " required
                            placeholder="Masukkan  Nama Pengguna">
                        <i class="bi-person position-absolute me-2 end-0"></i>
                    </div>
                    <label for="password" class="form-label text-black-50">Kata sandi</label>
                    <div class="position-relative d-flex align-items-center">
                        <input type="password" name="password" id="password" class="form-control pe-4"
                            placeholder="Masukkan kata sandi">
                        <i class="bi-eye-slash position-absolute end-0 me-2" style="cursor: pointer;"></i>
                    </div>
                    <button class="btn btn-primary form-control mt-4" name="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.querySelector("i.bi-eye-slash").addEventListener("click",()=>{
            let pw = document.getElementById('password')
            if(pw.type == "password"){
                pw.type ="text"
            }else{
                pw.type = "password"
            }
        })
    </script>
</body>

</html>
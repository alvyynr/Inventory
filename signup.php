<?php 
include "auth.php";
include "koneksi.php";
if(isset($_POST['signup'])){
    $nama_admin = $_POST['nama_admin'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = mysqli_query($koneksi, "INSERT INTO admin VALUES('','$nama_admin','$username','$password',NOW())") or die($koneksi);
    if ($sql) {
		echo "<script>alert('Berhasil Registrasi! Silahkan Login!');
		window.location.replace('login.php')</script>";
	} else {
		echo "<script>alert('Gagal Registrasi! Silahkan Masukkan Data Kembali!');
		window.location.replace('signup.php')</script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>SignUp</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" />
    <link rel="stylesheet" href="./style.css" />
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/869/869027.png" type="image/x-icon">
</head>

<body>
    <!-- partial:index.partial.html -->
    <form method="post">
        <div class="screen-1">
            <h1 style="margin-bottom: 45px;">Sign Up</h1>
            <div class="nama">
                <label for="nama">Nama</label>
                <div class="sec-2">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="nama" name="nama_admin" placeholder="Masukan Nama" required />
                </div>
            </div>
            <br>
            <div class="username">
                <label for="username">Username</label>
                <div class="sec-2">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="username" name="username" placeholder="Masukan Username" required />
                </div>
            </div>
            <div class="password">
                <label for="password">Password</label>
                <div class="sec-2">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input class="pas" type="password" name="password" placeholder="Masukan Password" required />
                </div>
            </div>
            <button class="signup" type="submit" name="signup">Sign Up</button>
            <p class="mt-3">Already have an account? <a href="login.php">Login</a></p>
        </div>
    </form>
    <!-- partial -->
    <script src="./script.js"></script>
</body>

</html>
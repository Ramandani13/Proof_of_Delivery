<?php 
 
include 'koneksi.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: pod_proses_packing.php");
}
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $grup = $_POST['grup'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM tb_proses_login WHERE username='$username'";
        $result = mysqli_query($koneksi, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO tb_proses_login (username, password, grup)
                    VALUES ('$username', '$password', '$grup')";
            $result = mysqli_query($koneksi, $sql);
            // echo "<script>alert('Hubungi © 2022 Ramandani Gilang S [19968] YIMM-WJF.')</script>";
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $username = "";
                $grup = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
                // echo "<script>alert('Hubungi © 2022 Ramandani Gilang S [19968] YIMM-WJF.')</script>";
            } else {
                echo "<script>alert('Woop! Terjadi kesalahan.')</script>";
                // echo "<script>alert('Hubungi © 2022 Ramandani Gilang S [19968] YIMM-WJF.')</script>";
            }
        } else {
            echo "<script>alert('Woops! User Sudah Terdaftar.')</script>";
            // echo "<script>alert('Hubungi © 2022 Ramandani Gilang S [19968] YIMM-WJF.')</script>";
        }
         
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
        // echo "<script>alert('Hubungi © 2022 Ramandani Gilang S [19968] YIMM-WJF.')</script>";
    }
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
 
    <title>Register</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="Grup" name="grup" value="<?php echo $grup; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Anda sudah punya akun? <a href="pod_login.php">Login </a></p>
        </form>
    </div>
</body>
</html>
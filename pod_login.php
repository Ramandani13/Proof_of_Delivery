<?php 
 
include 'koneksi.php';
 
error_reporting(0);
 
session_start();
 
// if (isset($_SESSION['username'])) {
//     header("Location: berhasil_login.php");
// }
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $grup = $_POST['grup'];
 
    $sql = "SELECT * FROM tb_proses_login WHERE username='$username' AND password='$password' AND grup='$grup'";
    $result = mysqli_query($koneksi, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['grup'] = $row['grup'];
        header("Location: pod_proses_packing.php");
    } else {
        echo "<script>alert('User atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    
 
    <link rel="stylesheet" type="text/css" href="style.css">
 
    <title>Login</title>
</head>
<body>
    
  

    <div class="container">


        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;"><a style="text-decoration:none;" href="pod_register.php"><b style="color:black;font-size: 2rem;font-weight: 800;tex-docoration:none;">Welcome Back!</b></a></p><br>
            <div><center><img src="gambar/pod.jpg" width="200px;" height="130px;"></center></div><br><br><br>
            <div class="input-group" >
            <!-- style="background-color:white;border-radius:25px;" -->
                <input type="text" placeholder="Enter Your Username" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Enter Your Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                <select style="border:2px solid #e7e7e7;width:100%;height: 50px;margin-bottom: 25px;font-size: 1rem;border-radius: 30px;outline: none;transition: .3s;" name="grup"  value="<?php echo $_POST['grup']; ?>" required> 
                    <option value="">&nbsp;&nbsp;&nbsp;&nbsp;Pilih Group</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                </select>   
            </div>
            <!-- <div><center><a href="forgot-password.php" style="text-decoration:none;">forgot password</center></div><br> -->
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            <center><p class="login-register-text"><b style="color:black;" >Not register yet?</b> <a href="manipulasi_regis.php">Create Account</a></p></center>
        </form>
    </div>
</body>
</html>

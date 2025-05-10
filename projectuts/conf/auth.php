<?php
include 'config.php';
// Check if the form is submitted
$username = $_POST['username'];
$password = $_POST['password'];

$query= mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username='$username' AND password='$password'");
if (mysqli_num_rows($query) > 0) {
    // User exists, proceed with login
    echo "Login Berhasil!";
} else {
    // Invalid credentials
    echo "Login Tidak Berhasil";
}
echo $username;
echo $password;
?>
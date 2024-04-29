<?php 
include "service/database.php";
session_start();

$login_massage = "";

if(isset($_SESSION["is_login"])){
    header("location: dashboard.php");
}
if(isset($_POST["login"])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";

    $result = $db->query($sql);
    if($result->num_rows > 0) {
        $data = $result->fetch_assoc();
            $_SESSION["username"] = $data["username"];
            $_SESSION["is_login"] = true;
        header("location: dashboard.php");

    } else {
        $login_massage = "Akun tidak ditemukan";
        $db->close();
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include "layout/header.html" ?>
   <main>
    <p>Selamat datang, silahkan masuk terlebih dahulu.</p>
    <form action="login.php" method="post">
        <label for="nama">Username:</label><br> 
        <input type="text" placehoder="username" name="username"/><br>
        <label for="nama">Password :</label><br>
        <input type="password" placehoder="password" name="password"/><br>
        <button type="submit" name="login">Masuk</button>
    </form>
    
    <p>Jika belum punya akun silakan daftar</p>
    <a href="register.php">Daftar</a>
   </main>
<?php include "layout/footer.html"?>
</body>
</html>
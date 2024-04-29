<?php 
include "service/database.php";

$register_massage ="";

if(isset($_POST["daftar"])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    try {$sql = "INSERT INTO user (username, password) VALUES 
        ('$username', '$password')";
        if ($db->query($sql)) {
            $register_massage = "Pendaftaran Berhasil, Silakan Masuk";
            } else 
            {
            $register_massage = "Pendaftaran Gagal";
        }

    }catch(mysqli_sql_exception){
        $register_massage = "Username sudah ada";
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
    <p>Formulir Pendaftaran.</p><br>
    <?= $register_massage ?><br>
    <form action="register.php" method="post">
        <label for="username">Username</label><br>
        <input type="text" placehoder ="username" name="username"/><br>
        <label for="password">Password</label><br>
        <input type="password" placehoder ="password" name="password"/><br>
        <button type="submit" name ="daftar">Daftar</button>
    </form>
    <p>Jika sudah punya akun silakan langsung masuk</p>
    <a href="Login.php">Masuk</a>
   </main>
<?php include "layout/footer.html"?> 
</body>
</html>
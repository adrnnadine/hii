<?php
session_start();
include ("koneksiphp.php");

 if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    $stmt = mysqli_prepare($koneksi,"select * from user where username=? and password=?");
    mysqli_stmt_bind_param($stmt,"ss",$username,$password);
    mysqli_stmt_execute($stmt); 
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) > 0){
        $_SESSION["username"] = $username;
        header("Location:dashboard.php");
        exit;
    }
    else {echo "password salah";}
 }
?>
<html>
    <body>
        <form method="POST">
            <input type="text" name="username"><br>
            <input type="password" name="password"><br>
            <button type="submit" name="login">Log In </button>
        </form>
    </body>
</html>
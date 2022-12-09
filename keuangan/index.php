<?php
error_reporting(0);
session_start();
$username   = $_SESSION['username'];
$password   = $_SESSION['password'];
$level      = $_SESSION['level']; 
$nama_level = $_SESSION['nama_level'];

    if(isset($_SESSION['username']) && isset($_SESSION['level']))
    {
      header('Location: HomePage.php');
    }
    else
    {
      //header('Location: index.php');
    }

?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
 
    <title>Tugas-Pemograman3</title>
</head>
<body>
    <div class="alert alert-warning" role="alert">
    </div>
 
    <div class="container">
        <form action="cek_login.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="text" placeholder="username" name="username" >
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" >
            </div>
            <div class="input-group">
                <!--<button name="login" class="btn">Login</button> -->
                <input type="submit"  name="login" >
            </div>
        </form>
    </div>
</body>
</html>

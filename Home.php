<?php
session_start();
if(!isset($_SESSION['id'])){
    header("location: FormLogin.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Toko Online</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <h2>Welcome to My Toko Online</h2>
        <h2>Selamat bergabung, <?=$_SESSION['nama']?> | <?=$_SESSION['email']?></h2>
        <?php
            if($_SESSION['level']==1){
                echo "Level Anda Admin";
            }else{
                echo "Level Anda Member";
            }
        ?>
        <a href="Logout.php">Keluar Aplikasi</a>
    </div>
</body>
</html>

    

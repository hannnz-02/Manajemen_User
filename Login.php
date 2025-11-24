<?php
include_once "db.php";


if (isset($_POST['user']) && isset($_POST['pwd'])) {

    $username = $_POST['user'];
    $password = $_POST['pwd'];

    $sql = "SELECT * FROM user WHERE username='$username' AND pwd='$password'";
    $result = mysqli_query($koneksi, $sql);

    if (!$result) {
        die("Query Error: " . mysqli_error($koneksi));
    }

    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);

        // SIMPAN SEMUA SESSION YANG DIPERLUKAN DASHBOARD
        $_SESSION['id']     = $data['id'];
        $_SESSION['nama']   = $data['nama'];
        $_SESSION['email']  = $data['email'];
        $_SESSION['level']  = $data['level'];

        // redirect ke dashboard
        header("location: Home.php");
        exit;
    } else {
        echo "Username atau Password salah!";
    }
}
?>

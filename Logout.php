<?php
    
    if(isset($_SESSION['id'])){
        session_destroy();
        header("location: FormLogin.html");
    }else {
        header("location: FormLogin.html");
    }
?>
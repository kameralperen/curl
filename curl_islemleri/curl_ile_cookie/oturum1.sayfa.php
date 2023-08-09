<?php
session_start();
    if(isset($_SESSION["Kullanici"])){
        echo "Alperen bey hoşgeldiniz burası sizin hesabınız";
    }else{
        header("Location:index.php");
        exit();
    }
?>
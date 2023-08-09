<?php
session_start();
    if(isset($_SESSION["Kullanici"])){
        echo "Kullanıcı bey hoşgeldiniz burası sizin hesabınız";
    }else{
        header("Location:index.php");
        exit();
    }
?>
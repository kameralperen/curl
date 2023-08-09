<?php
session_start();
?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>Başlık</title>
</head>
<body>
    <?php
    $GelenKisiselBilgiler   =   $_POST["KisiselBilgiler"];
    $GelenSifre             =   $_POST["sifre"];

    if(($GelenKisiselBilgiler != "") and ($GelenSifre != "")){
        if(($GelenKisiselBilgiler == "Alperen") and ($GelenSifre == "123456")){
            $_SESSION["Kullanici"] = "Alperen";
            header("Location: oturum1.sayfa.php");
            exit();
    
        }
        else{
            header("Location: index.php");
            exit();
        }
        echo "Hoşgeldiniz <br />";
    }else{
        echo "Önce Giriş yapmalısnız <br />";
        header("Location: index.php");
        exit();
    }
    echo "Gelen Kişisel bilgiler: " . $GelenKisiselBilgiler . "<br /> Gelen şifre: ". $GelenSifre;
    ?>
</body>
</html>
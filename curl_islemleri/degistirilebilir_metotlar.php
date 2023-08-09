<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>Başlık</title>
</head>
<body>
    <?php
    $Oturum     =   curl_init();
    curl_setopt($Oturum, CURLOPT_URL, "https://www.mynet.com"); //Belirtilecek olan içeriğe seçenek eklemek için kullanılır
    curl_setopt($Oturum, CURLOPT_RETURNTRANSFER, true); //CURLOPT_RETURNTRANSFER sayesinde istek yapılan site bir değişkene depolanır, varsayılan değeri false'dur. true denilmezse site direkt açılır
    curl_setopt($Oturum, CURLOPT_TIMEOUT, 90); //CURLOPT_TIMEOUT sayesinde istek yapılan sitede belirtilen süre içerisinde işlem yapılmazsa curl işlemi sonlanır. Genellikle API'lerde kullanılır.
    $SayfayiAc  =   curl_exec($Oturum); //curl_exec() işlemi yapılan yerde değişken tanımlanır ve site açılmak istenirse ekrana çağırılır.
    curl_close($Oturum);
    echo $SayfayiAc;

    ?>
</body>
</html>
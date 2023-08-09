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
        $oturum     =   curl_init();
        curl_setopt($oturum, CURLOPT_URL, "http://localhost/php/curl_ile_cookie/sonuc.php");
        curl_setopt($oturum, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($oturum, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($oturum, CURLOPT_POST, true);
        curl_setopt($oturum, CURLOPT_POSTFIELDS, ["KisiselBilgiler" => "Alperen", "sifre" => "123456"]);
        curl_setopt($oturum, CURLOPT_COOKIE, "Kullanici=Alperen"); //başlatılmış olan curl oturumda istenilen url adresine http isteğinde kullanılmak üzere cookie(ler) veya session(lar) oluşturmak için kullanılır
        curl_setopt($oturum, CURLOPT_COOKIEJAR, __DIR__ . "/cerezler.txt"); //başlatılmış olan curl oturumu sonlandığında daha önceden oluşturulmuş olan cookileri veya sessinoları bir dosyaya kaydetmeye yarar.
        $baslat     = curl_exec($oturum);
        curl_close($oturum);
        echo $baslat . "<br />";

        $oturum2     =   curl_init();
        curl_setopt($oturum2, CURLOPT_URL, "http://localhost/php/curl_ile_cookie/oturum1.sayfa.php");
        curl_setopt($oturum2, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($oturum2, CURLOPT_COOKIEFILE, __DIR__ . "/cerezler.txt"); //curl oturumunda kullanılıcak olan cookie veya sessinların tutulduğu dosyayı belirtmek ve değerleri karşı sunucuya cookileri iletmek için kullanılır.
        $baslat2     = curl_exec($oturum2);
        curl_close($oturum2);
        echo $baslat2 . "<br />";

        $oturum3     =   curl_init();
        curl_setopt($oturum3, CURLOPT_URL, "http://localhost/php/curl_ile_cookie/oturum2.sayfa.php");
        curl_setopt($oturum3, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($oturum3, CURLOPT_COOKIEFILE, __DIR__ . "/cerezler.txt");
        $baslat3     = curl_exec($oturum3);
        curl_close($oturum2);
        echo $baslat3;


    ?>
</body>
</html>
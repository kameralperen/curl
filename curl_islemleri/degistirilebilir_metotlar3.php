<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>Başlık</title>
</head>
<body>
    <?php
    /*
        $Oturum     =   curl_init();
        curl_setopt($Oturum, CURLOPT_URL, "https://www.google.com.tr");
        curl_setopt($Oturum, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($Oturum, CURLOPT_NOBODY, true); //İstek yaptğımız sayfanın body bölümünü göstermemek için kullanılır.
        curl_setopt($Oturum, CURLOPT_HEADER, true); //istekte bulunduğumuz sayfanın üst başlık bilgilerini string halinde geri döndürür
        $Baslat     =curl_exec($Oturum);
        curl_close($Oturum);
        echo nl2br($Baslat); //nl2br() metodu \n ifadelerini <br /> ye çevirerek gelen üst başlık bilgilerini daha okunaklı görmemize yardımcı oldu.

        //Geri dönen string ifadeyi de dizi halinde kullanmak istersek

        $Parcala    =   explode("\n", $Baslat);

        echo "<pre>";
        print_r($Parcala);
        echo "</pre>";*/


        $Oturum     =   curl_init();
        curl_setopt($Oturum, CURLOPT_URL, "http://localhost/php/curl_islemleri/curl_serverına_git.php");
        curl_setopt($Oturum, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($Oturum, CURLOPT_HEADER, true);
        curl_setopt($Oturum, CURLOPT_HTTPHEADER["GuvenlikKodu: " => "ParalarimiCalmayin3131"]);
        $Baslat     =curl_exec($Oturum);
        curl_close($Oturum);
        echo nl2br($Baslat);




    ?>
</body>
</html>
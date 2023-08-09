<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>Başlık</title>
</head>
<body>
    <?php
        $ch     =   curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost/php/curl_islemleri/bota_yonlendir.php");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109) Gecko/20100101 Firefox/112.0"); //Bot olduğumuz CURLOPT_USERAGENT ifadesi ile 3. parametrede belirtilen
        //useragent ile curl'den geldiğimiz anlaşılmadı. Yani curlden değil de mozilla browserdan yönlendirilmiş gibi gözüktü
        $sonuc  =   curl_exec($ch);
        curl_close($ch);
        echo $sonuc;
    ?>
</body>
</html>
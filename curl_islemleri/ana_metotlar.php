<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>Başlık</title>
</head>
<body>
    <?php
    $Oturum     =   curl_init("https://www.mynet.com"); //curl_init() metodu bir curl işlemini başlatır.
    curl_exec($Oturum); //curl_exec() metodu bir curl işlemini çalıştırır.
    curl_close($Oturum); //curl_close() metodu bir curl işlemini sonlandırır.
    
    ?>
</body>
</html>
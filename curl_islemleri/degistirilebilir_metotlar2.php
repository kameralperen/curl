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
    curl_setopt_array($Oturum, [
        CURLOPT_URL => "https://www.mynet.com",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 90
    ]);
    $SayfayiAc  =   curl_exec($Oturum);
    curl_close($Oturum);
    echo $SayfayiAc;

    //veya diziyi dışarda oluşturup direkt metotun içine de verebiliriz.

    $Ch        =   curl_init();
    $Secenekler =   array(CURLOPT_URL => "https://www.mynet.com", CURLOPT_RETURNTRANSFER => true, CURLOPT_TIMEOUT => 90);
    curl_setopt_array($Ch, $Secenekler);
    $OpenCh     =   curl_exec($Ch);
    curl_close($Ch);
    echo $OpenCh;


    $Oturum2     =   curl_init();
    curl_setopt_array($Oturum2, [
        CURLOPT_URL => "https://www.mynet.com",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true, //İstekte bulunulan sayfada bir yönlendirme varsa CURLOPT_FOLLOWLOCATION komutu ile yönlendirilen sayfaya da ulaşılır.
        CURLOPT_TIMEOUT => 90
    ]);
    $SayfayiAc  =   curl_exec($Oturum2);
    curl_close($Oturum2);
    echo $SayfayiAc;

    ?>
</body>
</html>
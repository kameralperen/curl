<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>Başlık</title>
</head>
<body>
    <?php
    $ch     =   curl_init("www.mynet.com");
    curl_exec($ch);
    $BilgileriAl    =   curl_getinfo($ch); //bütün bilgileri dizi halinde geriye döndürür
    $Hata           =   curl_error($ch); //hata oluşursa hata nedenini döndürür.
    curl_close($ch);

    echo "<pre>";
    print_r($BilgileriAl);
    echo "</pre>";

    echo $Hata;

    
  
    
    ?>
</body>
</html>
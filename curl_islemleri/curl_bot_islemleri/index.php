<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>Başlık</title>
</head>
<body>
    <?php
        $ch =   curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.turkcell.com.tr");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $baslat =   curl_exec($ch);

        preg_match_all('/src="(.*?)"/', $baslat, $Degerler);

        $temizDizi  =   array_unique($Degerler[1]);

        foreach($temizDizi as $Icerik){
            $UzantiBul  =   substr($Icerik, -4);
            if(($UzantiBul == "jpeg") or ($UzantiBul == ".jpg") or ($UzantiBul == ".png")){
                $Parcala    =   explode("/", $Icerik);
                $ParcalaSonEleman   =   end($Parcala);
                $YenidenUzantiBul   =   substr($ParcalaSonEleman, -4);
                if($YenidenUzantiBul == "jpeg"){
                    $DosyaicinUzanti =  "." . $YenidenUzantiBul;
                }else{
                    $DosyaicinUzanti = $YenidenUzantiBul;
                }
                $Isimolustur    =   md5(uniqid(mt_rand()));
                $DosyaAdi       =   $Isimolustur . $DosyaicinUzanti;

                $Dosya       =   file_get_contents($Icerik);
                if($Dosya){
                    file_put_contents($DosyaAdi, $Dosya);
                }else{
                    echo "Dosya indirme işlemi sırasında beklenmeyen bir hata oluştu :(";
                }
            }
        };
        echo "işleminiz tamamlandı ve fotoğraflar indirildi ^_^";


    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>Başlık</title>
</head>
<body>
    <?php
        $oturum     = curl_init();
        curl_setopt($oturum, CURLOPT_URL, "https://www.turkcell.com.tr");    
        curl_setopt($oturum, CURLOPT_RETURNTRANSFER, true);
        $baslat     =   curl_exec($oturum);
        curl_close($oturum);
        //echo $baslat;
        
        preg_match_all('/src="(.*?)"/', $baslat, $degerler);
        /*
        echo "<pre>";
        print_r($temizDizi);
        echo "</pre>";
        */

        $temizDizi   =  array_unique($degerler[1]);

        foreach($temizDizi as $Icerik){
            $uzantiBul  =   substr($Icerik, -4);
                if( ($uzantiBul == "jpeg") or ($uzantiBul == ".jpg") or ($uzantiBul == ".png") or ($uzantiBul == ".gif") ){
                    //echo $Icerik . "<br />";
                    $Parcala    =   explode("/", $Icerik);
                    /*
                    echo "<pre>";
                    print_r($Parcala);
                    echo "</pre>";
                    */
                    $ParcalaSon =   end($Parcala);
                    //echo $ParcalaSon . "<br />";

                    $YenidenUzantiBul   =   substr($ParcalaSon, -4);
                    if($YenidenUzantiBul == "jpeg"){
                        $DosyaAdiIcinUzanti =   "." . $YenidenUzantiBul;
                    }else{
                        $DosyaAdiIcinUzanti =   $YenidenUzantiBul;
                    }
                    $Isimlendirme   =   md5(uniqid(mt_rand()));
                    $DosyaAdiOlustur=   $Isimlendirme . $DosyaAdiIcinUzanti;

                    $Dosya      =   file_get_contents($Icerik);
                        if($Dosya){
                            file_put_contents($DosyaAdiOlustur, $Dosya);
                        }
                }
         };
         echo "İşlem başarıyla tamamlandı!";

                             


    ?>
</body>
</html>
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
    <form action="sonuc.php" method="post">
    Kişisel Bilgiler: <input type="text" name="KisiselBilgiler"><br />
    Şifre: <input type="password" name="sifre"><br />
    <input type="submit" value="Giriş Yap">
    </form>
    <?php
    ?>
</body>
</html>
<?php
try {
    $host = "localhost"; // adres
    $dbname = "veritabani_adi"; 
    $user = "kullanici_adi"; 
    $password = "sifre"; 

    // PDO ile daha güvenli veritabanı bağlantısı
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);

    // Hata işlemleri
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Veritabanına başarıyla bağlandı.";
} catch (PDOException $e) {
    echo "Veritabanı bağlantı hatası: " . $e->getMessage();
}
?>

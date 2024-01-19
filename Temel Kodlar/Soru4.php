<?php
session_start();

// Tüm session verilerini silmek için destroy kullanılır
session_destroy();

// Belirlediğimiz örneğin kullanıcı_id değerini silmek için unset ile birlikte silme işlemini yapabiliriz.
unset($_SESSION['kullanici_id']);
?>

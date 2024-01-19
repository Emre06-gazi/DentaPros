<?php
// Sayfa URL'ini belirtiriz
$hedefSayfa = "dentapros.php";

// Sonra yönlendirme işlemi yapabiliriz
header("Location: $hedefSayfa");
exit; // Ama, header() fonksiyonundan sonra exit() veya die() kullanılmalıdır.
?>

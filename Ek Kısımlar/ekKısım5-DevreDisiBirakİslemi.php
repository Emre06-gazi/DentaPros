<?php
// Kullanıcı durumunu devre dışı bırakma işlemleri burada gerçekleştirilir
// Bu örnek dosya sadece simülasyon amaçlıdır, gerçek bir durumu devre dışı bırakma işlemi yapılmalıdır.

// Kullanıcı durumu devre dışı bırakıldığını simüle ediyoruz
$response = array("success" => true);

// JSON formatında cevap gönderiyoruz
header('Content-Type: application/json');
echo json_encode($response);
?>

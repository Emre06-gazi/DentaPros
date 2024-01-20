<?php
// Burada örnek bir test yapıyoruz, ger.ek bir işlem için veritabanında kllanıcı tablosunda isActive değeri gibi sütunlar kullanılarak UPDATE işlemi ile yapılabilir.
$response = array("success" => true);

// JSON formatında cevap gönderiyoruz
header('Content-Type: application/json');
echo json_encode($response);
?>

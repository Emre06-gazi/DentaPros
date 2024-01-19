<?php
// Key ile birlikte verileri içeren array
$arrayKeyİle = array(
    "isim" => "Emre",
    "yaş" => 24,
    "şehir" => "Ankara"
);

// Sadece verileri içeren array
$arrayKeyOlmadan = array("Haşim", 30, "Adana");

// Yeni bir array oluşturarak bu iki arrayi içine atayadım
$yeniArray = array(
    "arrayKeyİle" => $arrayKeyİle,
    "arrayKeyOlmadan" => $arrayKeyOlmadan
);

// Yeni arrayi ekrana yazdırdım.
print_r($yeniArray);
// Çıktı: Array ( [arrayKeyİle] => Array ( [name] => Emre [age] => 24 [city] => Ankara ) [arrayKeyOlmadan] => Array ( [0] => Haşim [1] => 30 [2] => Adana ) )
?>

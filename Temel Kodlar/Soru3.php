<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];

$browser = "Bilinmeyen Tarayıcı";
$os = "Bilinmeyen İşletim Sistemi";

//Buradaki kodları stackowerflow üzerinden bularak hazırladım.

if (preg_match('/MSIE/i', $userAgent) && !preg_match('/Opera/i', $userAgent)) {
    $browser = 'Internet Explorer';
} elseif (preg_match('/Firefox/i', $userAgent)) {
    $browser = 'Mozilla Firefox';
} elseif (preg_match('/Chrome/i', $userAgent)) {
    $browser = 'Google Chrome';
} elseif (preg_match('/Safari/i', $userAgent)) {
    $browser = 'Safari';
} elseif (preg_match('/Opera/i', $userAgent)) {
    $browser = 'Opera';
} elseif (preg_match('/Netscape/i', $userAgent)) {
    $browser = 'Netscape';
}


if (preg_match('/windows|win32/i', $userAgent)) {
    $os = 'Windows';
} elseif (preg_match('/macintosh|mac os x/i', $userAgent)) {
    $os = 'Macintosh';
} elseif (preg_match('/linux/i', $userAgent)) {
    $os = 'Linux';
} elseif (preg_match('/ubuntu/i', $userAgent)) {
    $os = 'Ubuntu';
} elseif (preg_match('/iphone/i', $userAgent)) {
    $os = 'iPhone OS';
} elseif (preg_match('/android/i', $userAgent)) {
    $os = 'Android';
} elseif (preg_match('/blackberry/i', $userAgent)) {
    $os = 'BlackBerry OS';
}

echo "Tarayıcı: $browser <br>";
echo "İşletim Sistemi: $os";
?>

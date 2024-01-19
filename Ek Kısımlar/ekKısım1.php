<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "denta_pros";

$conn = new mysqli($servername, $username, $password, $dbname); // Bu sefer PDO yerine direk mysqli ile bağlandık..

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

$sql = "SELECT urun_id, grup_adi, urun_adi, birimi, guncel_stok FROM urunler";
$result = $conn->query($sql);

// Sorgu başarılımı kontrolü
if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Ürün ID</th><th>Grup Adı</th><th>Ürün Adı</th><th>Birimi</th><th>Güncel Stok</th></tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["urun_id"]."</td>";
        echo "<td>".$row["grup_adi"]."</td>";
        echo "<td>".$row["urun_adi"]."</td>";
        echo "<td>".$row["birimi"]."</td>";
        echo "<td>".$row["guncel_stok"]."</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Tabloda veri bulunamadı.";
}

$conn->close();
?>

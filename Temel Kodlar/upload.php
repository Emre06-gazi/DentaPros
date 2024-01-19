<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $hedefDizin = "uploads/";

    $hedefYol = $hedefDizin . basename($_FILES["file"]["name"]);

    // Dosyayı yüklemek için gerekli olan kodları, stackowerflow üzerinden elde ettim.
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $hedefYol)) {
        echo "Dosya başarıyla yüklendi: " . htmlspecialchars(basename($_FILES["file"]["name"]));
    } else {
        echo "Dosya yükleme hatası.";
    }
}
?>

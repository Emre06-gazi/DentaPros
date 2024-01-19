<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosya Yükleme Formu</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="file">Dosya Seç:</label>
        <input type="file" name="file" id="file" required>
        <button type="submit">Dosyayı Yükle</button>
    </form>
</body>
</html>

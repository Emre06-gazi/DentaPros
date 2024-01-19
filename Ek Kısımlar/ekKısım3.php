<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DentaPros Giriş Ekranı</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .login-container {
      max-width: 400px;
      margin: auto;
      margin-top: 100px;
    }

    .login-header {
      text-align: center;
      margin-bottom: 30px;
    }
  </style>
</head>
<body>

<div class="container login-container">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title login-header">Giriş Yap</h5>
      <form action="" method="post">
        <div class="form-group">
          <label for="kullanici_adi">Kullanıcı Adı:</label>
          <input type="text" class="form-control" id="kullanici_adi" name="kullanici_adi" required>
        </div>
        <div class="form-group">
          <label for="sifre">Şifre:</label>
          <input type="password" class="form-control" id="sifre" name="sifre" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Giriş Yap</button>
      </form>

      <?php
      // Kullanıcı adı ve şifre kontrolü
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // Formdan gelen veriler
          $kullaniciAdi = $_POST["kullanici_adi"];
          $sifre = $_POST["sifre"];

          // Örnek veriler (sanal veritabanı)
          $gercekKullaniciAdi = "dentapros";
          $gercekSifre = "123";

          // Kullanıcı adı ve şifre kontrolü
          if ($kullaniciAdi == $gercekKullaniciAdi && $sifre == $gercekSifre) {
              echo '<div class="alert alert-success mt-3" role="alert">Giriş Başarılı</div>';
              // Oluşturmuş olduğum websitesine yönlendirme işlemi
              header("Location: ../FrontEND/web.html");
              exit(); 
          } else {
              echo '<div class="alert alert-danger mt-3" role="alert">Kullanıcı adı veya şifre hatalı</div>';
          }
      }
      ?>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <title>Kullanıcı Tablosu</title>
  <style>
    body {
      padding: 20px;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2 class="mt-4 mb-4">Kullanıcılar Tablosu</h2>

    <table id="usersTable" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Ad</th>
          <th>Soyad</th>
          <th>Telefon</th>
          <th>TC</th>
          <th>E-Posta</th>
          <th>DOM</th>
          <th>Kayıt Tarihi</th>
          <th>Birim Adı</th>
        </tr>
      </thead>
      <tbody>
        <?php
          try {
            $db = new PDO('mysql:host=localhost;dbname=denta_pros', 'root', '');

            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = $db->query('SELECT k.*, b.birim_adi FROM kullanicilar k JOIN birimler b ON k.birim_id = b.id');
            $users = $query->fetchAll(PDO::FETCH_ASSOC);

            foreach ($users as $user) {
              echo '<tr>';
              echo '<td>' . $user['id'] . '</td>';
              echo '<td>' . $user['ad'] . '</td>';
              echo '<td>' . $user['soyad'] . '</td>';
              echo '<td>' . $user['telefon'] . '</td>';
              echo '<td>' . $user['tc'] . '</td>';
              echo '<td>' . $user['email'] . '</td>';
              echo '<td>' . $user['dogum_tarihi'] . '</td>';
              echo '<td>' . $user['kayit_tarihi'] . '</td>';
              echo '<td>' . $user['birim_adi'] . '</td>';
              echo '</tr>';
            }
          } catch (PDOException $e) {
            echo 'Veritabanı bağlantı hatası: ' . $e->getMessage();
          }
        ?>
      </tbody>
    </table>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#usersTable').DataTable();
    });
  </script>

</body>
</html>

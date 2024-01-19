<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kullanıcı Durumu</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <button id="devreDisiButton" class="btn btn-danger">Devre Dışı Bırak</button>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
$(document).ready(function() {
  $("#devreDisiButton").click(function() {
    // AJAX isteği
    $.ajax({
      url: "ekKısım5-DevreDisiBirakİslemi.php",
      method: "GET",
      success: function(response) {
        alert("Kullanıcı durumu devre dışı bırakıldı!");
      },
      error: function(xhr, status, error) {

        console.error("Hata:", xhr.responseText);
        alert("Kullanıcı durumu devre dışı bırakılırken bir hata oluştu!");
      }
    });
  });
});
</script>

</body>
</html>

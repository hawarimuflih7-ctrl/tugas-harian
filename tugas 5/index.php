<!-- simpan file sebagai post_form.php -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Form POST</title>
</head>
<body>
  <h2>Form dengan POST</h2>
  <form action="post_form.php" method="POST">
    Nama: <input type="text" name="nama"><br><br>
    Password: <input type="password" name="password"><br><br>
    <button type="submit">Kirim</button>
  </form>

  <?php
    if (isset($_POST["nama"]) && isset($_POST["password"])) {
      echo "Halo, " . $_POST["nama"] . "!<br>";
      echo "Password kamu (sebaiknya tidak ditampilkan 😅): " . $_POST["password"];
    }
  ?>
</body>
</html>

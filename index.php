<?php
include 'config.php';
$sql = "SELECT * FROM produk";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Daftar Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container mt-5">
    <h1 class="text-center mb-4">Produk Kami PT.Kesehatan Jasmani</h1>

    <div class="row">
      <?php while ($row = $result->fetch_assoc()) { ?>
        <div class="col-md-4 mb-4">
          <div class="card h-100 shadow-sm">
            <img src="<?= $row['gambar_url'] ?>" class="card-img-top" alt="<?= $row['nama'] ?>">
            <div class="card-body">
              <h5 class="card-title"><?= $row['nama'] ?></h5>
              <p class="card-text">Harga: Rp <?= number_format($row['harga']) ?></p>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>

</body>
</html>

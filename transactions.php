<?php
declare(strict_types=1);

require __DIR__ . '/app/bootstrap.php';
Auth::requireLogin();
require __DIR__ . '/class/User.php';
require __DIR__ . '/function/Transactions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tea Transfer - Transactions</title>
<link rel="icon" href="images/favicon.png">
<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="vendor/font-awesome/css/all.min.css">
<link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>
<div id="main-wrapper">
  <div id="content" class="py-4">
    <div class="container">
      <div class="d-flex align-items-center justify-content-between mb-4">
        <h2 class="font-weight-400 mb-0">Transactions</h2>
        <a href="dashboard" class="btn btn-outline-primary">Dashboard</a>
      </div>
      <div class="bg-white shadow-sm rounded">
        <?php Transactions(); ?>
      </div>
    </div>
  </div>
</div>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/theme.js"></script>
</body>
</html>

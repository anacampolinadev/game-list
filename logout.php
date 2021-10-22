<?php
    include_once "root/boot.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="css/body.css">
    <title>Logout</title>
</head>
<body class="body">
<div class="box">
  <?php
    logout();
    require_once "data-layer/password.php";
    $ordem = $_GET['o'] ?? "";
    $chave = $_GET['c'] ?? "";
  ?>
  <div class="box">
      <h1>Logout</h1>
      <?php
      
      echo msg_success('Usuario desconectado com sucesso.');
      echo back();
      
      ?>

  </div>
</div>
    
    
</body>
</html>
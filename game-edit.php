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
    <title>Camp's Game Search Project</title>
</head>
<body class="body">
<div class="box">
  <h1>Edit</h1>
  <?php

        $cod = $_POST['cod'] ?? null;
        $nome = $_POST['nome'] ?? null;
        $genero = $_POST['genero'] ?? null;
        $produtora = $_POST['produtora'] ?? null;
        $descricao = $_POST['descricao'] ?? null;
        $nota = $_POST['nota'] ?? null;
        $capa = $_POST['capa'] ?? null;
        

        $result = game_edit($cod,$nome,$genero,$produtora,$descricao,$nota,$capa);
    
        if($result){
            echo msg_success('Game edited successfuly');
            echo back();

        } else {
            echo msg_erro("wasn't possible change the data");
            echo back();
        }
  ?>

</div>  
</body>
</html>
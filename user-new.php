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
    <link rel="stylesheet" href="css/login.css">
    <title>Camp's Game Search Project</title>
</head>
<body class="body">
<div class="box">
  <?php
  include_once "navBar.php";
    if(!is_admin()){
        echo msg_erro("You are not allowed");
    } else {
        if (!isset($_POST['usuario'])){
            require "user-new-form.php";
        } else {
                $user = $_POST['usuario'] ?? null;
                $name = $_POST['nome'] ?? null;
                $pass1 = $_POST['senha1'] ?? null;
                $pass2 = $_POST['senha2'] ?? null;
                $type = $_POST['tipo'] ?? null;

                if($pass1 === $pass2){
                    $pass = gerarHash($pass1);
                    $result = user_create($user,$name,$type,$pass);
                    if($result){
                        echo msg_success("New user $name created");
                    } else {
                        echo msg_erro("User $name cannot be registered");
                    }
                } else {
                    echo msg_erro("Diferents passwords. Please, try again.");
                }
                    
        }
    }
    echo back();

  ?>
</div>
</body>
</html>
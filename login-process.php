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
        <?php
        include_once "navBar.php";

        $ordem = $_GET['o'] ?? "";
        $chave = $_GET['c'] ?? "";
        ?>

        <?php
         $u = $_POST['usuario'] ?? null;
         $s = $_POST['senha'] ?? null;
        
         if(is_null($u) || is_null($s)){
             require "login-form.php";
         }else {
             $q = "SELECT usuario, nome, senha, tipo FROM usuarios WHERE usuario = '$u' LIMIT 1";
             $search = $db->query($q);
             if(!$search){
                 echo msg_erro('Process failed');
             } else {
                 if($search->num_rows > 0) {
                    $reg = $search->fetch_object();
                    echo msg_success('Wellcome');
                    $_SESSION['user'] = $reg->usuario;
                    $_SESSION['nome'] = $reg->nome;
                    $_SESSION['tipo'] = $reg->tipo;

                 } else {
                    echo msg_erro('Invalid password');
                 }
             }
                 /* if($search->num_rows > 0) {
                     $reg = $search->fetch_object();
                     if(testarHash($s, $reg->senha)){
                         echo msg_success('Wellcome');
                         $_SESSION['user'] = $reg->usuario;
                         $_SESSION['nome'] = $reg->nome;
                         $_SESSION['tipo'] = $reg->tipo;
                     }else {
                         echo msg_erro('Invalid password');
                     }
                 } else {
                     echo msg_erro('User not found');
                 }
             } */
         }
         echo back();
        ?>
    </div>
</body>
</html>
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
    if(!is_logged()){
        echo msg_erro("You need to make <a href='login-form.php'>login</a> to do it.");
    } else {
        if(!isset($_POST['usuario'])){
            include "user-edit-form.php";
        } else {
        $user = $_POST['usuario'] ?? null;
        $name = $_POST['nome'] ?? null;
        $type = $_POST['tipo'] ?? null;
        $pass1 = $_POST['senha1'] ?? null;
        $pass2 = $_POST['senha2'] ?? null;

        if($pass1 === $pass2){
            $pass = gerarHash($pass2);
        }

        $result = user_edit($user,$name,$pass,$type);
    
        if(empty($pass1 || is_null($pass2))){
            echo msg_warning("Last password keeped");
        }
        if($result){
            echo msg_success('User changed successfuly');
            logout();
            echo msg_warning("Please make your <a href='login-form.php'> loggin </a> again");
        } else {
            echo msg_erro("wasn't possible change the data");
            back();
        }
    }
}
        
  
  ?>

</div>  
</body>
</html>
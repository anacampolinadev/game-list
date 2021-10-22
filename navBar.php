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
    <div class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-item">
            <a href="gamesList.php">Games List</a>
        </div>
        <div class="navbar-end">
            <div id="navbar-end" class="navbar-item">
                <?php
                if(empty($_SESSION['user'])){
                    echo "<a href='login-form.php'> Login </a>";
                } else {
                    echo "<p>Olá, <strong>" .$_SESSION['nome']." |  "."</strong></p>";
                    echo "( usuário do tipo ".$_SESSION['tipo'] ." )";
                    echo "  <a href='logout.php'> Sair </a>";
                    if(is_admin()){
                        echo " <a href='user-new.php'>| New User</a>";
                        echo " <a href='user-edit-form.php'>| Edit user </a>";
                        }else{
                            if(is_editor()){
                                echo " <a href='user-edit-form.php'>| Edit user </a>";
                        }
                    }
                }

                ?>
            </div>
        </div>
        
    </div>
</div>
</body>
</html>
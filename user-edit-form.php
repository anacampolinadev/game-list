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
<?php
    include_once "navBar.php";
    $q = "SELECT usuario, nome, senha, tipo FROM usuarios WHERE usuario = '" .$_SESSION['user'] . "'";
    $search = $db->query($q);
    $reg = $search->fetch_object();
?>
<body class="body">
<div class="box">
  <form action="user-edit.php" method="POST">
  <div class="login-card">
        <h1>Edit User</h1>
        <br>
        <label>User:</label>
        <input class="input" type="text" name="usuario" id="usuario" size="10" maxlength="10" readonly value="<?php echo $reg->usuario?>">  
        <br>
        <Label>Name:</Label>
        <input class="input" type="text" name="nome" id="nome" size="30" maxlength="30" value="<?php echo $reg->nome?>"> 
        <br>
        <label> Type: </label>
        <input class="input" type="text" name="tipo" id="tipo" readonly value="<?php echo $reg->tipo?>">
        <br>
        <label> Password: </label>
        <input class="input" type="password" name="senha1" id="senha1" size="8" maxlength="8">
        <label> Confirm Password</label>
        <input class="input" type="password" name="senha2" id="senha2" size="8" maxlength="8">
        <br><br>
        <input class="button" type="submit" value="Save"></input>
        <br>
        <?php echo back(); ?>
    </div>
  </form>
</div>
</body>
</html>
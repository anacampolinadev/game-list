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
?>
<body class="body">

<div class="box">
  <form action="login-process.php" method="POST">
  <div class="login-card">
        <h1>Login</h1>
        <br>
        <label>User:</label>
        <input class="input" type="text" placeholder="User name..." name="usuario">  
        <br>
        <Label>Password:</Label>
        <input class="input" type="password" placeholder="Password" name="senha"> 
        <br> <br> 
        <input class="button" type="submit" value="Login"></input>
    </div>
  </form>
  
    
</div>
</body>
</html>


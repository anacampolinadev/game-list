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
        <form action="user-new.php" method="POST">
            <div class="login-card">
                    <h1>New User</h1>
                    <br>
                    <label>User:</label>
                    <input class="input" type="text" name="usuario" id="usuario" size="10" maxlength="10">  
                    <br>
                    <Label>Name:</Label>
                    <input class="input" type="text" name="nome" id="nome" size="30" maxlength="30"> 
                    <br>
                    <label> Type: </label>
                    <div class="form-item">
                    <div class="select">
                        <select name="tipo">
                            <option default>Editor</option>
                            <option >Admin</option>
                        </select>
                    </div>
                    </div>
                    
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
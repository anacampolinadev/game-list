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
    $cod = $_GET['cod'] ?? 0;
    $search = $db->query("SELECT * FROM jogos WHERE cod='$cod'");
   
    /* $sql = "SELECT j.cod, j.nome, g.genero, p.produtora, j.descricao, j.nota, j.capa FROM jogos j
    JOIN generos g ON j.genero = g.cod JOIN produtoras p ON j.produtora = p.cod";
    $search = $db->query("$sql"); */
    $reg = $search->fetch_object();
?>
<body class="body">
    <div class="box">
        <form action="game-edit.php" method="POST">
            <div class="login-card">
                    <h1>Edit Game</h1>
                    <br>
                    <input class="input" type="hidden" name="cod" id="cod" value="<?php echo $reg->cod?>">  
                    <br>
                    <label>Name:</label>
                    <input class="input" type="text" name="nome" id="nome" value="<?php echo $reg->nome?>">  
                    <br>
                    <Label>Gênero:</Label>
                    <input class="input" type="text" name="genero" id="genero" size="30" maxlength="30" value="<?php echo $reg->genero?>"> 
                    <br>
                    <label> Produtora: </label>
                    <input class="input" type="text" name="produtora" id="produtora" readonly value="<?php echo $reg->produtora?>">
                    <br>
                    <label> Descrição: </label>
                    <textarea class="textarea" name="descricao" id="descricao" rows="10"><? echo $reg->descricao?></textarea> 
                    <label> Nota:</label>
                    <input class="input" type="text" name="nota" id="nota" size="8" maxlength="8"value="<? echo $reg->nota?>">
                    <br><br>
                    <input class="input" type="text" name="capa" id="capa" readonly value="<? echo $reg->capa?>">
                    <br><br>
                    <input class="button" type="submit" value="Save"></input>
                    <br>
                    <?php echo back(); ?>
            </div>
        </form>
    </div>
</body>
</html>
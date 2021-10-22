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
    <link rel="stylesheet" href="css/card.css">
    <title>Camp's Game Search Project</title>
</head>
<?php
    include_once "navBar.php";
?>
<body class="body">
    
    <h1>Abaut the selected game</h1>
    <br>

    <div class='box'>
        <table class="detalhes">
            <?php
                $cod = $_GET['cod'] ?? 0;
                $search = $db->query("SELECT * FROM jogos WHERE cod='$cod'");
                    if(!$search){
                        echo "<td><tr>Search fail.";
                        } else {
                            if($search->num_rows == 1 ) {
                                $res = $search->fetch_object();
                                    echo "
                                    <div class='card'>
                                        <div class='card-image'><br>
                                            <figure class='image is-128x128'>
                                                <img src='img/$res->capa' alt='Image Not Found'>
                                            </figure><br>
                                            
                                            <div class='card-content'>
                                                <div class='content'>
                                                    <h2>$res->nome</h2>
                                            </div>
                                            
                                            <div>
                                                <div class='card-content'>
                                                    <div class='content'>
                                                      $res->descricao
                                                    </div>
                                                <div>
                                            </div>
                                            <div>
                                                <div class='card-content'>
                                                    <div class='content'>
                                                      Nota:$res->nota/10.0 
                                                    </div>
                                                <div>
                                            </div>
                                        </div>
                                    </div>
                                ";
                                
                            } else {
                                echo "<tr><td>Not Found.";
                            }
                        }
                    ?>
        </table> 
        <br>
        <a href="gamesList.php"><button class="button is-success is-inverted">Back</button></a>
        
    </div>
    <?php include_once "footer.php"; ?>
</body>
</html>
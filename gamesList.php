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
<?php
    include_once "navBar.php";
    include_once "includes/dbConn.php";
    
    $order = $_GET['o'] ?? "n";
    $sb = $_GET['s'] ?? "";

    
  ?>
<div class="box">
  <h1>Games List</h1>
  <h2>Choose your game!</h2>
  <br>

  <div class="navbar" role="navigation" aria-label="main-navigation">
    <div class="navbar-brand">
    <div class="navbar-item"><h3>Order By:</h3></div>
      
      <div class="navbar-item"><a href="gamesList.php?o=n&s=<?php echo $sb ?>">Name</a></div>
      <div class="navbar-item"><a href="gamesList.php?o=p&s=<?php echo $sb ?>">Producer</a></div>
      <div class="navbar-item"><a href="gamesList.php?o=n1&s=<?php echo $sb ?>">High Score</a></div>
      <div class="navbar-item"><a href="gamesList.php?o=n2&s=<?php echo $sb?>">Low Score</a></div>
    </div>
    
      <form action="gamesList.php" method="GET" >
        <div id="sf" class="control">
          <input name="s" class="input is-link" type="text" placeholder="Search your game..."/>
          <button class="button is-primary">Submit</button>
        </div>
    </form>
  </div>
  

  <div class="box">
    <table class="table is-striped">
        <thead>
          <tr>
            <th>Game</th>
            <td></td>
            <th scope="col">Name </th>
            <th scope="col">Genero</th>
            <th scope="col">Produtora</th>
          </tr>
        </thead>

        <?php
        
        $q = "SELECT j.cod, j.nome, g.genero, p.produtora, j.capa FROM jogos 
        j JOIN generos g ON j.genero = g.cod JOIN produtores p on j.produtora = p.cod ";

        if(!empty($sb)){
          $q .="WHERE j.nome LIKE '%$sb%' OR g.genero LIKE '%$sb%' OR p.produtora LIKE '%$sb%' ";
        }
        switch ($order){
          case "p":
            $q .= "ORDER BY p.produtora";
              break;
          case "n1":
            $q .= "ORDER BY j.nota DESC";
            break;
          case "n2":
            $q .="ORDER BY j.nota ASC";
            break;
          default:
            $q .="ORDER BY j.nome";
          break;
        }

        $search = $db->query("$q");
          if (!$search){
            echo "Sorry, we had an erro!";
          } else {
              if($search->num_rows == 0) {
                echo "Nun Register Founded";
              }else {
                while($res = $search->fetch_object()){
                echo "<tr> <td scope='row' class='mini'><img src='img/$res->capa' id='mini'/></td>";
                echo "<td scopo='row'>";
                echo "<td scope='row'><a href='card.php?cod=$res->cod'>$res->nome</a>";
                echo "<td scope='row'>$res->genero</td>";
                echo "<td scope='row'>$res->produtora</td>";
                if(is_admin()){
                  echo "<td><i class='material-icons'>edit</i>";
                  echo " <td><i class='material-icons'>delete</i>";
                } elseif(is_editor()){
                  echo "<td><i class='material-icons'>edit</i>";
                }
                
                    
            } 
          }
        }
        ?>
      </table>
  </div>
</div>
<?php include_once "footer.php"?>
</body>
</html>
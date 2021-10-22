<?php
    function game_edit($cod, $nome, $genero, $produtora, $descricao, $nota, $capa){
        $sql = " UPDATE jogos SET nome = '$nome', genero = '$genero', produtora = '$produtora',
        descricao = '$descricao', nota = '$nota', capa = '$capa' WHERE cod = '$cod' ";
        return data_base($sql);
    }


?>
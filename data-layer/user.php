<?php
    function user_create($user, $name, $pass, $type){
        $sql = "INSERT INTO `usuarios` (usuario, nome, senha,tipo) VALUES
        ('$user', '$name', '$pass', '$type')";

        return data_base($sql);
        
    }

    function user_edit($user,$name,$pass,$type){
        $sql = " UPDATE usuarios SET nome = '$name', senha = '$pass', tipo = '$type' WHERE usuario = '$user' ";
        return data_base($sql);
    }

    function is_admin(){
        $t = $_SESSION['tipo'] ?? null;
        if (is_null($t)){
            return false;
        } else {
            if ($t == 'admin'){
            return true;
            } else {
                return false;
            }
        }
    }

    function is_editor(){
        $t = $_SESSION['tipo'] ?? null;
        if(is_null($t)){
            return false;
        } else {
            if($t == 'editor'){
                return true;
            } else {
                return false;
            }
        }
    }
?>
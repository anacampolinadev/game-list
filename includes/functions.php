<?php
    function thumb($arq){
        $way = "img/$arq";
            if(is_null($arq) || file_exists($way)){
                return "img/indisponivel.png";
            } else {
                return $way;
            }
        }

    function back(){
        return "<a href='index.php'> <span class='material-icons'>arrow_back </span></a>";
    }

    function msg_success($m){
        $resp = "<div class='notification is-primary'><p> $m </p></div>";
        return $resp;
    }

    function msg_warning($m){
        $resp = "<div class='notification is-warning'><p> $m </p></div>";
        return $resp;
       
    }

    function msg_erro($m){
        $resp = "<div class='notification is-danger'><p> $m </p></div>";
        return $resp;
    }

    function is_logged(){
        if(empty($_SESSION['user'])){
           return false; 
        } else {
            return true;
        }
    }


    function logout(){
        unset($_SESSION['user']);
        unset($_SESSION['nome']);
        unset($_SESSION['tipo']);
        session_destroy();
    }
?>
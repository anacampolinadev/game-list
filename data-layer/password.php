<?php

require_once "root/boot.php";
?>

<?php
    //Get the pass and make a cripto, adding one value to the character typed
    function cripto($senha){
        $c = '';
        for($pos = 0; $pos < strlen($senha); $pos ++){
            $letra = ord($senha[$pos]) + 1;
            $c .= chr($letra);
        }
        return $c;
    }
    //get the already typed password and generates a hash from it
    function gerarHash($senha){
        $txt = cripto($senha);
        $hash = password_hash($txt, PASSWORD_DEFAULT);
        return $hash;
        }

    // IT CHECKS IF THE HASH GENERATED EQUALS THE PASSWORD GENERATED BY ENCRYPTION
    /* function testarHash($senha,$hash){
        $ok = password_verify(cripto($senha), $hash);
        return $ok; 
    } */
       

    function testarHash($senha,$hash){
        $ok = password_verify($senha, $hash);
        return $ok;
    }

    // LINHAS DE TESTE

    /* $original = 'estudonalta';
    echo "$original --- ";
    echo cripto($original);
    echo gerarHash($original);
    echo testarHash("SENHA GERADA À PARTIR DA ORIGINAL","HASH DA SENHA GERADA A PARTIR DA ORIGINAL" ); */
?>
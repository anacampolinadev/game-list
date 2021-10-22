<?php

    function data_base($sql){
        $db = new mysqli("localhost","root","","a");
        if($db->connect_errno){
            echo "<p> Encontrei um erro $db->errno -- >$db->connect_error</p>";
            die();

            // LINES TO CONFIG THE UTF8 ON THE RESULTS

            $db->query("SET NAMES 'utf8");
            $db->query("SET character_set_connection=utf8");
            $db->query("SET charracter_set_client=utf8");
            $db->query("SET character_set_results=utf8");
        }
        return $db->query($sql);
        
    }
?>
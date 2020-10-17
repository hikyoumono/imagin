<?php
    function getConector(){
        $pdo=new PDO('mysql:host=localhost;dbname=asunaro;charset=utf8',
    'root', 'BeCr0424No1t');
        return $pdo;
    }
    ?>

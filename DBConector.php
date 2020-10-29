<?php
    class DBConector{
        
        function getConector(){
        $pdo=null;
        try{
        $pdo=new PDO('mysql:host=localhost;dbname=asunaro;charset=utf8',
    'root', 'BeCr0424No1t');
    }catch(Exception $e){
        header("loacation:$index.php");
            }
        return $pdo;
        }
        
        
       function getInsert($user,$password,$gmail){
            
        }
    }
    ?>

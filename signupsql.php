<?php
    
    function h($row){
        return htmlspecialchars($row, ENT_QUOTES|ENT_HTML5, "UTF-8");
    }
    
    
    $link ="./signup.php";
    
    require_once "DBConector.php";
    $db = new DBConector();
    $pdo = $db::getConector();
    
        
        
    if(isset($_POST['user'])){
        $user = h($_POST['user']);
        $userlen = strlen($user);
        if($user != null){
            if(0<$userlen AND 20 >= $userlen){
                
            }else{
                header("loacation:$link");
            }
        }else{
            header("loacation:$link");
        }
    }
    
    if(isset($_POST['email'])){
        $email = h($_POST['email']);
        $emaillen = strlen($email);
        if($email != null){
            if(0<$emaillen AND 100 >= $emaillen){
                
            }else{
                header("loacation:$link");
            }
            
        }else{
            header("loacation:$link");
        }
    }
    
    if(isset($_POST['password'])){
        $password = h($_POST['password']);
        $passwordlen = strlen($password);
        if($password != null){
            if(6<$passwordlen AND 20 >= $passwordlen){
                $password = password_hash($password, PASSWORD_DEFAULT);
            }else{
                header("loacation:$link");
            }
            
        }else{
            header("location:$link");
        }
    }
    
    if(isset($_POST['check'])){
        $check = h($_POST['check']);
        if($check != null){
        
        }else{
            header("location:$link");
        }
    }

    
    ?>



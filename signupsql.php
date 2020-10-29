<?php
    
    function h($row){
        return htmlspecialchars($row, ENT_QUOTES|ENT_HTML5, "UTF-8");
    }
    function back(){
        header("location:./signup.php");
    }
    
    $link ="./signup.php";
    
    require_once "DBConector.php";
    $db = new DBConector();
    $pdo = $db::getConector();
    
        
        
    if(isset($_POST['user'])){
        $user = h($_POST['user']);
            $userlen = strlen($user);
            if(0<$userlen AND 20 >= $userlen){
                
            }else{
                back();
            }
    }else{
        back();
    }
    
    if(isset($_POST['email'])){
        $email = h($_POST['email']);
            $emaillen = strlen($email);
            if(0<$emaillen AND 100 >= $emaillen){
                
            }else{
                back();
            }
            
    }else{
        back();
    }
    
    if(isset($_POST['password'])){
        $password = h($_POST['password']);
        if($password != null){
            $passwordlen = strlen($password);
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
        if($check == "on"){
            echo $check;
        }else{

            back();
        }

    }else{
        back();
    }
    ?>



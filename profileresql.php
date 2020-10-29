<?php
    
    function h($row){
        return htmlspecialchars($row, ENT_QUOTES|ENT_HTML5, "UTF-8");
    }
    function back(){
        $link ="./home.php";
        header("location:".$link);
    }
    
    require_once "DBConector.php";
    $db = new DBConector();
    $pdo = $db::getConector();
    

    
    if(isset($_POST['user'])){
        
        $user = h($_POST['user']);
        if($user != null){
            $userlen = strlen($user);
            if(0 < $userlen AND 20 >= $userlen){
                
            }else{
            back();
            }
        }else{
            back();
       }
        
    }
    
    if(isset($_POST['gazou'])){
        if($_POST['gazou'] != null){
        $image = pathinfo($_POST['gazou'], PATHINFO_EXTENSION);
            if($image == "jpg"){
                
            }else{
                echo $image;
                back();
            }
        }else{
            back();
        }
    }
    

    
    
    
    ?>

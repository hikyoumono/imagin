<?php
    
    function h($row){
        return htmlspecialchars($row, ENT_QUOTES|ENT_HTML5, "UTF-8");
    }
    
    function sql($imgs,$tis,$details){
        $sql="INSERT INTO ";
        return $sql;
    }
    
    require_once "DBConector.php";
    $db = new DBConector();
    $pdo = $db::getConector();
    
    $link = "./upload.php";
    
    if(isset($_POST['gazo'])){
        if($_POST['gazo'] != null){
        $image = pathinfo($_POST['gazo'], PATHINFO_EXTENSION);
        if($image == "jpg"){
            
        }else{
            header("Location:$link");
        }
        }else{
            header("Location:$link");
        }
    }
    
    if(isset($_POST['title'])){
        $title = h($_POST['title']);
        $tlen = strlen($title);
        if(0 < $tlen AND 20 >= $tlen){
            echo $title;
        }else{
            header("Location:$link");
        }
    }
    
    if(isset($_POST['detail'])){
        $detail =h($_POST['detail']);
        $dlen = strlen($detail);
        if(0 < $dlen AND 150 >= $dlen){
            echo $detail;
        }else{
            header("Location:$link");
        }
    }
    
    echo sql(1,1,1);
    ?>

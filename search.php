<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="main"/>
        <link rel="stylesheet" type="text/css" href="mainstyle.css">
<meta name="description" content="main"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<title>look for favorite images</title>

<style>


</style>


<?php
    if(isset($_POST['word'])){
        $word = $_POST['word'];
    }
    ?>

    
    </head>
    <body>
<div class="bg-light" style="height:100%;">

        <header>
        <nav class="nav" style="background-color:blue">
          <a class="title_name mx-5" style="text-align:center; margin-top:8px; left:25%">タイトルを決めようね</a>
          <a class="nav-link active" href="#">Trendy</a>
          <a class="nav-link" href="#">Ranking</a>
          <a class="nav-link" href="./index.php">Home</a>
          <a class="nav-link" href="./upload.php">Upload</a>
          <a class="nav-link" href="./lisence.html">利用規約</a>
        </nav>
        </header>

<div class="container">



            <nav class="navbar navbar-light my-4" style="margin-left:30%">
              <form class="form-inline" method="post" action="search.php">
                <input class="form-control mr-sm-2" type="search" placeholder="fill out image's hint" aria-label="Search" name="word">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </nav>

<div style="margin:5px 25% 5px 28%;">
<h1>タイトルを決めようね</h1>
</div>

<?php
    echo $word;
    ?>

        </div>
</div>
    </body>

</html>


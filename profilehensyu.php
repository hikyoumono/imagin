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

    </head>
    <body>



<div class="bg-light" style="height:100%;">

        <header>
        <nav class="nav" style="background-color:rgba(250,100,200,0.5)">
          <a class="title_name mx-5" style="text-align:center; margin-top:8px; left:25%">タイトルを決めようね</a>
          <a class="nav-link active" href="#">Trendy</a>
          <a class="nav-link" href="#">Ranking</a>
          <a class="nav-link" href="./index.php">Home</a>
          <a class="nav-link" href="./lisence.html">利用規約</a>
          <a class="btn btn-outline-info mt-1 mx-5" href="./login.php" role="button" style="height:30px; line-height:15px;">ログイン [login]</a>
        </nav>
        </header>

<div class="container" style="width:90%; margin:0 auto;">
<div class="former my-5">

<form method='POST' action='profileresql.php'>
  <div class="form-group">
    <label for="exampleInputEmail1">ユーザ名</label>
    <input type="text" class="form-control" name="user" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="User Name">
    <small id="emailHelp" class="form-text text-muted">新しいユーザ名を入力してください
  </div>
    <input type="file" class="my-2" name="gazou"><br>
  <input type="submit" class="btn btn-primary my-3" value="変更を決定">
</form>
</div>


</div>
</div>
</body>
</html>

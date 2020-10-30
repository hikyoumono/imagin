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

<div class="container" style=" margin:0 auto;">

<div class="mt-5">
<h5>編集内容を入力</h5>
</div>


<form method='POST' action='index.php' class="mt-2">
<label class="mx-3 mt-3">title</label><br>
<input type='text' name='title' class="mx-3" placeholder="title (20文字以内)"><br>
<div class="form-group mx-3 mt-4">
  <label for="exampleFormControlTextarea1">detail</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="イラスト等の説明を入力" rows="2" style="width:30%;"></textarea>
</div>
<input type='submit' class="btn btn-primary mt-5 mx-3" value='変更を決定'>
</form>





</div>
</div>

    </body>

</html>

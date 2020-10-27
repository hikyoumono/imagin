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
              <a class="btn btn-outline-info mt-1" href="./login.php" role="button" style="height:30px; line-height:15px; margin-left:300px">ログイン [login]</a>
            </nav>
            </header>

<div class="container">

<form method="POST" action="home.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We are going to never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check">
    <label class="form-check-label" for="exampleCheck1">利用規約に同意</label>
  </div>
  <button type="submi7t" class="btn btn-primary">ログイン</button>
</form>

<button type="button" class="btn btn-warning mt-5" onclick="location.href='./signup.php'">ログイン登録 [Sign Up!]</button>
</div>
</div>
</body>
</html>

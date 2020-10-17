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
<script>alert("利用規約を必ず読んでください")</script>

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

<div class ="my-5 mx-3">
<p>著作権freeの画像を投稿できます</p>
</div>

<form method='POST' action='up.php' class="mt-5">
<input type='file' name='gazo' class="mx-3 my-2"><br>
<input type='text' name='title' class="mx-3 my-2" placeholder="title (20文字以内)"><br>
<input type='text' name='detail' class="mx-3 my-2" placeholder="detail (150文字以内)"><br>
<input type='submit' class="btn btn-primary mt-5 mx-3" value='upload'>
</form>


<div class="alert alert-warning my-5 mx-3" role="alert" style="font-size:10px">
※注意　投稿すると一般公開されます。投稿できるものは、自分の作った著作権freeの画像だけです。他人の諸作物やfreeの画像にしたくないもの、誰かに見られたくない画像は絶対にアップロードしないようにしてください。
</div>

</div>
    </body>

</html>


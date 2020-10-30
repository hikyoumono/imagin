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
<div class="mainbox" style="width:75%;float:left;">


            <nav class="navbar navbar-light my-4" style="margin-left:30%">
              <form class="form-inline" method="post" action="search.php">
                <input class="form-control mr-sm-2" type="search" placeholder="fill out image's hint" aria-label="Search" name="word">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </nav>


<div class="maintitle" style="width:60%; margin-left:25%;">
<h1>タイトルを決めようね</h1>
</div>

<div class="syoukaibun mt-5 mx-3">
<p>free画像の置き場へようこそ！ ここではたくさんのfreeの画像が置かれています。 お気に入りのイラストや写真を探すことができます。 また、このサイトにログインする事で、自分が作成したイラスト等をアップロードすることができます。 画像の人気ランキングも見ることができることや、楽しみ方が盛り沢山。 まずは、Searchを気軽にクリック！</p>
</div>


<ul class="nav nav-tabs mt-5 mb-4">
<li class="nav-item">
  <a class="nav-link active">現在活躍中の画像</a>
</li>
</ul>

<div class="sample">
<form method="post" action="detail.php">
<input type="hidden" name="gazouid" value="画像idを　決めようね">
<input type="image" class="img-thumbnail" src="./moon.jpg" alt="送信する" width="19%">
</form>
</div>

 </div>

<div class="advertising" style="width:25%;height:70%;float:left;margin-top:150px;border-left-style:ridge;">
<div class="m-3" style="width:200px;height:500px;background-color:yellow;">
広告を入れようね
</div>
</div>

</div>
        </div>
</div>
    </body>

</html>

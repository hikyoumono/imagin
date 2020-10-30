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


<script>
function alertfunction(){
    var result =window.confirm("本当に削除しますか？");
    
    if(result){
        alertfunction();
    }else{
        alert("キャンセルしました");
    }
}

</script>

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

             
            </nav>
            </header>


<div class="container">

<div class="user">
<p>データベースさん</p>
</div>

<div class="text-center m-5 icon" style="margin:0 auto;">
<img src="./moon.jpg" alt="" class="rounded" style="width:35%;">
<br>
<button type="button" class="btn btn-outline-secondary mt-4" onclick=location.href='./profilehensyu.php'>プロフィールを編集</button>
</div>






<div style="margin-y:2rem;">
<ul class="nav nav-tabs">
<li class="nav-item">
  <a class="nav-link active">アップロードした画像</a>
</li>
</ul>
</div>



<div class="uploadgazo" style="position:relative; left:5%;">



<div class="mt-3" style="float:left;">
<img src="./moon.jpg" alt="..." class="img-thumbnail" style="width:30rem;"><br>

</div>







<div class="rireki mt-3 mb-5 ml-3 card" style="width: 20rem;height:600px;float:left;overflow:scroll;">


<div class="card my-2 mx-2">
  <img class="bd-placeholder-img mt-2" src="./moon.jpg" alt="" style="width:98%;height:180px;margin:0 auto;" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">

<div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <a href="./uploadhensyu.php" class="btn btn-primary">編集</a>
  <button onclick='alertfunction()' class="btn ml-1">削除</a>
</div>
</div>

<div class="card my-2 mx-2">
  <img class="bd-placeholder-img mt-2" src="./moon.jpg" alt="" style="width:98%;height:180px;margin:0 auto;" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">

<div class="card-body">
  <h5 class="card-title">Card title</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<a href="./uploadhensyu.php" class="btn btn-primary">編集</a>
<button onclick='alertfunction()' class="btn ml-1">削除</a>
</div>
</div>

<button type="button" class="btn btn-outline-primary btn-sm mx-2 my-1">さらに検索</button>


</div>


</div>


<div class="app" style="float:clear;">
<br>
<button type="button" class="btn btn-success btn-lg btn-block" onclick=location.href="upload.php" style="margin-bottom:10%;">新しくアップロード</button>
</div>


</div>
</div>
</body>
</html>

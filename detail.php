<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="description" content="detail">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="./mainstyle.css">

<?php
    if(isset($_POST['gazouid'])){
        $a= $_POST['gazouid'];
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
<?php
    echo $a;
    
    
    ?>



<div class="card mb-3" style="max-width: 90%;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <svg class="bd-placeholder-img" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image</text></svg>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">画像のタイトル</h5>
        <p class="card-text">作者からのコメント、または詳細：？？？</p>
        <p class="card-text"><small class="text-muted">作者：？？？</small></p>
      </div>
    </div>
  </div>
</div>



<div class="card">
  <div class="card-header">
    Download
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">クリックするとダウンロードが開始されます。</p>
    <a href="#" class="btn btn-primary">Download</a>
  </div>
</div>


</div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?= $this->data['title'] ?></title>

    <link href="http://<?= $_SERVER['SERVER_NAME'] ?>/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://<?= $_SERVER['SERVER_NAME'] ?>/css/custom.css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?= $this->data['title'] ?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://<?= $_SERVER['SERVER_NAME']?>">Главная</a></li>
            <li><a href="http://<?= $_SERVER['SERVER_NAME']?>/feedback/add">Добавить отзыв</a></li>
            <li><a href="http://<?= $_SERVER['SERVER_NAME']?>/feedback/get">Отзывы</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">
		  
		 <br><br><br>
		  <? require_once $this->data['view'];  ?>
		  
      </div>

    </div><!-- /.container -->


	  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	  
    <script>window.jQuery || document.write('<script src="http://<?= $_SERVER['SERVER_NAME'] ?>/node_modules/bootstrap/assets/js/vendor/jquery.min.js"><\/script>')</script>
	  
    <script src="http://<?= $_SERVER['SERVER_NAME'] ?>/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="http://<?= $_SERVER['SERVER_NAME'] ?>/js/custom.js"></script>
	  
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php require_once $this->data['view']; ?>
</body>
</html>

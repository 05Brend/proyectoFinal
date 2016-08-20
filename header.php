<!DOCTYPE html>
<html>
	<head>
		<title><?= $titulo ?></title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="componentes/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/edad.css">
		<link rel="stylesheet" href="css/home.css">
		<meta name="author" content="Brenda Dávalos R.">
		<meta charset="utf-8">
	</head>
<body>
	<header>
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">LiQbEeR</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <?php if(!isset($esconderMenu) || !$esconderMenu) { ?>
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">
			        <li><a href="index.php">Inicio</a></li>
			        <li><a href="productos.php">Productos</a></li>
			        <li><a href="contacto.php">Contacto</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
		    <?php } ?>
		  </div><!-- /.container-fluid -->
		</nav>
	</header>
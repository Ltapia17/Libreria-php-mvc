<!DOCTYPE html>
<html>
<head>
	<title>Libreria</title>
	<link href="https://fonts.googleapis.com/css?family=Baloo+Chettan" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo RUTE_URL; ?>public/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php echo RUTE_URL; ?>public/css/mystyles.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	
</head>
<body>
<header>	

<div class="container-fluid">
	<div class="img-container">
		<img class="fondo-header" src="<?php echo RUTE_IMAGES; ?>/img-header.jpg" alt="">
	</div>
	
	<div class="menu-bar">
		<a href="#" class="bt-menu"><span class="fas fa-list "></span>Menu</a>
	</div>
	
	<nav  class="nav navbar-expand-lg">
		<a class="navbar-brand" href="<?php echo RUTE_URL; ?>">
    <img src="<?php echo RUTE_URL; ?>public/images/libro.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    Libroteca
  </a>
	
  <a class="nav-item nav-link active " href="<?php echo RUTE_URL; ?>">Inicio </a>
      <a class="nav-item nav-link" href="#">Features</a>
      <a class="nav-item nav-link" href="#">Pricing</a>
      <a class="nav-item nav-link " href="#">Disabled</a>
	


		<form class="form-inline ml-auto">
    <input class="form-control mr-sm-2 col" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
	</nav>



	
</div>
</header>
</body>
</html>



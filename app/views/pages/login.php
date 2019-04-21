<?php require_once RUTE_APP. '/views/inc/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body> 
<section class="main"> 
</div>
<div class="container-fluid">
	

	<div class="jumbotron">
		
	
		<section>
				<label class="login">Ingreso</label>
		</section>
			<div class="wrap">
				<form action="<?php echo RUTE_URL; ?>pages/home" method="POST">

			<input type="text" class="form-control" name="nick" value="" placeholder="Ingrese Nick" required="Debe ingresar nombre"> <br />
			<input type="password" class="form-control" name="contrasena" value="" placeholder="Ingrese Contraseña" required="Debe ingresar contraseña"> <br />
			<input type="submit" class="button" name="submit" value="Ingresar"> <br />
			<a href="" class="text-control">Recuperar Contraseña</a>
			<a href="<?php echo RUTE_URL; ?>pages/register" class="text-control">Registrarse</a>
		</div>

		</section>
		</form>

	</div>

	</div>
</body>
</html>

<?php require RUTE_APP.'/views/inc/footer.php'; ?>



<?php require_once RUTE_APP. '/views/inc/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body> 
<form action="<?php echo RUTE_URL;?>login" method="POST">	
		
<section class="main"> 
</div>

		<section>
				<label class="login">Ingreso</label>
		</section>
			<div class="wrap">

			<input type="text" class="form-control" name="usuario" value="" placeholder="Ingrese Usuario"> <br />
			<input type="password" class="form-control" name="contrasena" value="" placeholder="Ingrese Contraseña"> <br />
			<input type="submit" class="button" name="submit" value="Ingresar"> <br />
			<a href="" class="text-control">Recuperar Contraseña</a>
			<a href="<?php echo RUTE_URL; ?>pages/register" class="text-control">Registrarse</a>
		</div>

		</section>
		</form>
</body>
</html>



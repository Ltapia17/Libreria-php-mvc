<?php require_once RUTE_APP . '/views/inc/header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="<?php echo RUTE_JS; ?>/validation.js"></script>
	
</head>

<body>


	<section class="main">

	<style>
				.error {
						border: solid 2px #FF0000;
						color: #FF0000;
					}
	</style>


		<form name="forms" id="0" action="<?php echo RUTE_URL; ?>pages/home" method="POST"  >
			<div class="container">
				<div class="row">
					<div class="card">
						<div class="card-body">
							<div class="col-md-20">
								<h2>Identificarse</h2>
								<div class="form-group">
									<input type="text" id="nick" class="form-control" name="nick" required placeholder="Ingrese Nick">
									
								</div>
								<div class="form-group">
									<input type="text" id="contrasena" class="form-control" name="contrasena" required placeholder="Ingrese Contraseña">
									<p id=errorMessage></p>
								</div>
								<div class="form-group">
									<button class="btn btn-success" id="submit" >Ingresar</button>
								</div>
								<div class="form-group">
									<a href="" class="btnForgePwd">Recuperar Contraseña</a> <br>
									<a href="<?php echo RUTE_URL; ?>pages/register" class="btnForgePwd">Registrarse</a>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
	</form>
	
</body>

</html>

<?php require RUTE_APP . '/views/inc/footer.php'; ?>
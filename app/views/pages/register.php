<?php require_once RUTE_APP. '/views/inc/header.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container-fluid">
	<div class="jumbotron">
		<form action="<?php echo RUTE_URL; ?>pages/register" method="POST">
			<h1>Registro</h1>
			
			<label class="p">Nick:</label> <br/>
			<input type="text" class="form-control" name="nick"><br/>
			<label class="p">Nombre:</label> <br/>
			<input type="text" class="form-control" name="nombre"><br/>
			<label class="p">Contraseña:</label> <br/>
			<input type="password" class="form-control" name="contrasena"> <br/>
			<label class="p">Email:</label> <br/>
			<input type="email" class="form-control" name="email"> <br/>
			<input type="submit" class="btn btn-success" value="Registrarse">

				<ul>
<?php if(isset($errors)){
    foreach ($errors as $error){
        echo "<li> $error </li>";
    }
}
?>
</ul>
</div>
	</div>
	</form>
</body>
</html>

<?php require RUTE_APP.'/views/inc/footer.php'; ?>
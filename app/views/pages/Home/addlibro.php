
<?php require RUTE_APP . '/views/inc/header.php';?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<section class="main"> 
<form action="<?php echo RUTE_URL;?>pages/addlibro"method="POST" enctype="multipart/form-data">

<div class="wrap">
<label for="nombre">Nombre: </label>
<input type="text" name="nombre" class="form-control form control-lg">
<label for="nombre">categoria: </label>
<input type="text" name="categoria" class="form-control form control-lg">
<label for="nombre">resumen: </label>
<input type="text" name="resumen" class="form-control form control-lg">
<label for="nombre">estrellas: </label>
<input type="int" name="estrellas" class="form-control form control-lg">
<input type="file" name="imagen" class="form-control form control-lg">
<input type="submit" name="ingresar" class="btn btn-success" value="Agregar Libro">
</div>
</section>>
</form>

<?php require RUTE_APP.'/views/inc/footer.php'; ?>

</body>
</html>


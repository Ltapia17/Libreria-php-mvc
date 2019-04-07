<?php require RUTE_APP. '/views/inc/header.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Incio</title>
</head>
<body>
    <div class="main">
<table class="table">
    <thead>
    <tr>
    <th>Codigo</th>
    <th>Nombre Libro</th>
    <th>Categoria</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($dates['libros'] as $libro) : ?>
    <tr>
    <td><?php echo $libro->id_libro; ?></td>
    <td><?php echo $libro->nombre; ?></td>
    <td><?php echo $libro->categoria; ?></td>
    </tr>

<?php endforeach;?>
</div>
</tbody>
</table>

</body>
</html>
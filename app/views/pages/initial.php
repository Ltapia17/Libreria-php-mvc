<?php require RUTE_APP . '/views/inc/header.php'; ?>
<!DOCTYPE html>
<html>

<body>
    <div class="container-fluid">




        <a class="identidad" href="<?php echo RUTE_URL; ?>index/login">Logearse</a>




        <form>
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">Libros</th>
                        <th scope="col">Resumen</th>
                    </tr>
                </thead>
                <?php foreach ($dates['libros'] as $libros) : ?>


                    <tbody>
                        <tr>
                            <td>


                                <h5><a href="<?php echo RUTE_URL; ?>pages/libro"><?php echo $libros->nombre; ?></a></h5>

                                <img src="<?php echo RUTE_IMAGES; ?>/img_books/<?php echo $libros->imagen; ?>" width="120px" height="180px">

                                <?php echo $libros->id_libro; ?> <br />
                                <?php echo $libros->categoria; ?>
                            </td>
                            <td>
                                <p><?php echo $libros->resumen; ?></p>
                            </td>
                        </tr>
                    </tbody>
                <?php endforeach; ?>
            </table>

            <?php require_once RUTE_APP . '/views/pages/pagination.php'; ?>



    </div>
    </form>



    <?php require RUTE_APP . '/views/inc/footer.php'; ?>
</body>

</html>
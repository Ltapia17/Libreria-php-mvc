<?php

// redirecionar pcntl_async_signals
function redirecionar($page){
    header('location:'.RUTA_URL . $page);
}

?>
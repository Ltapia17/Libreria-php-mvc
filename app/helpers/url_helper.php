<?php

// redirecionar pcntl_async_signals
function redirect($page){
    header('location:'.RUTE_URL . $page);
}

?>
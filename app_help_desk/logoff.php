<?php

    session_start();// inicia uma sessão

    /*
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    //remover indices do array de sessão

    unset($_SESSION['x']);//remove o indice especificado do array em questão

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    //destruir a variavel de sessão  

    session_destroy();// será destruida
    //forçar um redirecionamento

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    */

    session_destroy();
    header('Location: index.php');

?>
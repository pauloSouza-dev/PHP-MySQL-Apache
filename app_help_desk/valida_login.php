<?php

    # variavel que armazena o estado de autenticação do usuário
    $usuario_autenticado = false;

    $usuarios_app = array(
        array('email' => 'adm@hotmail.com', 'senha' => '123456'),
        array('email' => 'user@hotmail.com', 'senha' => 'abcd'),
    );

    foreach($usuarios_app as $user){

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
        }

    }

    if($usuario_autenticado){
        echo 'Usuario autenticado';
    }else{
        header('Location: index.php?login=error');
    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
    
    <?php 

        /*
            Váriaveis constantes como o nome sugere, são váriaveis que não podem ser
            alterada durante a execução do algoritmo
        */

        //Define é uma função que espera dois parâmetros : O nome da variavel e seu valor
        define('BD_LOGIN', 'admin_login');
        define('BD_SENHA','admin_senha');

        //Diferentemente das váriveis normais,as constantes não precisam ser referenciadas com o $
        echo BD_LOGIN;
        echo '<br/>';
        echo BD_SENHA;

    ?>

</body>
</html>
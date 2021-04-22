<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
    
    <?php 

        // Operadores Lógicos

        # E: AND ou && 

        if(10 < 20 && 2 > 1){
            echo 'Verdadeiro';
        }
        else{
            echo 'Falso';
        }

        echo '<br/>';

        # OU: OR ou ||

        if(10 > 8 || 12 > 15){
            echo 'Verdadeiro';
        }
        else{
            echo 'Falso';
        }

        echo '<br/>';

        # XOR: XOR ---> Retorna verdadeiro se uma das expressões for verdadeira

        if(10 > 12 XOR 10 < 12){
            echo 'Verdadeiro';
        }
        else{
            echo 'Falso';
        }

        echo '<br/>';

        # ! ---> inverte o resultado retornado pela expressão

        if(!('a' == 'b')){
            echo 'Verdadeiro';
        }
        else{
            echo 'Falso';
        }

        # Bônus: Os parenteses determinam a ordem de prêcedencia da operação

    ?>

</body>
</html>
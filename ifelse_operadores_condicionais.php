<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
    
    <?php 

        //Operadores Condicionais

        # Igual

        if(2 == 2){
            echo 'Verdadeiro';
        }
        else{
            echo 'Falso';
        }

        echo '<br/>';

        # Idêntico

        if(2 === '2'){
            echo 'Verdadeiro';
        }
        else{
            echo 'Falso';
        }

        echo '<br/>';

        # Diferente

        if(10 != 9){
            echo 'Verdadeiro';
        }
        else{
            echo 'Falso';
        }

        echo '<br/>';

        # Diferente (alternativo)

        if(10 <> 9){
            echo 'Verdadeiro';
        }
        else{
            echo 'Falso';
        }
        
        echo '<br/>';

        # Não idêntico

        if(10 !== '10'){
            echo 'Verdadeiro';
        }
        else{
            echo 'Falso';
        }

        echo '<br/>';

        # Menor

        if(11 < 8){
            echo 'Verdadeiro';
        }
        else{
            echo 'Falso';
        }

        echo '<br/>';

        # Maior

        if(10 > 5){
            echo 'Verdadeiro';
        }
        else{
            echo 'Falso';
        }

        echo '<br/>';

        # Menor ou igual

        if(10 <= 10){
            echo 'Verdadeiro';
        }
        else{
            echo 'Falso';
        }

        echo '<br/>';

        # Maior ou igual

        if (10 >= 11){
            echo 'Verdadeiro';
        }
        else{
            echo 'Falso';
        }


    ?>

</body>
</html>
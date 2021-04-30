<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
    
    <?php 

        $contador = 0;

        while($contador <= 10){
            echo "Valor atual do contador: $contador <br/>";

            if($contador == 5){
                echo 'Metade da contagem <br/>';
                break;
            }

            $contador++;
        };

    ?>

</body>
</html>
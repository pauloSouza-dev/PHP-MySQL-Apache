<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
    
    <?php 

            $contador = 0;

            do{
                echo "$contador <br/>" ;
                $contador++;
            }while($contador < 10); #Primeiro executa o códico dentro do escopo, depois verifica a condição.

    ?>

</body>
</html>
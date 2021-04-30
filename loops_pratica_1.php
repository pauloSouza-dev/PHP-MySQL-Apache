<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
    
    <?php 

        $lista_jogos = ['Dark Souls 3','God of War','League of legends','Need for speed'];
        $contador = 0;

        /*
        while( $contador <= 3){
            echo "$lista_jogos[$contador] <br/>";
            $contador++;
        }*/

        /*
        do{
            echo "$lista_jogos[$contador] <br/>";
            $contador++;
        }while($contador <= 3);*/

        /*
        for($i = 0; $i <= 3; $i++){
            echo "$lista_jogos[$i] <br/>";
        }*/

        echo '<pre>';
         print_r($lista_jogos);
        echo '</pre>';


    ?>

</body>
</html>
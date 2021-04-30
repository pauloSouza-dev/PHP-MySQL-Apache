<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
    
    <?php 

        #inicialização do array
        $sorteio_megasena = [];

        while(count($sorteio_megasena) < 6){

            # gera um número aleatório entre 1 e 60
            $numero_aleatorio = rand(1,60);

            # verifica se o número gerado aleatoriamente ja esta no array
            if(!(in_array($numero_aleatorio,$sorteio_megasena))){
                $sorteio_megasena[] = $numero_aleatorio;
            }

        }

        echo '<pre>';
            print_r($sorteio_megasena);
        echo '</pre>';

    ?>

</body>
</html>
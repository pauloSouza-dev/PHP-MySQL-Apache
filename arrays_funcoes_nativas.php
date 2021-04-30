<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
    
    <?php 

        # is_array() 
        echo '<h3> is_array() </h3>';

        $array = array();
        $teste_array = is_array($array);

        if($teste_array){
            echo 'Sim,é um array';
        }else{
            echo 'Não é um array';
        }

        echo '<hr>';

        # array_keys()
        echo '<h3> array_keys() </h3>';

        $array2 = array(1 => 'Paulo',
            10 => 'Natalia',
            500 =>'Isa',
            'c' => 'Guilherme');

        $array2_keys = array_keys($array2);
        
        echo '<pre>';
            print_r($array2);
        echo '</pre>';
        echo '<br>';
        echo '<pre>';
            print_r($array2_keys);
        echo '</pre>';
        echo '<hr>';

        # sort() // ordenar
        echo '<h3>Método sort()</h3>';

        $array3 = array('b','c','e','a','d');

        echo '<pre>';
            print_r($array3);
        echo '</pre>';

        sort($array3);

        echo '<pre>';
            print_r($array3);
        echo '</pre>';

        echo '<hr>';

        # asort() // ordenar sem mudar os indíces
        echo '<h3>Método asort()</h3>';

        $array4 = array('b','c','e','a','d');

        echo '<pre>';
            print_r($array4);
        echo '</pre>';

        asort($array4);

        echo '<pre>';
            print_r($array4);
        echo '</pre>';
        echo '<hr>';

        # count() // mostra o tamanho do array

        echo '<h3> count() do segundo array </h3>';

        echo "O segundo array da página contém " . count($array2) . " indíces";
        echo '<hr>';

        # array_merge() //funde um ou mais arrays

        echo '<h3> array_merge() </h3>';

        $lista_pessoas = array('Paulo','Isa');
        $lista_carros = ['Gol','Uno','Palio'];
        $lista_tarefas = array('Lavar','Cozinhar','Concertar');

        $arrays_mesclados = array_merge($lista_pessoas,$lista_carros,$lista_tarefas);

        echo '<pre>';
            print_r($arrays_mesclados);
        echo '</pre>';
        echo '<hr>';

        # explode() // divide uma string baseada em um delimitador
        echo '<h3>explode()</h3>';


        $string = 'Paulo henrique de souza vinhal';

        $novo_array_string = explode(' ',$string);

        echo '<pre>';
         print_r($novo_array_string);
        echo '</pre>';
        echo '<hr>';

        # implode() // junta os elementos de um array em uma string
        echo '<h3> implode() </h3>';

        $array_natalia = array('Natalia','da','Silva','Borges');

        $nome_natalia = implode(' ',$array_natalia);
        
        echo '<pre>';
            print_r($array_natalia);
        echo '</pre>';

        echo "Resultado do implode() = $nome_natalia";

    ?>

</body>
</html>
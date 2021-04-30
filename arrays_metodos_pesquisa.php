<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
    
    <?php 

        # in_array(nome,array) retorna true ou false para a existência de determinado indice.
        # array_search(nome,array) retorna o indice do valor pesquisado caso ele exista.
        

        $lista_frutas = array('Morango','Abacaxi','Pêra','Limão');

        echo '<pre>';
        print_r ($lista_frutas);
        echo '</pre>';

        $existe =  in_array('Pêra',$lista_frutas); # true or false = 1 or ''

        if($existe){
            echo 'Existe';
        }else{
            echo 'Não existe';
        }

        $existe_and_indice = array_search('Abacaxi', $lista_frutas);

        echo '<br>';
        echo $existe_and_indice;
        echo '<br>';
        
        if($existe_and_indice != null){
            echo "O valor esta contido no indice $existe_and_indice";
        }else{
            echo 'O valor não existe neste array';
        }


        /*
        $lista_coisas = [
            'Frutas' => ['Banana','Maçã','Morango'],
            'Pessoas' => array('José','Ana','Paulo')
        ];

        $existe = in_array('Natalia',$lista_coisas['Pessoas']);

        if($existe){
            echo 'Existe no array';
        }else{
            echo 'Não existe no array';
        }
        */
    ?>

</body>
</html>
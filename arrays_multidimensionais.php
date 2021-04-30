<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
    
    <?php 

        $lista_coisas = array();

        $lista_coisas['frutas'] = array(1 => 'banana',2 => 'maçã',3 =>'uva',4 =>'limão');
        $lista_coisas['pessoas'] = array(1 => 'José', 2=> 'Pedro', 3 => 'Paulo');

        echo '<pre>';
        print_r($lista_coisas);
        echo '</pre>';

        # recuperar 'Pedro'

        echo $lista_coisas['pessoas'][2];
        echo '<br>';

        # recuperar 'maçã'

        echo $lista_coisas['frutas'][2];


    ?>

</body>
</html>
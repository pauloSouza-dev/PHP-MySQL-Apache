<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
    
    <?php 

        # Casting é o ato de alterar o tipo da váriavel: int,float,string,boolean

        $valor = true;
        //$teste = (float) $valor; #float,double,real
        //$teste = (string) $valor;
        //$teste = (bool) $valor; #bool,boolean
        $teste = (string) $valor;

        echo $valor . ' ' . gettype($valor);
        echo '<br/>';
        echo  $teste . ' ' . gettype($teste);

    ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
    
    <?php 

        $idade = 18;
        
       
        /*
        if($idade < 18){
            echo 'Menor de idade';
        }
        else{
            echo 'Maior de idade';
        }
        */

    ?>

    <?=  $idade < 18 ? 'Menor de idade' : 'Maior de idade'; ?>


</body>
</html>
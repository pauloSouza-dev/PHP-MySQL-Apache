<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
    
    <?php 

        $idade = 25;
        $peso = 40;
        
        if($idade >= 16 && $idade <= 69 && $peso >= 50){
            echo 'Atende aos requisitos';
        }
        else{
            echo 'Não atende aos requisitos';
        }

    ?>

</body>
</html>
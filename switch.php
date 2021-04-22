<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
    
    <?php 

        $escolha = 2;
        
        switch($escolha){
            case 1:
                echo 'Entrou no case 1';
                break;
            case 2:
                echo 'Entrou no case 2';
                break;
            case 3:
                echo 'Entrou no case 3';
                break;
            default:
                echo 'Escolha inválida';
                break;
        }

    ?>

</body>
</html>
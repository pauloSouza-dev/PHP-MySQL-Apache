<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
    
    <?php 

        $salario = 3900;
        $imposto = 0;
        
        function caucularImpostoDeRenda($salario){

            if($salario <= 1903.98){
                $imposto = 0;
            }
            else if($salario >= 1903.99 && $salario <= 2826.65){
                $imposto = 7.5 / 100;
            }
            else if($salario >= 2826.66 && $salario <= 3751.05){
                $imposto = 15 / 100;
            }
            else if($salario >= 3751.06 && $salario <= 4664.68){
                $imposto = 22.5 / 100;
            }
            else if($salario > 4664.68){
                $imposto = 27.5 / 100;
            }

            echo "O imposto a ser pago sobre o salário é de $imposto <br/>";

            $total = $imposto * $salario;

            echo "O seu imposto de renda ficou em $total";

        }

        caucularImpostoDeRenda($salario);

    ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
    
    <?php 
    
        $possui_cartao = true;
        $valor_compra = 200;
        $desconto_frete = false;
        $valor_frete = 50;



    ?>

    <h1>Detalhes do pedido</h1>
    <p>
        
        Possui cartão da loja?

        <?php 
            if($possui_cartao == true){
                echo 'SIM';
            }
            else{
                echo 'Não';
            }
        ?>

    </p>

    <p>Valor da compra: <?= $valor_compra ?></p>

    <p>
        Recebeu desconto no frete? 

        <?php 
            if($possui_cartao == true && $valor_compra >= 100){
                echo 'SIM';
                $valor_frete = 0;
            }
            else{
                echo 'NÂO';
            }
        ?>

    </p>

    <p>Valor do frete: <?= $valor_frete ?></p>

</body>
</html>
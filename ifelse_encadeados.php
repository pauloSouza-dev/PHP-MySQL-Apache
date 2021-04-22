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
        $desconto_frete = true;
        $valor_frete = 50;

        if($possui_cartao && $valor_compra >= 300 ){
            $valor_frete = 0;
        }
        else if($possui_cartao && $valor_compra >= 200){
            $valor_frete = 20;
        }
        else if($possui_cartao && $valor_compra >= 100){
            $valor_frete = 30;
        }
        else{
            $desconto_frete = false;
            $valor_frete = 50;
        }


    ?>

    <h1>Detalhes do pedido</h1>
    <h3>Desconto frete: Acima de 100 desconto de 20$, Acima de 200 desconto de 30$, Acima de 300 o frete sai de graça!</h3>
    <p>
        
        Possui cartão da loja?

        <?php 
            if($possui_cartao){
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
        <?php if($desconto_frete){
            echo 'SIM';
        }
        else{
            echo 'NÃO';
        }
        
        ?>

    </p>

    <p>Valor do frete: <?= $valor_frete ?></p>

</body>
</html>
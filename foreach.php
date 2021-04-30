<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>
<body>
    
    <?php 

            $lista_tecnologias = [
                'Linguagens' => ['HTML','CSS','JS','PHP'],
                'Bibliotecas'  => ['BootStrap','FlexBox'],
                'Cursos' => ['Desenvolvimento web','Lógica de programação','Estrutura de dados'],
            ];
            
            foreach($lista_tecnologias as $id => $categorias){

                if($id == 'Linguagens'){
                    echo '<h1> Linguagens: </h1>';
                }else if($id == 'Bibliotecas'){
                    echo '<h1> Bibliotecas: </h1>';
                }else if($id == 'Cursos'){
                    echo '<h1> Cursos: </h1>';
                }

                foreach($categorias as $valores ){
                    echo "$valores <br/>";
                };
            };


            

    ?>

</body>
</html>
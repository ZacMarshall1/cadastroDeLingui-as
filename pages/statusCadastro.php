<?php 
    require_once __DIR__ . '/../database/funcoesDatabase.php';
    require_once __DIR__ . '/../util/validacoes.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main>
        <?php 
            if(form_nao_enviado()){
                echo "<h1>Por favor, preencha todos os campos do form <h1/>";
                die;
            }else{
                echo "<h1>Linguiça Cadastrada Com Sucesso<h1/>";
                //salvando informações em variáveis locais
                $nome = $_POST["linguicaNome"];
                $tamanho = $_POST["tamanhoLinguica"];
                $preco = $_POST["precoLinguica"];

                //chama a função que insere a linguiça no banco de dados;
                novaLinguica($nome, $tamanho, $preco);
            }
        ?>

        <a href="mostrarLinguica.php">Ver Linguiças Cadastradas</a>
    </main>
</body>
</html>
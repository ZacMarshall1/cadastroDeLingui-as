<?php 
    require_once __DIR__ . '/../database/funcoesDatabase.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Linguiças</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main>
        <h1>
        Linguiças cadastradas
        </h1>

        <?php
            pegarLinguica();
        ?>
    </main>
</body>
</html>
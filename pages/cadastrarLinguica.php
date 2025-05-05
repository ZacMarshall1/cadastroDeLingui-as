<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Linguiça</title>
</head>
<body>
    <main>
        <h1>
            Cadastre sua linguiça aqui.
        </h1>

        <div>
            <form action="mostrarLinguica.php" method="get">
                <p>
                    <label for="linguicaNome">Tipo de linguiça</label>
                    <br>
                    <select name="linguicaNome" id="linguicaNome">
                        <option value="Linguica toscana">Linguiça toscana</option>
                        <option value="linguica calabresa">Linguica calabresa</option>
                        <option value="linguica portuguesa">Linguiça portuguesa</option>
                        <option value="linguica de frango"> Linguiça de frango</option>
                    </select>
                </p>

                <p>
                    <label for="tamanhoLinguica">Qual o tamanho da sua Linguiça?</label>
                    <br>
                    <input type="number" name="tamanhoLinguica" id="tamanhoLinguica" step="0.01" required>
                </p>

                <p>
                    <label for="PrecoLingucia">Qual o preço da sua Linguiça?</label>
                    <br>
                    <input type="number" name="precoLinguica" id="precoLinguica" step="0.01" required>
                </p>
                <input type="submit" value="Cadastrar Linguiça">
            </form>
        </div>
    </main>
</body>
</html>
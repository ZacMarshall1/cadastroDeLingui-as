<?php 
    require_once 'conexao.php';
    $conn = conectar_banco();

    // Função para inserir uma nova linguiça com segurança
    function novaLinguica($nome, $tamanho, $preco) {
        global $conn;

        // Prevenção contra XSS
        $nome = htmlspecialchars($nome, ENT_QUOTES, 'UTF-8');
        
        // Converter valores numéricos para string
        $tamanho = $tamanho;
        $preco = $preco;

        $q = "INSERT INTO linguicas (nome, tamanho, preco) VALUES (?, ?, ?)";

        $stmt = $conn->prepare($q);
        $stmt->bind_param("sss", $nome, $tamanho, $preco); // Tudo tratado como string
        $stmt->execute();
        $stmt->close();
    }

    // Função para buscar linguiças
    function pegarLinguica() {
        global $conn;
        $q = "SELECT * FROM linguicas";

        $result = $conn->query($q);
        
        while ($row = $result->fetch_assoc()) {
            echo "Nome: " . html_entity_decode($row['nome'], ENT_QUOTES, 'UTF-8') . "<br>";
            echo "Tamanho: " . number_format((float)$row['tamanho'], 2, ',', '.') . "cm" . "<br>";
            echo "Preço: R$ " . number_format((float)$row['preco'], 2, ',', '.') . "<br>";
        }
    }

    // Função para atualizar linguiça
    function editarLinguica($id, $novoNome, $novoTamanho, $novoPreco) {
        global $conn;

        $novoNome = htmlspecialchars($novoNome, ENT_QUOTES, 'UTF-8');
        $novoTamanho = (string) $novoTamanho;
        $novoPreco = (string) $novoPreco;

        $q = "UPDATE linguicas SET nome = ?, tamanho = ?, preco = ? WHERE id = ?";
        $stmt = $conn->prepare($q);
        $stmt->bind_param("sssi", $novoNome, $novoTamanho, $novaPreco, $id);

        if ($stmt->execute()) {
            echo "Linguiça atualizada com sucesso!";
        } else {
            echo "Erro ao atualizar linguiça: " . $stmt->error;
        }

        $stmt->close();
    }

    // Função para deletar linguiça
    function deletarLinguica($id) {
        global $conn;

        $sql = "DELETE FROM linguicas WHERE id = ?";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            die("Erro na preparação da query: " . $conn->error);
        }

        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            echo "Linguiça deletada com sucesso!";
        } else {
            echo "Erro ao deletar linguiça: " . $stmt->error;
        }

        $stmt->close();
    }
    // Teste das funções
    //novaLinguica('Linguica "Teste"', 99.99, 10);
    //editarLinguica(2, 'Linguica <Atualizado>', 120.50, 15);
    //deletarLinguica(2);
    //pegarLinguica();
?>

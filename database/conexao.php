<?php 
    function conectar_banco() {

        //Define variáveis para facilitar alterações no banco
        $db_server = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_name = "linguica_cadastro";

        // Ativa exceções para erros do MySQLi
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        try {
            $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
        } catch (mysqli_sql_exception $e) {
            die("Não foi possível conectar ao banco de dados.<br>Erro: " . $e->getMessage());
        }
        
        return $conn;
    }
?>
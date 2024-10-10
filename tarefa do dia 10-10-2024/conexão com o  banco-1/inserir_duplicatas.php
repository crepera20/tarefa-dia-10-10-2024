<?php
// Dados de conexão com o banco de dados
$host = "localhost"; // Altere se necessário
$usuario = "root"; // Altere se necessário
$senha = ""; // Altere se necessário
$banco = "ContasReceber";

// Conexão com o banco de dados
$conexao = new mysqli($host, $usuario, $senha, $banco);

// Verificar se a conexão foi bem-sucedida
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

// Receber dados do formulário
$nome = $_POST['nome'];
$numero = $_POST['numero'];
$valor = $_POST['valor'];
$vencimento = $_POST['vencimento'];
$banco = $_POST['banco'];

// Inserir os dados na tabela Duplicatas
$sql = "INSERT INTO Duplicatas (Nome, Numero, Valor, Vencimento, Banco) VALUES ('$nome', '$numero', '$valor', '$vencimento', '$banco')";

if ($conexao->query($sql) === TRUE) {
    echo "Duplicata inserida com sucesso!";
} else {
    echo "Erro ao inserir duplicata: " . $conexao->error;
}

// Fechar a conexão
$conexao->close();
?>

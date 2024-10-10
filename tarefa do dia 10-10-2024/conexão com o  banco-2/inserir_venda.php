<?php
$servername = "localhost"; // Ajuste se necessário
$username = "root"; // Ajuste conforme seu ambiente
$password = ""; // Ajuste conforme seu ambiente
$dbname = "vendas"; // Nome do banco de dados

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Recebe os dados do formulário
$numero_nf = $_POST['numero_nf'];
$valor_total = $_POST['valor_total'];
$icms = $_POST['icms'];

// Insere os dados na tabela Venda
$sql = "INSERT INTO Venda (Numero_NF, ValorTotal_NF, ICMS)
        VALUES ('$numero_nf', '$valor_total', '$icms')";

if ($conn->query($sql) === TRUE) {
    echo "Venda inserida com sucesso!";
} else {
    echo "Erro ao inserir venda: " . $conn->error;
}

// Fecha a conexão
$conn->close();
?>

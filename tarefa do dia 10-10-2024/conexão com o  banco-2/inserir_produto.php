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
$codigo_produto = $_POST['codigo_produto'];
$descricao_produto = $_POST['descricao_produto'];
$preco_produto = $_POST['preco_produto'];
$peso_produto = $_POST['peso_produto'];

// Insere os dados na tabela Produto
$sql = "INSERT INTO Produto (Codigo_Produto, Descricao_Produto, Preco_produto, Peso)
        VALUES ('$codigo_produto', '$descricao_produto', '$preco_produto', '$peso_produto')";

if ($conn->query($sql) === TRUE) {
    echo "Produto inserido com sucesso!";
} else {
    echo "Erro ao inserir produto: " . $conn->error;
}

// Fecha a conexão
$conn->close();
?>

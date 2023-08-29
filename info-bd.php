<?php
// Recupere os dados do formulário
$nome_servidor = $_POST["nome_servidor"];
$mes = $_POST["mes"];
$ano = $_POST["ano"];
$frequencia = $_FILES["frequencia"]["name"];

// Crie a consulta SQL para inserir os dados
$sql = "INSERT INTO tabela_frequencia (nome_servidor, mes, ano, frequencia) VALUES ('$nome_servidor', '$mes', '$ano', '$frequencia')";

// Execute a consulta SQL
if (mysqli_query($conn, $sql)) {
    echo "Dados inseridos com sucesso.";
} else {
    echo "Erro ao inserir dados: " . mysqli_error($conn);
}

// Feche a conexão com o banco de dados
mysqli_close($conn);
?>

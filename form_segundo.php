<?php
    $servername = "localhost";
    $username = "root";
    $password = " ";
    $dbname = "IFMA";

    // Criar uma conexão com o banco de dados
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Verificar a conexão
    if (!$conn) 
    {
        die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
    }
    ?>
<?php
// formulario_segundo.php

// Recupera os parâmetros da URL
$nome_servidor = isset($_GET["nome_servidor"]) ? htmlspecialchars($_GET["nome_servidor"]) : "";
$mes = isset($_GET["mes"]) ? htmlspecialchars($_GET["mes"]) : "";
$ano = isset($_GET["ano"]) ? htmlspecialchars($_GET["ano"]) : "";
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Frequência do Servidor</title>
</head>
<body>
    <h1>Formulário de Frequência do Servidor</h1>
    
    <!-- Formulário com informações pré-preenchidas -->
    <form method="post" enctype="multipart/form-data">
        <label for="nome_servidor">Nome do Servidor:</label>
        <input type="text" name="nome_servidor" id="nome_servidor" value="<?php echo $nome_servidor; ?>" required>
        <br><br>
        
        <label for="mes">Mês:</label>
        <input type="text" name="mes" id="mes" value="<?php echo $mes; ?>" readonly>
        <br><br>
        
        <label for="ano">Ano:</label>
        <input type="text" name="ano" id="ano" value="<?php echo $ano; ?>" readonly>
        <br><br>
        
        <label for="frequencia">Upload da Frequência do Servidor:</label>
        <input type="file" name="frequencia" id="frequencia" required>
        <br><br>
        
        <input type="submit" name="enviar" value="Enviar">
        <input type="reset" value="Limpar Campo">
        <input type="button" value="Voltar" onclick="window.location.href = 'index.php';">
    </form>
    
    <?php
    // Processar os dados do segundo formulário aqui, se necessário
    if ($_SERVER["REQUEST_METHOD"] === "POST") 
    {
        // Obter dados do formulário
        $nome_servidor = $_POST["nome_servidor"];
        $mes = $_POST["mes"];
        $ano = $_POST["ano"];
        $frequencia = $_FILES["frequencia"]["name"]; // Nome do arquivo enviado

        // Aqui você pode adicionar código para processar os dados, como salvar o arquivo de frequência no servidor
    }
    ?>
</body>
</html>

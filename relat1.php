
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir Relatórios</title>
    <style>
        
    </style>
</head>
<body>
    <h1>Exibir Relatórios</h1>

    <!-- Formulário de pesquisa -->
    <form action="exibir-rel.php" method="post">
        <label for="nome_servidor">Nome do Servidor:</label>
        <input type="text" id="nome_servidor" name="nome_servidor" required>

        <label for="mes">Mês:</label>
        <select id="mes" name="mes">
        <option value="Janeiro">Janeiro</option>
            <option value="Fevereiro">Fevereiro</option>
            <option value="Março">Março</option>
            <option value="Abril">Abril</option>
            <option value="Maio">Maio</option>
            <option value="Junho">Junho</option>
            <option value="Julho">Julho</option>
            <option value="Agosto">Agosto</option>
            <option value="Setembro">Setembro</option>
            <option value="Outubro">Outubro</option>
            <option value="Novembro">Novembro</option>
            <option value="Dezembro">Dezembro</option>
            <!-- Adicione os outros meses aqui -->
        </select>

        <input type="submit" value="Pesquisar"><br><br>

        <a href="inicial.php">Voltar à Tela Inicial</a>
    </form>
</body>
</html>

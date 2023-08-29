
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Frequência do Servidor</title>
    <style>
        .btn 
        {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Formulário de Frequência do Servidor</h1>
    
    <!-- Formulário de Seleção de Mês e Ano -->
    <form action="form_segundo.php" method="post">
        <label for="nome_servidor">Nome do Servidor:</label>
        <input type="text" name="nome_servidor" id="nome_servidor" required>
        <br><br>
        
        <label for="mes">Mês:</label>
        <select name="mes" id="mes" required>
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
        </select>
        <br><br>
        
        <label for="ano">Ano:</label>
        <select name="ano" id="ano" required>
            <?php
            // Crie opções para os anos de 2000 a 2050
            for ($ano = 2000; $ano <= 2050; $ano++) 
            {
                echo "<option value='$ano'>$ano</option>";
            }
            ?>
        </select>
        <br><br>

        <label for="setor">Setor:</label>
        <select name="setor" id="setor" required>
            <option value="cae">CAE</option>
            <option value="de">CAPI</option>
            <option value="ceof">CEOF</option>
            <option value="cgp">CGP</option>
            <option value="clcc">CLCC</option>
            <option value="ctic">CTIC</option>
            <option value="dap">DAP</option>
            <option value="dde">DDE</option>
            <option value="de">DE</option>
            <option value="de">DERI</option>
        </select>
        <br><br>

        <label for="dat">Entrada em exercício:</label>
        <input type="date" id="dat" name="dat">
        <br><br>

        <label for="frequencia">Upload da Frequência do Servidor:</label>
        <input type="file" name="frequencia" id="frequencia" required>
        <br><br>
        
        <input type="submit" name="enviar" value="Enviar">
        <input type="reset" value="Limpar Campo"><br><br>

        <a href="inicial.php" class="btn">Voltar à Tela Inicial</a>
    </form>

</body>
</html>

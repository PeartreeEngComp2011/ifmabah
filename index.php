<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Frequência do Servidor</title>
</head>
<body>
    <h1>Formulário de Frequência do Servidor</h1>
    
    <!-- Formulário de Seleção de Mês e Ano -->
    <form id="selecaoForm">
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
        
        <input type="submit" value="Selecionar">
    </form>

    <script>
    // JavaScript para redirecionar o usuário com base nas seleções de mês e ano
    document.getElementById("selecaoForm").addEventListener("submit", function(event) 
    {
        event.preventDefault(); // Impede o envio padrão do formulário
        
        var nomeServidor = document.getElementById("nome_servidor").value;
        var mesSelecionado = document.getElementById("mes").value;
        var anoSelecionado = document.getElementById("ano").value;
        
        // Redireciona o usuário para o segundo formulário com as seleções
        window.location.href = "form_segundo.php?nome_servidor=" + encodeURIComponent(nomeServidor) + "&mes=" + encodeURIComponent(mesSelecionado) + "&ano=" + encodeURIComponent(anoSelecionado);
    });
    </script>
</body>
</html>

<?php
// Primeiro código PHP
function obterResultadosDoPrimeiroCodigo($nome_servidor, $mes) 
{
    $mysqli = new mysqli("localhost", "root", "", "ifmabah");

    // Verifique a conexão
    if ($mysqli->connect_error) 
    {
        die("Erro na conexão com o banco de dados: " . $mysqli->connect_error);
    }

    // Crie a consulta SQL
    $sql = "SELECT * FROM tabela_frequencia WHERE nome_servidor = ? AND mes = ?";
    
    // Prepare a consulta
    $stmt = $mysqli->prepare($sql);
    
    if ($stmt === false) 
    {
        die("Erro na preparação da consulta: " . $mysqli->error);
    }
    
    // Associe os parâmetros
    $stmt->bind_param("ss", $nome_servidor, $mes);
    
    // Execute a consulta
    if ($stmt->execute() === false) 
    {
        die("Erro na execução da consulta: " . $stmt->error);
    }
    
    // Obtenha os resultados
    $result = $stmt->get_result();
    
    // Transforme os resultados em um array
    $resultados = [];
    while ($row = $result->fetch_assoc()) 
    {
        $resultados[] = $row;
    }
    
    // Feche a consulta e a conexão
    $stmt->close();
    $mysqli->close();

    return $resultados;
}
// ...
?>

<?php
// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    // Recupere os valores do formulário
    $nome_servidor = $_POST["nome_servidor"];
    $mes = $_POST["mes"];

    // Chame a função para obter os resultados
    $resultados_primeiro_codigo = obterResultadosDoPrimeiroCodigo($nome_servidor, $mes);

    // Exibir os resultados na tabela
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Nome do Servidor</th>";
    echo "<th>Mês</th>";
    echo "<th>Frequência</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    foreach ($resultados_primeiro_codigo as $resultado) 
    {
        echo "<tr>";
        echo "<td>" . $resultado['nome_servidor'] . "</td>";
        echo "<td>" . $resultado['mes'] . "</td>";
        echo "<td>" . $resultado['frequencia'] . "</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
}
?>

<html>
    <div>
        <a href="inicial.php" class="btn">Voltar à Tela Inicial</a>
    </div>
</html>


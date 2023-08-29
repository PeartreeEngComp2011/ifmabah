<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    //Variáveis
    $nome_servidor = $_POST["nome_servidor"]; 
    $mes = $_POST["mes"];
    $ano = $_POST["ano"];
    $frequencia = $_POST["frequencia"];
    $setor = $_POST["setor"];
    $dat = $_POST["dat"];
    //Conexão com o banco de dados
    $conn = new mysqli("localhost","root","","ifmabah");
    if($conn->connect_error)
    {
        die("Erro na conexão: ". $conn->connect_error);
    }
    //Inserir no banco de dados as informações
    $sql = "INSERT INTO tabela_frequencia (nome_servidor, mes, ano, frequencia, setor, dat) 
    VALUES ('$nome_servidor', '$mes', '$ano', '$frequencia','$setor','$dat')";
    if($conn->query($sql) === TRUE)
    {
        echo "Seus dados foram salvos com sucesso!";
        header("Location: index.php");
    }else
    {
        echo "Erro ao adicionar a tarefa: " .$conn->error;
    }

    $conn->close();
}

?>
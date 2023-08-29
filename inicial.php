<!DOCTYPE html>
<html>
<head>
    <title>Tela Inicial</title>
    <style>
        body 
        {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container 
        {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 
        {
            text-align: center;
            color: #333;
        }

        label 
        {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] 
        {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] 
        {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        input[type="submit"]:hover 
        {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Tela Inicial</h1>
    <div class="container">
        <form action="index.php" method="post">
            <button type="submit">Cadastrar Frequências</button>
        </form><br><br>

        <form action="relat1.php" method="post">
            <button type="submit">Gerar Relatórios</button>
        </form><br><br>
    </div>
</body>
</html>

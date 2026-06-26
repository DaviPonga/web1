<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <?php
    // verifica se variaveis  nome, email peso e altura, e calcula o IMC,se não existir redireciona para a página 10-pagina2.php
    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['peso']) && isset($_POST['altura'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];

        $imc = $peso / ($altura * $altura);
        $imc_formatado = number_format($imc, 2, ',', '.');

        echo "<h1>Resultado</h1>";
        echo "<ul>";
        echo "<li>Nome: $nome</li>";
        echo "<li>E-mail: $email</li>";
        echo "<li>Peso: $peso kg</li>";
        echo "<li>Altura: $altura m</li>";
        echo "<li>IMC: $imc_formatado</li>";
        echo "</ul>";
    } else {
        header("Location: 10-pagina2.php?erro=faltando_dados");
    }
    ?>  
</body>
</html>
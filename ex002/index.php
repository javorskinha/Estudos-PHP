<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex002</title>
</head>
<body>
    <h1>Exemplo de php</h1>
    <?php
        date_default_timezone_set("America/Sao_Paulo");
        echo "<p>Hoje é dia " . date("d/M/Y") . "</p> <br>";
        echo "<p> e são " . date("H:i:s") . " horas.</p>";
        $last_name = "Javorski";
        echo "<p>Meu sobrenome é " . $last_name . "</p>";
        const FIRST_NAME = "Andrieli";
        echo "<p>Meu nome é " . FIRST_NAME . "</p>";
    ?>
</body>
</html>
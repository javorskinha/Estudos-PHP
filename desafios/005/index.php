<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 005</title>
</head>
<body>
    <h1>Desafio 005</h1>
    <div>
        <p>Analisador de numeros reais</p>
        <p>Informe um numero real: </p>
        <form action="index.php" method="post">
            <input type="number" name="numero" id="numero" step="any">
            <button type="submit">analisar</button>
        </form>
    </div>
    <?php
        if(isset($_POST['numero'])) {
            $numero = floatval($_POST['numero']);
            $inteiro = intval($numero);
            $decimal = $numero - $inteiro;
            echo "<ul>
                    <li>O numero informado foi: <strong>$numero</strong></li>
                    <li>A parte inteira é: <strong>$inteiro</strong></li>
                    <li>A parte decimal é: <strong>$decimal</strong></li>
                </ul>";
        }
    ?>
</body>
</html>
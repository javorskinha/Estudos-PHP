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
        <form action="index.php" method="post">
            <label for="numero">Informe um numero real: </label>
            <br>
            <input type="number" name="numero" id="numero" step="any">
            <br>
            <button type="submit" style="margin-top: 10px;">analisar</button>
        </form>
    </div>
    <?php
        if(isset($_POST['numero'])) {
            $numero = floatval($_POST['numero']);
            $inteiro = intval($numero);
            $fracao = $numero - $inteiro;
            echo "<ul>
                    <li>O numero informado foi: <strong>" . number_format($numero, 3, ',', '.') . "</strong></li>
                    <li>A parte inteira é: <strong>" . number_format($inteiro, 0, ',', '.') . "</strong></li>
                    <li>A parte fracionária é: <strong>" . number_format($fracao, 3, ',', '.') . "</strong></li>
                </ul>";
        }
    ?>
</body>
</html>
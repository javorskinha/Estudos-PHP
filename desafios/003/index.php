<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 003</title>
</head>
<body>
    <h1>Desafio 003</h1>
    <div>
        <p>Conversor de moedas v1.0</p>
        <p>Informe a quantidade de reais: </p>
        <form action="index.php" method="post">
            <input type="number" name="reais" id="reais" step="any">
            <p>Informe a cotação do dolar: </p>
            <input type="number" name="cotacao" id="cotacao" step="any">
            <br>
            <button type="submit" name="converter" style="margin-top: 10px;">converter</button>
        </form>
        <?php
            if(isset($_POST['converter'])) {
                $reais = floatval($_POST['reais']);
                $cotacao = floatval($_POST['cotacao']);
                $resultado = $reais / $cotacao;

                $currency = numfmt_create('pt_BR', NumberFormatter::CURRENCY);
                $resultado = numfmt_format_currency($currency, $resultado, 'USD');
                echo "
                    <p>O valor em dolar é: $resultado</p>
                ";
            }
        ?>
    </div>
</body>
</html>
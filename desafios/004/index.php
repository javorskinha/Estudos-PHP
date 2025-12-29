<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 004</title>
</head>
<body>
    <h1>Desafio 004</h1>
    <div>
        <p>Conversor de moedas v2.0</p>
        <form action="index.php" method="post">
            <input type="number" step="any" name="reais" id="reais">
            <button type="submit">calcular</button>
        </form>
    </div>
    <?php
        if(isset($_POST['reais'])) {
            $reais = floatval($_POST['reais']);

            $dataInicial = date('m-d-Y', strtotime('-7 days'));
            $dataFinalCotacao = date('m-d-Y');

            $request = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='{$dataInicial}'&@dataFinalCotacao='{$dataFinalCotacao}'&\$top=1&\$orderby=dataHoraCotacao%20desc&\$format=json&\$select=cotacaoCompra,dataHoraCotacao";

            $response = @file_get_contents($request);
            $cotacaoJson = json_decode($response, true);
            $cotacaoValue = $cotacaoJson['value'][0]['cotacaoCompra'];
            $resultado = $reais / $cotacaoValue;

            $currency = numfmt_create('pt_BR', NumberFormatter::CURRENCY);
            $resultado = numfmt_format_currency($currency, $resultado, 'USD');

            echo "<p>O valor em dolar é: $resultado</p>";
        }
    ?>
</body>
</html>
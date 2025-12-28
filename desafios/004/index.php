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

            $dataCotacao = date('m-d-Y');

            $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='{$dataCotacao}'&\$top=100&\$format=json";
                
            $response = @file_get_contents($url);
                    
            if($response !== false) {
                $apiCotacao = json_decode($response, true);
                
                if(isset($apiCotacao['value']) && count($apiCotacao['value']) > 0) {
                    $cotacaoDia = $apiCotacao['value'][0];
                    $cotacao = $cotacaoDia['cotacaoVenda'];
                    
                    $resultado = $reais / $cotacao;
                    echo "<p>Cotacao do dolar (venda): R$ " . number_format($cotacao, 4, ',', '.') . "<p>";
                    echo "<p>O valor em dolar é: US$ " . number_format($resultado, 2, ',', '.') . "</p>";
                } else {
                    echo "<p>Erro: Nenhuma cotação encontrada para hoje. Tente novamente mais tarde.<p>";
                }
            }
        }
    ?>
</body>
</html>
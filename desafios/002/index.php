<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 002</title>
</head>
<body>
    <h1>Desafio 002</h1>
    <div>
        <p>Sorteando numeros aleatorios</p>
        <p>Gerando numeros aleatorios entre 1 e 100...</p>
        <form action="index.php" method="post">
            <button type="submit" name="sortear">Sortear numero</button>
        </form>
        <?php
            if(isset($_POST['sortear'])) {
                $numeroSorteado = mt_rand(1, 100);
                echo "<p>O numero sorteado foi: $numeroSorteado</p>";
            }
        ?>
    </div>
</body>
</html>
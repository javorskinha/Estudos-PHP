<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 001</title>
</head>
<body>
    <h1>Desafio 001</h1>
    <div>
        <p>Informe um numero: </p>
        <form action="index.php" method="post">
            <input type="number" name="numero1" id="numero1">
            <button type="submit">calcular</button>
        </form>
        <?php
            if(isset($_POST['numero1'])) {
                $numero1 = $_POST['numero1'];
                $antecessor = $numero1 - 1;
                $sucessor = $numero1 + 1;
                echo "<p>O numero informado foi: $numero1 </p> <br> <p> O antecessor é: $antecessor </p> <br> <p> O sucessor é: $sucessor </p>";
            }
        ?>
    </div>
</body>
</html>
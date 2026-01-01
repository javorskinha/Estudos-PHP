<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../crudphp/css/bootstrap.min.css">
    <title>Ex006</title>
</head>
<body>
    <main class="container">
        <h1>Ex006</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="post">
            <div class="form-group">
                <label for="num1">Numero 1</label>
                <input type="number" name="num1" id="num1" class="form-control">
            </div>
            <div class="form-group">
                <label for="num2">Numero 2</label>
                <input type="number" name="num2" id="num2" class="form-control">
            </div>
            <button type="submit" name="somar" class="btn btn-primary w-100 mt-3">Somar</button>
        </form>
    </main>
    <?php
        if(isset($_POST['somar'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $soma = $num1 + $num2;
            echo "<div class='alert alert-success text-center mt-3'>O resultado da soma é: $soma</div>";
        }
    ?>
</body>
</html>
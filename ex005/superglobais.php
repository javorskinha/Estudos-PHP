<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../crudphp/css/bootstrap.min.css">
    <title>Ex005</title>
</head>
<body>
    <main class="container">
        <h1>Superglobais</h1>
        <?php
            setcookie("nome", "Andrieli", time() + 3600);
            session_start();
            $_SESSION['nome'] = "Andrieli";

            echo "<pre>";
            echo "<h4>GET</h4>";
            var_dump($_GET);
            echo "<h4>POST</h4>";
            var_dump($_POST);
            echo "<h4>REQUEST</h4>";
            var_dump($_REQUEST);
            echo "<h4>COOKIE</h4>";
            var_dump($_COOKIE);
            echo "<h4>SESSION</h4>";
            var_dump($_SESSION);
            echo "<h4>ENV</h4>";
            var_dump($_ENV);
            echo "<h4>SERVER</h4>";
            var_dump($_SERVER);
            echo "<h4>GLOBALS</h4>";
            var_dump($GLOBALS);
            echo "</pre>";
        ?>
    </main>
</body>
</html>
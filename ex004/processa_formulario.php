<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processando Formulário Resultado</title>
</head>
<body>
    <header>
        <h1>Processando Formulário Resultado</h1>
    </header>
    <main>
        <div class="container">
            <h2>Dados do Formulário</h2>
        <?php
            $nome = $_POST['nome'] ?? 'Não informado';
            $email = $_POST['email'] ?? 'Não informado';
            $senha = $_POST['senha'] ?? 'Não informado';

            echo "<p>Nome: $nome</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Senha: $senha</p>";
        ?>
        </div>
    </main>
</body>
</html>
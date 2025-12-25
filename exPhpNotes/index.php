<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../crudphp/css/bootstrap.min.css">
    <title>ExPhpNotes</title>
</head>
<body>
    <h1 class="text-center m-2">Cards Anotacoes PHP</h1>
    <div class="card mx-4 my-2">
        <div class="card-header">
            <h5 class="card-title">Variaveis e Constantes</h5>
        </div>
        <div class="card-body">
            <div class="mb-2">
                <p class="m-0">Declarando uma variavel</p>
                <code>
                    $nome = "Andrieli"; <br>
                    echo "Meu nome é $nome";
                </code>
            </div>
            <div class="mb-2">
                <p class="m-0">Declarando uma constante</p>
                <code>
                    const NOME = "Andrieli"; <br>
                    echo "Meu nome é $NOME";
                </code>
            </div>
        </div>
    </div>
    <div class="card mx-4 my-2">
        <div class="card-header">
            <h5 class="card-title">Regras para nomes de variaveis e constantes</h5>
        </div>
        <div class="card-body">
            <ul class="list-group-numbered p-0">
                <li class="list-group-item">Variaveis sempre devem começar com o símbolo $</li>
                <li class="list-group-item">Constantes sempre devem começar com o símbolo const</li>
                <li class="list-group-item">A partir do segundo caracter, o nome de uma variavel ou constante pode conter underscore "_", letras maiúsculas e minúsculas, numeros e o símbolo $</li>
                <li class="list-group-item">Aceita caracteres da tabela ASCII a partir de 128</li>
                <li class="list-group-item">Não pode conter espaços em branco</li>
                <li class="list-group-item">Aceita caracteres acentuados</li>
                <li class="list-group-item">Case sensitive</li>
                <li class="list-group-item">Não pode ser uma palavra reservada do PHP</li>
            </ul>

            <h5 class="mt-3">Boas práticas</h5>

            <div class="mb-2">
                <p class="m-0">O nome de uma variavel deve ser sempre em minusculo e separado por underscore</p>
                <code>
                    $nome_completo = "Andrieli Javorski"; <br>
                    echo "Meu nome completo é $nome_completo";
                </code>
            </div>
            <div class="mb-2">
                <p class="m-0">O nome de uma constante deve ser sempre em maiusculo e separado por underscore</p>
                <code>
                    const NOME_COMPLETO = "Andrieli Javorski"; <br>
                    echo "Meu nome completo é $NOME_COMPLETO";
                </code>
            </div>
        </div>
    </div>
    <div class="card mx-4 my-2">
        <div class="card-header">
            <h5 class="card-title">Tipos Primitivos</h5>
        </div>
        <div class="card-body">
            <p>O PHP e fracamente tipado, o tipo de dado é definido pelo valor atribuido a variavel, e pode mudar de acordo com o valor atribuido ao longo do programa.</p>
            <h5 class="mt-3">Categorias de tipos primitivos</h5>
            <ul class="list-group-numbered p-0">
                <li class="list-group-item">Escalares</li>
                <li class="list-group-item"> Compostos</li>
                <li class="list-group-item">Especiais</li>
            </ul>

            <h5 class="mt-3">Tipos escalares</h5>
            <p>São os tipos de dados que representam valores unicos e indivisíveis.</p>
            <ul class="list-group-numbered p-0">
                <li class="list-group-item">String (string)</li>
                <li class="list-group-item">Integer (int)</li>
                <li class="list-group-item">Float (float)</li>
                <li class="list-group-item">Boolean (bool)</li>
            </ul>

            <h5 class="mt-3">Tipos compostos</h5>
            <p>São os tipos de dados que representam valores compostos de outros valores.</p>
            <ul class="list-group-numbered p-0">
                <li class="list-group-item">Array (array)</li>
                <li class="list-group-item">Object (object)</li>
            </ul>

            <h5 class="mt-3">Tipos especiais</h5>
            <p>São os tipos de dados que representam valores especiais.</p>
            <ul class="list-group-numbered p-0">
                <li class="list-group-item">Null (null)</li>
                <li class="list-group-item">Resource (resource)</li>
                <li class="list-group-item">Callable (callable)</li>
                <li class="list-group-item">Mixed (mixed)</li>
            </ul>
        </div>
    </div>

    <div class="card mx-4 my-2">
        <div class="card-header">
            <h5 class="card-title">Formatos de strings</h5>
        </div>
        <div class="card-body">
            <ul class="list-group-numbered p-0">
                <li class="list-group-item">
                    Single quotes (nao ocorre interpretacao do conteudo da string) <br> Ex: <?= 'PHP \u{1F418}'; ?>
                </li>
                <li class="list-group-item">
                    Double quotes (ocorre interpretacao do conteudo da string) <br> Ex: <?= "PHP \u{1F418}"; ?>
                </li>
                <li class="list-group-item">Heredoc</li>
                <li class="list-group-item">Nowdoc</li>
            </ul>
        </div>
    </div>
    <script src="../crudphp/js/bootstrap.bundle.min.js"></script>
</body>
</html>
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

    <div class="card mx-4 my-2">
        <div class="card-header">
            <h5 class="card-title">Operadores Aritmeticos</h5>
        </div>
        <div class="card-body">
            <ul class="list-group-numbered p-0">
                <li class="list-group-item">+ (adição)</li>
                <li class="list-group-item">- (subtração)</li>
                <li class="list-group-item">* (multiplicação)</li>
                <li class="list-group-item">/ (divisão)</li>
                <li class="list-group-item">% (resto da divisão)</li>
                <li class="list-group-item">** (potencia)</li>
            </ul>
        </div>
    </div>

    <div class="card mx-4 my-2">
        <div class="card-header">
            <h5 class="card-title">Expressões Aritmeticas</h5>
        </div>
        <div class="card-body">
            <p>Uma expressão aritmética é uma combinação de operadores e operandos que produz um resultado numérico.</p>

            <h5 class="mt-3">Precedência de operadores</h5>
            <p>A precedência de operadores é a ordem em que os operadores são avaliados.</p>
            <ul class="list-unstyled p-0">
                <li class="list-group-item">1. ** (potencia)</li>
                <li class="list-group-item">2. * (multiplicação)</li>
                <li class="list-group-item">2. / (divisão)</li>
                <li class="list-group-item">2. % (resto da divisão)</li>
                <li class="list-group-item">3. + (adição)</li>
                <li class="list-group-item">3. - (subtração)</li>
            </ul>
            <p>Ex: 50/2+3**2 = <?php echo 50/2+3**2; ?></p>
            <p>Operadores com a mesma precedência são avaliados da esquerda para a direita.</p>
            <p>Ex: 50/2*4+3**2 = <?php echo 50/2*4+3**2; ?></p>
            <p>Nesse caso a divisão e a multiplicação tem a mesma precedência, então são avaliados da esquerda para a direita. Sendo 50/2 = 25, 25*4 = 100, 100+3**2 = 109.</p>
            <p> Se houver parenteses, os operadores dentro dos parenteses são avaliados primeiro.</p>
            <p>Ex: (50/2+3)**2 = <?php echo (50/2+3)**2; ?></p>
            <p>Nesse caso a divisão e a adição tem a mesma precedência, então são avaliados da esquerda para a direita. Sendo 50/2 = 25, 25+3 = 28, 28**2 = 784.</p>
        </div>
    </div>

    <div class="card mx-4 my-2">
        <div class="card-header">
            <h5 class="card-title">Funções Aritmeticas em PHP</h5>
        </div>
        <div class="card-body">
            <p>PHP possui uma serie de funções aritmeticas que podem ser usadas para realizar calculos.</p>
            <ul class="list-group-numbered p-0">
                <li class="list-group-item">abs(valor) - Retorna o valor absoluto de um numero</li>
                <li class="list-group-item">base_convert(valor, base_origem, base_destino) - Converte um numero de uma base para outra</li>
                <li class="list-group-item">ceil(valor) - Retorna o valor arredondado para cima</li>
                <li class="list-group-item">floor(valor) - Retorna o valor arredondado para baixo</li>
                <li class="list-group-item">round(valor) - Retorna o valor arredondado para o numero inteiro mais proximo</li>
                <li class="list-group-item">hypot(valor1, valor2) - Retorna a hipotenusa de um triangulo retangulo</li>
                <li class="list-group-item">intdiv(dividendo, divisor) - Retorna o resultado da divisão inteira entre dividendo e divisor</li>
                <li class="list-group-item">max(valor1, valor2, ...) - Retorna o maior valor entre os valores passados</li>
                <li class="list-group-item">min(valor1, valor2, ...) - Retorna o menor valor entre os valores passados</li>
                <li class="list-group-item">pi() - Retorna o valor de pi</li>
                <li class="list-group-item">pow(base, expoente) - Retorna o resultado da potencia entre base e expoente</li>
                <li class="list-group-item">rand(min, max) - Retorna um numero aleatorio entre min e max</li>
                <li class="list-group-item">sqrt(valor) - Retorna a raiz quadrada de um numero</li>
                <li class="list-group-item">sin(valor) - Retorna o seno de um numero</li>
                <li class="list-group-item">cos(valor) - Retorna o cosseno de um numero</li>
                <li class="list-group-item">tan(valor) - Retorna a tangente de um numero</li>
            </ul>
        </div>
    </div>

    <div class="card mx-4 my-2">
        <div class="card-header">
            <h5 class="card-title">Superglobais PHP</h5>
        </div>
        <div class="card-body">
        <p>
                As superglobais PHP são variaveis que são sempre disponiveis em todos os escopos de um script. Elas são um array associativo que contém informações sobre o ambiente do servidor e o script que está sendo executado.
            </p>
            <ul class="list-group-numbered p-0">
                <li class="list-group-item">$_GET - Valores de variaveis passadas via URL</li>
                <li class="list-group-item">$_POST - Valores de variaveis passadas via POST</li>
                <li class="list-group-item">$_REQUEST - Valores de variaveis passadas via URL ou POST</li>
                <li class="list-group-item">$_FILES - Valores de arquivos enviados via HTTP POST</li>
                <li class="list-group-item">$_COOKIE - Valores de cookies enviados via HTTP</li>
                <li class="list-group-item">$_SESSION - Valores de sessões</li>
                <li class="list-group-item">$_SERVER - Informações sobre o servidor e o script que está sendo executado</li>
                <li class="list-group-item">$_ENV - Informações sobre o ambiente do servidor</li>
                <li class="list-group-item">$_GLOBALS - Contém todas as variaveis globais do script</li>
            </ul>
        </div>
    </div>

    <script src="../crudphp/js/bootstrap.bundle.min.js"></script>
</body>
</html>
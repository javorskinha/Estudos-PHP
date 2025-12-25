<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex003</title>
</head>
<body>
    <h1>Testando tipos primitivos</h1>
    <?php
        $tiposEscalares = array(300, 0x1A, 0123, 0b1010, true, false, 3e2, "Andrieli", 25, 1.75, 54);
        // inicia com 0x é hexadecimal, 0 é octal, 0b é binario
        // 3e2 é 3 * 10^2 = 300 uma potencia

        for ($i = 0; $i < count($tiposEscalares); $i++) {
            var_dump($tiposEscalares[$i]);
            echo "O valor de {$tiposEscalares[$i]} é {$tiposEscalares[$i]}! \n <br>";
        }

        //tipos compostos
        $varArray = array("Andrieli", 25, 1.75, 54);
        var_dump($varArray);
        
        echo "<br>";

        class Pessoa {
            public $nome;
            public $idade;
            public $altura;
            public $peso;

            public function __construct($nome, $idade, $altura, $peso) {
                $this->nome = $nome;
                $this->idade = $idade;
                $this->altura = $altura;
                $this->peso = $peso;
            }
        }   
        $varObject = new Pessoa("Andrieli", 25, 1.75, 54);
        var_dump($varObject);
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03 - Prática</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Caneta.php';

            // ----------------------instanciando um novo objeto
            $c1 = new Caneta;
            // ----------------------mexendo com os atributos do objeto caneta
            $c1->modelo = "BIC";
            $c1->cor = "Azul";


            // ----------------------métodos
            $c1->rabiscar();
            $c1->tampar();

            // ----------------------apresenta o estado atual do objeto
            print_r($c1);
            // var_dump($c1);

        ?>
    </pre>
    
</body>
</html>
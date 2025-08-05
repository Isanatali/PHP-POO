<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - Prática</title>
</head>
<body>
    <?php
        require_once 'Caneta.php';

        // ----------------------instanciando um novo objeto
        $c1 = new Caneta;
        // ----------------------mexendo com os atributos do objeto caneta
        $c1->cor = 'azul';
        $c1->ponta = '0.5';
        $c1->tampada = true;


        // ----------------------chamando o método

        // tampada = true
        //$c1->tampar();
        // tampada = false
        $c1->destampar();

        // só rabisca se estiver destampada
        $c1->rabiscar();

        // apresenta o estado atual do objeto
        // ou print_r($c1);
        //var_dump($c1);

        // -----------------------Novo objeto
        $c2 = new Caneta;

        $c2->cor = 'azul';
        $c2->carga = 50;

        // n preciso chamar o atributo diretamente, posso chamar apenas o método que define o atributo
        $c2->tampar();

        print_r($c2);
    ?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // string
        $nome = "Olá mundo";
        var_dump($nome);
        if(is_string($nome)):
            echo "É uma string <br>";
        else:
            echo "Não é uma string <br>";
        endif;

        // int
        $idade = 1;
        var_dump($idade);
        if(is_int($idade)):
            echo "É uma inteiro <br>";
        else:
            echo "Não é uma inteiro <br>";
        endif;

        // float
        $altura = 1.80;
        var_dump($altura);
        if(is_float($altura)):
            echo "É uma float <br>";
        else:
            echo "Não é uma float <br>";
        endif;

         // boolean
         $admin = true;
         var_dump($admin);
         if(is_bool($admin)):
             echo "É uma boolean <br>";
         else:
             echo "Não é uma boolean <br>";
         endif;

        //  array
        $carros = array("gol", "uno", "fiat");
        var_dump($carros)
    ?>
</body>
</html>
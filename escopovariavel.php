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
        $nome = "Marcelo junior";
        $n1 = 1;
        $n2 = 2;
        $n3 = 3;

        function exibeNome(){
            global $nome;
            echo $nome;
        }

        exibeNome();
        echo '<hr>';

        function soma(){
            echo $GLOBALS['n1'] + $GLOBALS['n2'] + $GLOBALS['n3']; 
        }

        soma();
    ?>
</body>
</html>
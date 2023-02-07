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
        $contador = 1;
        while($contador <= 100){
            echo "<p>while</p>: <span>$contador</span>";
            $contador++;
        }

        echo "<hr>";

        $contador = 1;
        do{
            echo "<p>do</p>: <span>$contador</span>";
            $contador++;
        }while($contador <= 10);
    ?>
</body>
</html>
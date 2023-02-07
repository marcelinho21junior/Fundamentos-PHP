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
        $carros = array(1 => "fusca", 2=>"gol", 3=>"fiat");
        $carros[] = "amarok";
        $carros[10] = "palio <br>";
        print_r($carros);

        $motos = array();
        $motos[] = "yamaha";
        $motos[] = "honda";
        $motos[5] = "suzuki";
        print_r($motos);

        $clientes = ["marcelo", "auce", "melissa"];
        print_r($clientes);

        $totalCliente = count($clientes);
        echo $totalCliente;
        echo "<hr>";

        foreach($carros as $valor){
            echo $valor."<br>";
        }
        echo "<br>";
    ?>
</body>
</html>
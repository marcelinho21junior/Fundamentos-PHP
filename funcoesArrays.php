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
        $times = array(
            "cariocas" => array("vasco","flamengo"),
            "paulistas" => array("guara","sao paulo"),
            "baianos" => array("bahia", "sport")
        );
        echo $times["cariocas"][0];
        echo "<br>";
        echo "Times cariocas <br>";
        foreach($times["cariocas"] as $indice => $valor){
            echo $indice.":".$valor."<br>";
        }

        echo "Times paulistas <br>";
        foreach ($times["paulistas"] as $indice => $valorr){
            echo $indice.":".$valorr."<br>";
        }

        echo "Times baianos <br>";
        foreach ($times["baianos"] as $indice => $valorr){
            echo $indice.":".$valorr."<br>";
        }

        $nomes = array("marcelo","paula");
        if(in_array("julia", $nomes)):
            echo 'existe';
        else:
            echo "nao existe";
        endif;


        // merge
        echo "<hr>";
        $carros = array("camaro","uno");
        $moto = array("yamaha","honda");

        $veiculos = array_merge($carros,$moto);

        print_r ($veiculos);

        // pop = exclui ultimo elemento
        echo "<hr>";
        $carros = array("camaro","uno");
        echo "<br>";
        echo array_pop($carros);
        echo "<br>";
        print_r($carros);

        // sum
        echo "<hr>";
        $soma = array(7.8,7,5,6,9,1);
        echo array_sum($soma);
    ?>
</body>
</html>
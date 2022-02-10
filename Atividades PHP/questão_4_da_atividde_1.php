<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questão 4</title>
</head>
<body>
    <h1>Alimentos</h1>
    </br>
    <h3>Ordem crescente</h3>
    <?php
        $alimentos = array("arroz", "feijão", "macarrão", "café", "açúcar");
        sort($alimentos);
        $clength = count($alimentos);
        for($x = 0; $x < $clength; $x++){
            echo $alimentos[$x];
            echo "<br>";
        }
    ?>
    </br>
    <h3>Ordem decrescente</h3>
    <?php
        $alimentos = array("arroz", "feijão", "macarrão", "café", "açúcar");
        rsort($alimentos);
        $clength = count($alimentos);
        for($x = 0; $x < $clength; $x++){
            echo $alimentos[$x];
            echo "<br>";
        }
    ?>
</body>
</html>
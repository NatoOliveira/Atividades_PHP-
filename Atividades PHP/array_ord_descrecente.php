<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array php crescente</title>
</head>
<body>
<h5>Renato Oliveira</h5>
    <?php
        $cars = array("Volvo", "BMW", "Toyota");
        rsort($cars); //rsort - ordem decrescente
        $clength = count($cars);
        for($x = 0; $x < $clength; $x++){
            echo $cars[$x];
            echo "<br>";
        }
    ?>
</body>
</html>
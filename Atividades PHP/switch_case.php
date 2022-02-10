<!DOCTYPE html>
<html lang="pt - br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case</title>
</head>
<body>
    <?php
        $sorteio = rand(0,5);
        switch ($sorteio) {
            case 0:
            echo 'Você perdeu a vez';
            break;
            case 1:
            echo 'avance 1 casa';
            break;
            case 2:
            echo 'Você ganhou um bônus, avance 3 casas.';
            break;
            default:
            echo 'Tente novamente';
            break;
        }
    ?>
</body>
</html>
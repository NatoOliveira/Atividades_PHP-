<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body bgcolor = #808080><font color = white>
    <?php
        //string
        $nome = "Renato Oliveira";
        //Int
        $idade = 19;
        //float
        $peso = 69.5;
        //boolean
        $estudante = true;
    ?>
    <h1>Ficha cadastral</h1>
    <br/>
    <p>Nome: <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Estudante: <?=$estudante ?></p>
</body>
</html>
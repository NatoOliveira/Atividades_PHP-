<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análise de cartão</title> <!-- título principal da página-->
</head>
<body bgcolor = #424242>
    <h1><font color = #FF8000><p align=center>Validação do seu tipo de cartão:</align></font></h1> <!-- Título prnicipal da página  -->
        <?php
            $renda_mensal = 14000; // Variável com o valor da renda mensal do usuário.
            echo "<h3><p align=center><font color = #FF8000>Descubra qual o tipo de cartão que você tem direito.</font><br><br>"; //Titulo informativo para o usuário.
            echo "<font color = #FF8000>Qual a sua renda mensal? R$ $renda_mensal</font><br><br>"; // Solicitação da renda mensal do usuário
            if($renda_mensal <= 8000){ // IF com condição verdadeira para o cartão "gold"
                echo "<font color = #FACC2E>Você tem direito ao cartão do tipo Gold</font><br>"; // Ordem de impressão, informando que o usuário tem direito ao cartão Gold.
            }
            else if($renda_mensal <= 24999){ //ELSE IF com condição verdadeira para o cartão "platinum".
                echo "<font color = #D8D8D8>Você tem direito ao cartão do tipo Platinum</font><br>"; // Ordem de impressão, informando que o usuário tem direito ao cartão Platinum.
            }
            else{ // ELSE para caso a condição do cartão "gold" e "Platinum" sejá falsa.
                echo "<font color = #000000>Você tem direiro ao cartão do tipo Black</font><br>"; // Ordem de impressão, informando que o usuário tem direito ao cartão Black.
            }
        ?>
        <center>
        <hr>
        <img src="cartao-inter.png" alt="cartao">
</body>
</html><!-- código criado por Renato Oliveira, estudante de D.S da ETE -->
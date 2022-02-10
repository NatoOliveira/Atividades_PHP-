<?php
    $media=($_GET['nota1'] + $_GET['nota2'])/2;
    $nome=($_GET['nome']);
    if($media>=7){
        print("Aluno(a) $nome aprovado com média $media");
    }
    else{
        print("Aluno(a) $nome reprovado com média $media");
    }
?>
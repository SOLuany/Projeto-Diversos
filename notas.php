<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Boletim</title>
    <style>
        ul{
            padding: 0;
            text-align: center;
        }
        li{
            display: inline;
            margin-right: 10px;
            color:blue;            
        }
    </style>
</head>
<body><center>
    <br>
    <ul>
        <button><a href="index.html">Menu</a></button>
        <button><li><a href="soma.html">Cálculo</a></li></button>
        <button><li><a href="notas.html">Notas</a></li></button>
        <button><li><a href="cinema.html">Filmes</a></li></button>
        <button><li><a href="esportes.html">Materiais Esportivos</a></li></button>
        <button><li><a href="acai.html">Açaí</a></li></button>
    </ul>
    <br>
<?php
    $nome= $_POST["nome"];
    $nota1= $_POST["nota1"];
    $nota2= $_POST["nota2"];
    $nota3= $_POST["nota3"];
    $soma=number_format($nota1+$nota2+$nota3,1);
    echo "O(a) Aluno(a) $nome, <br>";
    echo "Obteve a nota total de $soma, <br>";
    $media=number_format($soma/3,1);
    echo "E sua média é de $media.";
?>
    
</body></center>
</html>
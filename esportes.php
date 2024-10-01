<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Materiais</title>
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
<body>
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
    $esportes=$_POST["esportes"];
    sort($esportes);
    foreach($esportes as $lista){
    echo "$lista<hr>";
}
?>
</body>
</html>
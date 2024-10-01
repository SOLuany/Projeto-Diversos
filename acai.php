<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumo do Pedido</title>
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
    <center><h1>Resumo do Pedido</h1></center>
<?php
    $acai=$_POST["acai"];
    $number=$_POST["number"];
switch($acai){
    case"Açaí 300ml";
        $preco=10*$number;
        echo "Tamanho: $acai <br> Quantidade: $number <br> Total á Pagar: R$$preco";
        break;
    case"Açaí 500ml";
        $preco=12*$number;
        echo "Tamanho: $acai <br> Quantidade: $number <br> Total á Pagar: R$$preco";
        break;
    case"Açaí 1l";
        $preco=16*$number;
        echo "Tamanho: $acai <br> Quantidade: $number <br> Total á Pagar: R$$preco";
        break;
        default;
        echo "Opção Inválida!";
}
?>
</body>
</html>
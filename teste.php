<?php
    require_once 'Operacao.php';

    $op1 = new Operacao();
    if(isset($_POST['somar'])){
        $op1->setValor1($_POST['valor1']);
        $op1->setValor2($_POST['valor2']);
    }else{
        $op1->setValor1($_POST['valor1']);
        $op1->setValor2($_POST['valor2']);
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operacões</title>
    <style>
        .container{
            height: 773px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #EAEBED;
        }
        .valores{
            background-color: #694873;
            width: 400px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .valor{
            margin:0px;
            color: white;
        }
        .resultados{
            width: 400px;
            background-color: #007090;
            text-align: center;
            color: white;
        }
        #back{
            margin-top: 10px;
            width: 100px;
            padding: 8px;  
            border: none;
            background-color: #006989;
            color: white;
            font-family: arial;
        }
        #back:hover{
            background-color: #01546d;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Resultados</h2>
        <div class="resultados">
            <?php
                if(isset($_POST['somar'])){
                    echo "<p class='resultado'>".$op1->getValor1()." + ".$op1->getValor2()." = ".$op1->somar()."</p>";
                }elseif (isset($_POST['subtrair'])){
                    echo "<p class='resultado'>".$op1->getValor1()." - ".$op1->getValor2()." = ".$op1->subtrair()."</p>";
                }elseif(isset($_POST['dividir'])){
                    echo "<p class='resultado'>".$op1->getValor1()." / ".$op1->getValor2()." = ".$op1->dividir()."</p>";
                }elseif(isset($_POST['multiplicar'])){
                    echo "<p class='resultado'>".$op1->getValor1()." x ".$op1->getValor2()." = ".$op1->multiplicar()."</p>";
                }elseif(isset($_POST['exponenciar'])){
                    echo "<p class='resultado'>".$op1->getValor1()." ^ ".$op1->getValor2()." = ".$op1->exponenciar()."</p>";
                }
            ?>
        </div>

        <a href="index.php"><button id="back">Voltar</button></a>
    </div>
</body>
</html>
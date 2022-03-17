<?php
    session_start();
    require_once 'Operacao.php';

    $op1 = new Operacao();
    $op2 = new Operacao();

    $op1->setValor1(4);
    $op1->setValor2(2);

    echo "1º Valor: ";
    echo $op1->getValor1();
    echo "<br>";
    echo "2º Valor: ";
    echo $op1->getValor2();

    echo "<br>Valor1 + Valor2 = ".$op1->somar();
    echo "<br>Valor1 - Valor2 = ".$op1->subtrair();
    echo "<br>Valor1 / Valor2 = ".$op1->dividir();
    echo "<br>Valor1 * Valor2 = ".$op1->multiplicar();
    echo "<br>Valor1 ^ Valor2 = ".$op1->exponenciar();
    
?>
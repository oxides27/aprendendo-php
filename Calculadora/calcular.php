<?php

    require_once 'C:\xampp\htdocs\calc\calculadora.php';

    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operacao = $_POST['operacao'];

    $calculadora = new Calculadora();

    $calculadora->setNumero1( $numero1 );
    $calculadora->setNumero2( $numero2 );


    switch( $operacao ){
        case 'somar':
            $calculadora->somar();
            break;
        case 'subtrair':
            $calculadora->subtratir();
            break;
        case 'multiplicar':
            $calculadora->multiplicar();
            break;
        case 'dividir':
            $calculadora->dividir();
            break;
    
    }


    echo $calculadora->getTotal();
?>
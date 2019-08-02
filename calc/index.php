<?php
// incluir um arquivo
include 'polyfill.php';

// Calculadora (+ - / *)

// menu - orientação ao usuario
echo '**** Calculadora ****' . PHP_EOL;
echo '**** 1 - Adcicao ****' . PHP_EOL;
echo '**** 2 - Subtracao ****' . PHP_EOL;
echo '**** 3 - Divisao ****' . PHP_EOL;
echo '**** 4 - Multiplicao ****' . PHP_EOL;

// variavel - readline("ler uma entrada de dado e aloca na variavel")
$escolha = readline("Escolha a Operacao:" . PHP_EOL);	
$valor1 = readline("Digite o primeiro valor:" . PHP_EOL);	
$valor2 = readline("Digite o segundo valor:" . PHP_EOL);

// inicializa a variavel que armazena o resultado	
$resultado = 0;

// escolha da operação
switch ($escolha) {
	case 1:
		$resultado = $valor1 + $valor2;
		break;
	case 2:
		$resultado = $valor1 - $valor2;
		break;
	case 3:
		$resultado = $valor1 / $valor2;
		break;
	case 4:
		$resultado = $valor1 * $valor2;
		break;	
	default:
		echo "Operacao Invalida!" . PHP_EOL;
		return 0;
}	

// mensagem para o usario
echo "Resuldo:  " . $resultado . PHP_EOL;




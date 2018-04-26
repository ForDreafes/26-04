<?php

	//$opcoes = ['Mega-sena, Quina, Lotomania, Lotofacil'];
	$gerado = array();
	print("Informe o jogo \n");
	$opcao = fgets(STDIN);
	print("Quantos numeros de apostas \n");
	$num = fgets(STDIN);
	if ($opcao == 1) {
		for ($i=0; $i <=$num ; $i++) { 
			$j = rand(0, 60);
			$gerado[] = $j;
		}
	}
	print_r($gerado);
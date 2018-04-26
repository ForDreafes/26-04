<?php

	function menu(){
		echo "Digite 1 para Mega-Sena \n";
		echo "Digite 2 para Quina \n";
		echo "Digite 3 para Lotomania \n";
		echo "Digite 4 para Lotofácil \n";
		echo "Digite 5 para Sair \n";
		do{
			$opcao = (int) trim(fgets(STDIN));
		}while ($opcao < 1 || $opcao >5);

		switch ($opcao) {
			case 1:
				do{
				print("Quantos números seram sorteados ?\n");
				$qntNum = fgets(STDIN);
				}while ($qntNum < 6 || $qntNum > 15);
			break;
			case 2:
				print("Quantos números seram sorteados ?\n");
				$qntNum = fgets(STDIN);
			break;
			case 3:
				print("Quantos números seram sorteados ?\n");
				$qntNum = fgets(STDIN);
			break;
			case 4:
				print("Quantos números seram sorteados ?\n");
				$qntNum = fgets(STDIN);
			break;
			case 5:
				exit("Até loguinho \n");
				break;
			default:
				menu();
				break;
		}
		$tudo[0] = $qntNum;
		$tudo[1] = $opcao;
		return($tudo);
	}
/*
	function sortearMega(){
		for ($i=0; $i <=$qntNum ; $i++) { 
			$numMega[] = rand(0, 60);
		}
		return($numMega);
	}
	//$numMega = sortearMega();
	//print_r($numMega);

	function sortearQuina(){
		for ($i=0; $i <=15 ; $i++) { 
			$numQuina[] = rand(0, 80);
			$j = $i-1;
		}
		return($numQuina);
	}
*/

	function sorteaTudo(){
		$opcao = menu();
		print_r($opcao);
		if ($opcao[1] == 1) {
			for ($i=0; $i <$opcao[0] ; $i++) { 
			$numMega[] = rand(0, 60);
			}
		}elseif($opcao[1] == 2) {
			for ($i=0; $i <$opcao[0] ; $i++) { 
			$numMega[] = rand(0, 80);
			}
		}elseif($opcao[1] == 3) {
			for ($i=0; $i <$opcao[0] ; $i++) { 
			$numMega[] = rand(0, 50);
			}
		}elseif($opcao[1] == 4) {
			for ($i=0; $i <$opcao[0] ; $i++) { 
			$numMega[] = rand(0, 60);
			}
		}
		return($numMega);
	}
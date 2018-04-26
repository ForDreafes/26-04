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
				do{
				print("Quantos números seram sorteados ?\n");
				$qntNum = fgets(STDIN);
				}while ($qntNum < 5 || $qntNum > 15);
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

	function preco(){
		$opcao = menu();
	if ($opcao[1] == 1) {
			if($opcao[0] == 6) {
				$preco = 3.50 ;
			}elseif($opcao[0] == 7) {
				$preco = 24.50;
			}elseif($opcao[0] == 8) {
				$preco = 98.00;
			}elseif($opcao[0] == 9) {
				$preco = 294.00;
			}elseif($opcao[0] == 10) {
				$preco = 735.00;
			}elseif($opcao[0] == 11) {
				$preco = 1617.00;
			}elseif($opcao[0] == 12) {
				$preco = 3234.00;
			}elseif($opcao[0] == 13) {
				$preco = 6006.00;
			}elseif($opcao[0] == 14) {
				$preco = 10510.50;
			}elseif($opcao[0] == 15) {
				$preco = 17517.50;
			}
	}elseif($opcao[1] == 2) {
			}if($opcao[0] == 5) {
				$preco = 1.50;
			}elseif($opcao[0] == 6) {
				$preco = 9.00;
			}elseif($opcao[0] == 7) {
				$preco = 31.50;
			}elseif($opcao[0] == 8) {
				$preco = 84.00;
			}elseif($opcao[0] == 9) {
				$preco = 189.00;
			}elseif($opcao[0] == 10) {
				$preco = 378.00;
			}elseif($opcao[0] == 11) {
				$preco = 693.00;
			}elseif($opcao[0] == 12) {
				$preco = 1188.00;
			}elseif($opcao[0] == 13) {
				$preco = 1930.00;
			}elseif($opcao[0] == 14) {
				$preco = 3003.00;
			}elseif($opcao[0] == 15) {
				$preco = 4504.50;
			}
			/*
	elseif($opcao[1] == 3) {
			}if($opcao[0] == 5) {
				$preco = 1.50;
			}elseif($opcao[0] == 6) {
				$preco = 9.00;
			}elseif($opcao[0] == 7) {
				$preco = 31.50;
			}elseif($opcao[0] == 8) {
				$preco = 84.00;
			}elseif($opcao[0] == 9) {
				$preco = 189.00;
			}elseif($opcao[0] == 10) {
				$preco = 378.00;
			}elseif($opcao[0] == 11) {
				$preco = 693.00;
			}elseif($opcao[0] == 12) {
				$preco = 1188.00;
			}elseif($opcao[0] == 13) {
				$preco = 1930.00;
			}elseif($opcao[0] == 14) {
				$preco = 3003.00;
			}elseif($opcao[0] == 15) {
				$preco = 4504.50;
			}
			*/
	elseif($opcao[1] == 3){
		$preco = 1.50;
	}
	elseif($opcao[1] == 4) {
				# code...
			}		
		return($preco);
	}
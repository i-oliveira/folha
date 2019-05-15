<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Respostas</title>
</head>
<body>
	<?php 

	if(!empty($_POST['nome'])  && !empty($_POST['horas']) && !empty($_POST['valor'])) {

		$nome  = $_POST['nome'];
		$horas = $_POST['horas'];
		$valor = $_POST['valor'];
		$salbruto = $horas * $valor;
		$fgts = $salbruto * 0.08;
		
		//ir
		if($salbruto <=1372.81){
			$desconto = 0;
		}
		else if($salbruto >= 1372.82 || $salbruto <= 2743){
			$desconto = $salbruto * 0.15;
		}
		else if($salbruto  >= 2743) {
			$desconto = $salbruto * 0.275;
		}
		//inss
		if($salbruto <=868.29){
			$dinss = $salbruto * 0.08;	
		}else if($salbruto >= 868.30 || $salbruto <= 1447.14){
			$dinss = $salbruto * 0.09;
		}else if($salbruto>= 1447.15 || $salbruto <=  2894.28){
			$dinss = $salbruto * 0.11;
		}else if($salbruto>=  2894.28){
			$dinss = $salbruto - 318.27;
		}
		$sall = $salbruto - $desconto - $dinss; 
		echo "<h2>Resultados</h2>";
		echo "<b>Salário Bruto:</b> " . $salbruto ."<br>";
		echo "<b>Salário Líquido:</b> " . $sall .  "<br>";
		echo "<b>FGTS:</b> " . $fgts ."<br>";
		echo "<b>IR:</b> " . $desconto ."<br>";
		echo "<b>INSS:</b> " . $dinss .  "<br>";

	}
	
	else
	{
		echo "<h3>Preencha todos os dados de um dos formulários da página inicial para prosseguir.</h3>";
	}

	?>

</body>
</html>

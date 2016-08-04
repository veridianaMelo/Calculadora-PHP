<!DOCTYPE html>
<head>
	<title>Minha primeira calculadora Php</title>
</head>
<body>
	<h1>Minha primeira calculadora Php</h1>
	<form action="" method="post">
	Digite um  nº: <input name="num1" type="text"><br>
	Digite outro : <input name="num2" type="text"><br><br><br>
	<input type="submit" name="operacao" value="+">
	<input type="submit" name="operacao" value="-">
	<input type="submit" name="operacao" value="*">
	<input type="submit" name="operacao" value="/">
	</form>

	<?php
	$a = $_POST['num1'];
	$b = $_POST['num2'];
	$op = $_POST['operacao'];

	if(!empty($op)){
		if($op == '+')
			$c = $a + $b;
		elseif ($op =='-') 
			$c = $a - $b;
		elseif ($op == '*') 
		    $c = $a * $b;
		elseif ($op == '/') 
		    $c = $a / $b;

	}
	?>
	<br>
	<?php
	$resultado = "Resuldado: " ;
   		echo $resultado; 
   		echo "$c";
	?>
</body>
</html>
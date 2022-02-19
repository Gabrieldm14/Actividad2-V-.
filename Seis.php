<!DOCTYPE html>
<html lang="es">
<head>
<title>Cuatro</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<form method="get" action="calculadora.php">
		<input type="text" name="operando1">
		<select name="operador">
			<option value="+">+
			</option>
			<option value="-">-
			</option>
			<option value="*">*
			</option>
			<option value="/">/
			</option>
		</select>
		<input type="text" name="operando2">
        <select name="operador">
			<option value="+">+
			</option>
			<option value="-">-
			</option>
			<option value="*">*
			</option>
			<option value="/">/
			</option>
		</select>
        <input type="text" name="operando3">
		<input type="submit" value="enviar">
	</form>
    
    <?php
	$operando1 = $_GET['operando1'];
	$operando2 = $_GET['operando2'];
    $operando3 = $_GET['operando3'];
	$operador = $_GET['operador'];
	
	if($operador == "+"){
		$solucion = $operando1 + $operando2 + $operando3 ;
	}else if($operador == "-"){
		$solucion = $operando1 - $operando2 - $operando3;
	}else if($operador == "*"){
		$solucion = $operando1 * $operando2 * $operando3;
	}else if($operador == "/"){
		$solucion = $operando1 / $operando2 / $operando3;
	}
	echo "La solución es: ".$solucion;
?>
</body>
</html>
<!DOCTYPE html>

<html>

	<head>

    <meta charset="UTF-8">

    	<style>

        body{
            background-color: blue;
        }

        #contenedor{
            margin: 5% 5% 5% 5%;
            border: 10px solid orange;
            padding: 10px;
            border-radius: 30px ;
            background-color: whitesmoke;
            font-size: 24px;
        }

        h1{
            text-align: center;
			color: pink;
    		-webkit-text-stroke: 5px purple;
    		font-family: Cooper;
    		font-size: 60px;
        }

        b{
        	color: purple;
        }

    	</style>

	</head>

	<body>

		<h1>2º Práctica Cliente Servidor</h1>

		<div id="contenedor">

		<?php

			echo "<b>Ejercicio 1</b><br>";
				$var1 = "Hola";
				$var2 = "Mundo";
 				$concatenacion = $var1 . " " . $var2;
 				echo "<b>a)</b> " . $concatenacion;

 				echo "<br>";

 				$flag = true;
 				echo "<b>b)</b> " . $flag;
 				echo "<br>";
 				$real = 3.14;
 				echo "<b>c)</b> ";
 				echo $real;
 				echo "<br>";		
 				$vector = array(
				'valor1' => 1,
    			'valor2' => 2,
    			'valor3' => 3);
    			echo "<b>d)</b> ";
    			print_r($vector);

 				echo "<br>";

 				echo "<b>Ejercicio 2</b><br>";
 				$flag = false;
 				echo $flag;
 				echo "<br> No muestra nada";

 				echo "<br>";

 				echo "<b>Ejercicio 3</b><br>";
 				$nuevo = str_replace(' ', '', $concatenacion);
 				echo $nuevo;

 				echo "<br>";

 				echo "<b>Ejercicio 4</b><br>";
 				$cadena = "El operador \"+\" sirve para sumar el valor de variables. Con la \"/\"podemos 
				dividir valores entre variables. El símbolo del dólar \"\$\" indica que estamos 
				utilizando variables pero no lo usaremos en las constantes o globales.";
				echo $cadena;

				echo "<br>";

				echo "<b>Ejercicio 5</b><br>";
				echo "La longitud de la cade anterior es " . strlen($cadena);

				echo "<br>";

				echo "<b>Ejercicio 6</b><br>";
				$vocales = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
				$soloconsonantes = str_replace($vocales, "", $concatenacion);
				echo $soloconsonantes;

				echo "<br>";

				echo "<b>Ejercicio 7</b><br>";
				$vacia = null;
				echo is_null($vacia) . "<br> Esta sentencia devuelve \"1\" ya que es de tipo boolean y este valor significa true."; // Esta sentencia devuelve "1" ya que es de tipo boolean y el valor "1" significa true.

				echo "<br>";

				echo "<b>Ejercicio 8</b><br>";
				echo intval($concatenacion) . "<br> Función que devuelve el valor entero de var en caso de éxito, o 0 en caso de error. En este caso es error por eso obtenemos un 0."; //El valor entero de var en caso de éxito, o 0 en caso de error. En este caso es error por eso obtenemos un 0.

				echo "<br>";

				echo "<b>Ejercicio 9</b><br>";
				echo "<b>a)</b> " . sqrt(144);

				echo "<br>";

				echo "<b>b)</b> " . pow(2, 8);

				echo "<br>";

				echo "<b>c)</b> " . 100%6;

				echo "<br>";

			function MCD($num1, $num2){
				if ($num1 == 0) {
				return $num2;
				}
			return MCD($num2%$num1, $num1);

			} 

				echo "<b>d)</b> " . "Maximo común divisor: " . MCD(3,6);

		?>

	</div>

	</body>

</html>
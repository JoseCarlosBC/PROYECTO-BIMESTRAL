<?php 
		
	$valor1=$_POST['n1'];
	$valor2=$_POST['n2'];
	$opcion=$_POST['opciones'];

	if ($opcion==1) {
		echo "la suma es: ".($valor1+$valor2);
	}

	if ($opcion==2) {
		echo "la resta es: ".($valor1-$valor2);
	}

	if ($opcion==3) {
		echo "el producto es: ".($valor1*$valor2);
	}

	if ($opcion==4) {
		echo "la division es: ".($valor1/$valor2);
	}	
?>
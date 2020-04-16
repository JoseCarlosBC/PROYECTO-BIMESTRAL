<?php 
		
	$valor1=$_POST['n1'];
	$valor2=$_POST['n2'];
	$opcion=$_POST['opciones'];
$ total;

	if ($opcion==1) {
$ total=($valor1+$valor2);
	}

	if ($opcion==2) {
$ total= ($valor1-$valor2);
	}

	if ($opcion==3) {
		$ total=  ($valor1*$valor2);
	}

	if ($opcion==4) {
$ total=  ($valor1*$valor2);
	}	
?>
       <html>

  <head>
   <link rel="stylesheet" type="text/css" href="Estilos.css" />
  </head>

  <body>
   <header>
          <div align="center" id="TOTAL">
              <h1> TOTAL </h1>
          </div>
   </header>

   <section>
          <div align="center" id="MOSTRAR">
              <p><?php echo $total; ?> </p>
          </div>
   </section> 
  </body>
</html>

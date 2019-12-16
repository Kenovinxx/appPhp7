<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo XA</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problema.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.php">IntroPHP7</a></h1>
      <nav>
      <ul>
        <li><a href="index.php" class="current">Inicio</a></li>
        <li><a href="#">Otros Ejemplos Php7</a></li>
      </ul>
      </nav>
    </header>
<section id="contenedor">
<section  class="problema">
  <h2>Problema: Movimiento Circular</h2>
  <p>Descripción:</p>
  <p>Determinar la magnitud de la velocidad angular de una llanta de automóvil a los 0.3 minutos, si tenía una velocidad angular inicial cuya magnitud es de 8 rad/s y sufre una aceleración angular cuya magnitud es de 4 rad/s² ?</p>
</section>
<section class="formulas">
<h2>Fórmulas</h2>
    W = Θ/t <br>
    Wf = Wo + Θt
</section>
<section class="datos">
<h2>Datos:</h2>
    Velocidad angular inicial = Wo = 8 rad/s<br>
    Desplazamiento angular = Θ = 4 rad/s²<br>
    Tiempo = t = 0.3 min = 18 s
</section>
<section class="calculos">
<h2>Solución</h2>
   <p>Se necesita convertir el tiempo en segundos:<br>
    t = 0.3 min (60 s/ 1 min) = 18 s <br>
    Wf = 8 rad/s + (4 rad/s²)(18 s) <br>
    Wf = 8 rad/s + 72 rad/s</p>
</section>
<?php
     function calcula(){
        $W=8;
        $O=72;
        $res=$W+$O;
        return $res;
     }
?>
<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA"></div>
<?php
 print "<h1> Resultado = La magnitud de la velocidad angular de una llanta de automóvil es: ".calcula(). " rad/s</h1>";
?>
</section>
</section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2019
    </footer>
   </section>
</body>
</html>

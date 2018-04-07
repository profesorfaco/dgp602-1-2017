<!DOCTYPE html>
<html lang="es">
<?php
// A continuación encontrarán algunas variables al modo en que son escritas en PHP.
// Sus contenidos son: una palabra; una frase; un valor numérico; y un arreglo simple.
$title = "Académicos";
$description = "Cuerpo académico de la Universidad de Chile listados por facultad, instituto o áreas de investigación.";
?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo($title);?></title>
<meta name="robots" content="noindex">
<link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../bootstrap/style.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="container">
<div class="row">
<div class="col-sm-10 col-sm-offset-1">
<header>
<div class="masthead clearfix">
<div class="inner">
<h1 class="masthead-brand"><?php echo($title);?></h1>
<nav>
<ul class="nav masthead-nav">
<li<?php if((basename($_SERVER['PHP_SELF']))=='index.php'){?> class="active" <?php };?>><a href="index.php">Diseño</a></li>
<li<?php if((basename($_SERVER['PHP_SELF']))=='index.php'){?> class="active" <?php };?>><a href="index2.php">Académicos</a></li>
</ul>
</nav>
</div>
</div>
<h2><?php echo($description);?></h2>
</header>
<section>
<?php
$datos = array_map('str_getcsv', file('portafolio-academico.csv'));
// pero debo hacer un pequeño ajuste, para eliminar del arreglo el encabezado del imdb-movies.csv
array_walk($datos, function(&$a) use ($datos) {$a = array_combine($datos[0], $a);});
array_shift($datos);
?>
<h3>Listado de Académicos</h3>
<div class="row">
<?php for ($a = 0; $a < $all = count($datos); $a++) {?>
<div class="col-sm-6">
<article class="alert alert-info">
<div class="nro"><?php echo($a+1);?></div>
<h4><?php echo($datos[$a]['Apellidos']);?>, <?php echo($datos[$a]['Nombres']);?></h4>
<p><?php echo($datos[$a]['Rango']);?></p>
<p>Cantidad de horas:<?php echo($datos[$a]['Horas']);?></p>
<p><?php echo($datos[$a]['Descripción']);?></p>
<p>Profesor que
<?php if(($datos[$a]['Textos'])==Si){;?>
ha dado a conocer su experiencia en textos de uso docente,
<?php }else{;?>
no ha desarrollado textos, sin embargo
<?php };?>
<?php if(($datos[$a]['Adscripción'])=='Escuela de Pregrado Unificada'){;?>
perteneciendo a <strong>la Escuela de Pregrado Unificada</strong>.
<?php }else{;?>
es miembro del <strong> Departamento de Diseño</strong>.
<?php };?>
</p>
</div>
</article>
<?php };?>
</div>
<footer>
<p>Mayo de 2017 &bull; Esta obra está bajo una <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Licencia Creative Commons Atribución-NoComercial-CompartirIgual 4.0 Internacional</a>.</p>
</footer>
</div><!--/col-sm-10 col-sm-offset-1-->
</div><!--/row-->
</div><!--/container-->
<script src="../bootstrap/js/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

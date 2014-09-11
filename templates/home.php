<!DOCTYPE HTML>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Scio Test 2</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<link rel="stylesheet" type="text/css" media="all" href="assets/reset.css" />
<link rel="stylesheet" type="text/css" media="all" href="assets/style.css" />
<!--[if lt IE 9]>
<script src="https://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
</head>
<body>

<div class="loading">
	<div class="loading-dialog">
		<p>Cargando...</p>
	</div>
</div><!-- .loading -->
<div class="wrapper">
	<section id="content">
		<form action="#" class="form" enctype="multipart/form-data" method="get">
			<div class="row filters">
				<label class="col warrior">
					<span class="label"></span>
					<select name="warrior">
						<option value="0" selected="selected">Selecciona tu guerrero</option>
						<option value="paladin">Paladin</option>
						<option value="elfo">Elfo</option>
						<option value="mago">Mago</option>
					</select>
				</label>
				<label class="col item">
					<span class="label"></span>
					<select name="item">
						<option value="0" selected="selected">Selecciona tu Arma</option>
						<option value="espada">Espada</option>
						<option value="arco">Arco</option>
						<option value="hechizo">Hechizo</option>
					</select>
				</label>
			</div>
			<div class="buttons">
				<input name="attack" type="submit" value="Atacar" /> <input name="reset" type="reset" value="Reiniciar" />
			</div>
		</form>
		<div class="response"></div>
	</section><!-- #content -->

	<footer id="footer">
		Derechos Reservados &copy; 2014, Tonny.org
	</footer><!-- #footer -->
</div><!-- .wrapper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="assets/scripts.js"></script>
</body>
</html>
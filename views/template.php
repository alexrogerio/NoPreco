<!DOCTYPE html>
<html>
<head>
	<title>Meu site</title>
</head>
<body>	
	<h1>Topo</h1>
	<a href="<?php echo BASE_URL; ?>">Home</a>
	<a href="<?php echo BASE_URL; ?>galeria">Galeria</a>
	<hr>
	 <?php $this->loadInTemplate($viewName,$viewData); ?>
	 <hr>
	 <h1>Rodapé</h1>
</body>
</html>
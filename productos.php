<?php
	$titulo = 'PRODUCTOS';
	include 'header.php';
?>
<div class="container" id="moduloProductos">
	<div class="page-header centrado">
		<h2><strong>Nuestro catálogo</strong></h2>
	</div>

	<?php
		$mysqli = new mysqli("127.0.0.1", "root", "", "test");

		if ($mysqli->connect_errno) {
			echo "<h1>NO SE PUDO CONECTAR A LA BASE DE DATOS";
			echo "<h3>Error No.: ".$mysqli->connect_errno."</h3>";
			echo "<h3>Error: ".$mysqli->connect_error."</h3>";
			exit;
		}

		$sql = "SELECT * FROM Producto";

		if (!$resultado = $mysqli->query($sql)) {
			echo "<h1>ERROR AL REALIZAR LA CONSULTA DE PRODUCTOS</h1>";
		}

		while($producto = $resultado->fetch_assoc()) { ?>
		<div class="row">
			<div class="col-sm-2">
				<img class="img-thumbnail" src="productos/<?= $producto['Imagen'] ?>">
			</div>
			<div class="col-sm-8">
				<h3><strong>Nombre:</strong> <?= $producto['Nombre'] ?></h3>
				<h3><strong>Precio:</strong> $<?= $producto['Precio'] ?></h3>
			</div>
		</div>
		<?php }
	?>
</div>
<?php
	include 'footer.php';
?>
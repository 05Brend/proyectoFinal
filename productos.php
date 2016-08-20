<?php
	$titulo = 'PRODUCTOS';
	include 'header.php';
?>
<div class="container" id="moduloProductos">
	<div class="page-header centrado">
		<h2><strong>Nuestro catálogo</strong></h2>
	</div>

	<?php
		include 'conexion.php';
		
		$sql = "SELECT * FROM Producto";

		if (!$resultado = $mysqli->query($sql)) {
			echo "<h1>ERROR AL REALIZAR LA CONSULTA DE PRODUCTOS</h1>";
		}

		while($producto = $resultado->fetch_assoc()) { ?>
		<div class="row col-sm-8 col-sm-offset-2 caja">
			<div class="col-sm-2">
				<img class="img-circle" src="productos/<?= $producto['Imagen'] ?>">
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
<?php
	$titulo = 'CONTACTO';
	include 'header.php';
?>
<div class="container" id="moduloContacto">
	<div class="page-header" style="text-align:center">
		<h2><strong>¡Ponte en contácto con nosotros!</strong></h2>
	</div>

	<?php if(isset($huboExito) && $huboExito) { ?>
		<div class="alert alert-success" style="text-align:center">
			<h4><strong>Gracias!, hemos enviado tu contacto exitósamente</strong></h4>
		</div>
	<?php } ?>

	<?php if(isset($huboError) && $huboError) { ?>
		<div class="alert alert-danger" style="text-align:center">
			<h4><strong>Lo sentimos, ocurrió un error inesperado al enviar tu contacto</strong></h4>
		</div>
	<?php } ?>

	<form class="form-horizontal" role="form" method="POST" action="correo.php">
		<div class="form-group">
			<label class="control-label col-sm-2">
				Nombre:
			</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="nombre" required/>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2">
				Correo Electrónico:
			</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="correo" required/>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2">
				Teléfono (opcional):
			</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="telefono"/>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2">
				Mensaje:
			</label>
			<div class="col-sm-10">
				<textarea class="form-control" name="mensaje" required></textarea>
			</div>
		</div>
		<button class="col-sm-offset-2 btn btn-default" type="submit">Enviar</button>
	</form>
</div>
<?php
	include 'footer.php';
?>
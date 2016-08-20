<?php
	$titulo = '¿ERES MAYOR DE EDAD?';
	$esconderMenu = true;
	include 'header.php';
?>
<div class="container centrado" id="moduloEdad">
	<div class="page-header">
		<h2><strong>Bienvenido a LiQbEeR</strong></h2>
	</div>
	<div class="row">
		<h4>Por favor proporciona tu fecha de nacimiento para tener acceso al sitio</h4>
	</div>
	<div class="row espacio">
		<div class="col-sm-offset-3 col-sm-2">
			<input type="text" placeholder="Día" class="form-control" name="dia"/>
		</div>
		<div class="col-sm-2">
			<select name="mes" class="form-control">
				<option>Mes</option>
				<option value="1">Enero</option>
				<option value="2">Febrero</option>
				<option value="3">Marzo</option>
				<option value="4">Abril</option>
				<option value="5">Mayo</option>
				<option value="6">Junio</option>
				<option value="7">Julio</option>
				<option value="8">Agosto</option>
				<option value="9">Septiembre</option>
				<option value="10">Octubre</option>
				<option value="11">Noviembre</option>
				<option value="12">Diciembre</option>
			</select>
		</div>
		<div class="col-sm-2">
			<input type="text" placeholder="Año" class="form-control" name="anio"/>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12" id="cntBtnEnviar">
			<button type="button" class="btn btn-default" id="btnEnviar">Enviar</button>
		</div>
	</div>
</div>
<?php
	include 'footer.php';
?>
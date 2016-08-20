		<div class="row col-sm-12 espacio-footer"></div>
		<footer class="footer" style="text-align: center">
			<p style="padding-top: 5px;">Derechos reservados Brenda Davalos</p>
			<p>Aquí pon una dirección</p>
		</footer>
		
		<script type="text/javascript" src="componentes/jquery.min.js"></script>
	  	<script type="text/javascript" src="componentes/bootstrap/js/bootstrap.min.js"></script>
	  	<script type="text/javascript" src="js/edad.js"></script>
	  	<script type="text/javascript">
	  		if (sessionStorage.saltarEdad !== "Y" && window.location.pathname.indexOf("edad.php") === -1) {
	  			window.location = "edad.php";
	  		}
	  	</script>
	</body>
</html>
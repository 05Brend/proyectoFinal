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
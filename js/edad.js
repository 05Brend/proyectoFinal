$("#btnEnviar").on("click", function () {
	var dia = $("input[name=dia]").val();
	var mes = $("select[name=mes]").val();
	var anio = $("input[name=anio]").val();

	var fecha = new Date(anio, mes, dia);

	if ( Object.prototype.toString.call(fecha) === "[object Date]" )
	  if ( isNaN( fecha.getTime() ) )
	    alert("La información ingresada no es una fecha válida");
	  else
	    validarEdad(dia, mes, anio);
	else
	  alert("La información ingresada no es una fecha válida");
});

function calcularEdad(birthMonth, birthDay, birthYear) {
  todayDate = new Date();
  todayYear = todayDate.getFullYear();
  todayMonth = todayDate.getMonth();
  todayDay = todayDate.getDate();
  age = todayYear - birthYear; 

  if (todayMonth < birthMonth - 1)
  {
    age--;
  }

  if (birthMonth - 1 == todayMonth && todayDay < birthDay)
  {
    age--;
  }
  return age;
}

function validarEdad(dia, mes, anio) {
	var edad = calcularEdad(mes, dia, anio);

	if (edad < 18) {
		alert("Sólo pueden acceder mayores de edad");
	} else {
		sessionStorage.saltarEdad = "Y";
		window.location = "index.php";
	}
}
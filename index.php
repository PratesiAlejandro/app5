<html>
<head>
	<title>TP 1</title>
</head>
<body>

</body>
</html>

<?php

include "Persona.php";
include "Empleado.php";
include "Fabrica.php";


/*$per1 = new Persona("pepe","lopez",285555555);*/
$emple1 = new Empleado(2222,85000,"Pepe","lopez",285555555,"M");
$emple2 = new Empleado(2246,150000,"Diego","Marado",3846555,"M");
$emple3 = new Empleado(2222,99700,"Lara","Fem",285555555,"F");

/*echo $per1->ToString();*/
echo "<br>";

echo "Empleado1";
echo $emple1->Hablar("Frances");
echo $emple1->ToString();

$empresa = new Fabrica("Mi Empresa ");
$empresa->AgregarPersona($emple1);
$empresa->AgregarPersona($emple2);
$empresa->AgregarPersona($emple3);

$empresa->ToString();

?>
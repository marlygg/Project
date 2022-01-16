<?php
// Incluimos los datos de conexión y las funciones:
include("datos.php");
include("funciones.php");

// Usamos esas variables:
if (conectarBase($host,$usuario,$clave,$base)) {

<?php
//Validamos que hayan llegado estas variables, y que no esten vacias:
if (isset($_POST["fname"], $_POST["lname"], $_POST["email"], $_POST["phone"]) and $_POST["fname"] !="" and $_POST["lname"]!="" and $_POST["email"]!="" and $_POST["phone"]!="" ){

//traspasamos a variables locales, para evitar complicaciones con las comillas:
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$phone = $_POST["phone"];

//Preparamos la orden SQL
$consulta = "INSERT INTO contactos
(contactid,fname,lname,email,phone) VALUES ('0','$fname','$lname','$email','$phone')";

if (mysql_query($consulta) ){
echo "<p>Registro agregado.</p>";
} else {
echo "<p>No se agregó...</p>";
}

} else {

echo '<p>Por favor, complete el <a href="formulario.html">formulario</a></p>';
}
?>
} else {
echo"<p>Servicio interrumpido</p>";

}
?>
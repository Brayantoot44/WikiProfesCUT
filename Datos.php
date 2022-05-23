<?php 

$servidor = "localhost"; // El servidor que utilizaremos, en este caso será el localhost 
$user = "prueba"; // El usuario que acabamos de crear en la base de datos 
$password = "1234"; // La contraseña del usuario que utilizaremos 
$BD = "BDProyecto"; // El nombre de la base de datos 

$conexion = @mysqli_connect($servidor, $user, $password, $BD); 

if (!$conexion) {
    echo " Error en la conexion ";
}


if(isset($_GET['registrarse'])){

    $Nombres = $_GET['nombres'];
    $Carrera = $_GET['carrera'];
    $Materia = $_GET['materia'];
    $Semestre = $_GET['semestre'];
    $Profesor = $_GET['profesor'];
    $Descripcion = $_GET['descripcion'];

    $insertarDatos = "INSERT INTO Datos VALUES ('$Nombres', '$Carrera' , '$Materia', '$Semestre', '$Profesor', '$Descripcion')";

    $ejecutarInsertar = mysqli_query($conexion, $insertarDatos);

    if(!$ejecutarInsertar){
    }
        echo"Error en la linea de sql";
    }

        header("location:Principal.php")

?>
<?php 

    $Usuario = $_GET['Usuario'];
    $Contraseña = $_GET['Contraseña'];

    $servidor = "localhost"; // El servidor que utilizaremos, en este caso será el localhost 
    $user = "prueba"; // El usuario que acabamos de crear en la base de datos 
    $password = "1234"; // La contraseña del usuario que utilizaremos 
    $BD = "BDProyecto"; // El nombre de la base de datos 

    $conexion = @mysqli_connect($servidor, $user, $password, $BD); 

    $consulta = "SELECT * FROM login WHERE Usuario = '$Usuario' and Contraseña = '$Contraseña'";
    $resultado = mysqli_query($conexion, $consulta);

    $filas=mysqli_num_rows($resultado);

    if ($filas > 0) {
        header("location:Principal.php");

    }
    else{

        header("location:Intento.html");
    }
     
    mysqli_free_result($resultado);
    mysqli_close($conexion);

    ?>


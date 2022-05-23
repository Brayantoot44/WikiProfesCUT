 <?php   

    $servidor = "localhost"; // El servidor que utilizaremos, en este caso será el localhost 
    $user = "prueba"; // El usuario que acabamos de crear en la base de datos 
    $password = "1234"; // La contraseña del usuario que utilizaremos 
    $BD = "BDProyecto"; // El nombre de la base de datos 

    $conexion = @mysqli_connect($servidor, $user, $password, $BD); 


?>

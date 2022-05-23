<?php 

    $servidor = "localhost"; // El servidor que utilizaremos, en este caso será el localhost 
    $user = "prueba"; // El usuario que acabamos de crear en la base de datos 
    $password = "1234"; // La contraseña del usuario que utilizaremos 
    $BD = "BDProyecto"; // El nombre de la base de datos 

    $conexion = @mysqli_connect($servidor, $user, $password, $BD); 

?>


<html>
<head>
  <title> Principal </title>
  <link rel="stylesheet" type="text/css" href="Principal.css">
  <link rel="stylesheet" type="text/css" href="fonts.css">
  <link rel="stylesheet" type="text/css" href="Principal.css/style.css?ts=<?=time()?>" />
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
  <body>

  <div class="Encabezado">

    <img class="derecha" src="udg2.png">
     <img class="izquierda" src="logo.jpeg">

       <h2><center><aside>  <input type="button" value="Cerrar Sesion" onclick="location.href='index.html'" class="fin">   </aside></center></h2> 

    <div class="reset"></div>
  </div>

 <!--   <center>
 
  </center> -->

    <hr>

    <div class="contenedor  menu"> 
    <ul class = "navbar">
    <li><a href="index.html"> Cerrar Sesion </a></li>

    <li><a href="https://udg.mx"> Conocenos </a></li>

    <li> <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJZWxJnGLlPtRmvsXJbxrGDrcmkgblZKqwbCmZjXzpHmLKMqQnzJvSqzrhZMpHTmSKmcNVq"> Email </a> </li>

    <li><a href="https://es.wikipedia.org/wiki/HTML5"> Sugerencias </a></li>
    </ul>
    </div>

    <div class="contenedor  contenido"> 
    <h1>CUTONALA</h1>
    <label> Pagina creada para criticas y reseñas acerca de los profes y materias que las imparten. </label>
    <p></p>
    <form>
         <input type="button" value="Click para dar opinion" class="siguiente" onclick="location.href='InserDatos.html'"> 
    </form>
    <p>Conoce mas de nuestro Centro Universitario: 
    <a href="https://www.facebook.com/centrouniversitariodetonala"> CUTONALA</a>.
    </p>
    <br>
    <table class="tablaa" >

  <tr>

    <td bgcolor="#17F5A8 "><h3> <center>Nombre y Apellido</h3></center></td>

     <td bgcolor="#17F5A8 "><h3> <center>Materia </h3></center></td>

    <td bgcolor="#17F5A8 "><h3> <center>Carrera </h3></center></td>

    <td bgcolor="#17F5A8 "><h3> <center>Semestre </h3></center></td>

    <td bgcolor="#17F5A8 "><h3> <center>Profesor </h3></center></td>

    <td bgcolor="#17F5A8 "><h3> <center>Descripcion </h3></center></td>
  </tr>

<?php 
$sql = "SELECT * FROM Datos";
$result = mysqli_query($conexion,$sql);

while($mostrar = mysqli_fetch_array($result)){
?>

  <tr>

    <td> <?php  echo $mostrar['Nombres'] ?></td>

    <td> <?php  echo $mostrar['Carrera'] ?></td>

    <td> <?php  echo $mostrar['Materia'] ?></td>

    <td> <?php  echo $mostrar['Semestre'] ?> </td>

    <td> <?php  echo $mostrar['Profesor'] ?> </td>

    <td class="final"> <?php  echo $mostrar['Descripcion'] ?></td>

  </tr>
<?php
}
?>

</table>

    </div>
    <p></p>











        <div class="social">
    <ul>
      <li><a href="https://www.facebook.com/centrouniversitariodetonala" target="_blank" class="icon-facebook2"></a></li>
      <li><a href="https://twitter.com/Cutonala_udg?s=20&t=1y9kWAea8ZoR0VBo2nN28g" target="_blank" class="icon-twitter"></a></li>
      <li><a href="https://www.instagram.com/brayan.guzman44/" target="_blank" class="icon-instagram"></a></li>
      <li><a href="https://api.whatsapp.com/send?phone=3339678915" target="_blank" class="icon-whatsapp"></a></li>
      <li><a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJZWxJnGLlPtRmvsXJbxrGDrcmkgblZKqwbCmZjXzpHmLKMqQnzJvSqzrhZMpHTmSKmcNVq" class="icon-mail4"></a></li>
    </ul>
  </div>
  </body>
</html>




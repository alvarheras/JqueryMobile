<?php

session_start();
if(isset($_POST['botonenviar'])){
    $nombreprofe = $_POST['user'];
    $passprofe = $_POST['pass'];
    //comprobamos si esta en la base de datos
    /*
    $usuario = "root";
    $contrasena ="root";
    $conexion = new PDO('mysql:host=localhost;dbname=JqueryMobile', $usuario, $contrasena);
    $res = $conexion->query('SELECT * FROM usuarios', PDO::FETCH_ASSOC);
    
    foreach($res as $row){
        if($row['profesor']!==$nombreprofe && $row['pass']!==$passprofe){
           header('Location: http://localhost/JQUERYMOBILE/index.html');
        }
    }
    */
    //abrimos sesion para controlar aque no se pueda acceder sin logeo
    $_SESSION['newsession']=$nombreprofe;
}
if(isset($_SESSION['newsession'])){
    
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Title of the document</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    </head>
<style>/*http://demos.jquerymobile.com/1.2.0/docs/buttons/buttons-icons.html*/</style>
    <body>
        <div data-role="page" id="pageone">
             
              <div data-role="header">
                <h1><?php echo "Hola"." ".$_SESSION['newsession'] ?></h1>
              </div>
                <?php 
                    if(isset($_POST['nota'])){
                        $alumno = $_POST['alumno'];
                        echo "<h2 style='text-align:center;margin-bottom:0px;'>Has calificado a $alumno</h2>";
                    }
                ?>
              <div data-role="main" class="ui-content">
                <form method="post" action="calificacion.php" data-ajax="false">
                    <div data-role="fieldcontain">
	                   <label for="select-choice-1" style="text-align:center;" class="select">Selecciona el alumno</label>
                        <select name="alumno" id="select-choice-1">
                            <option value="Alvaro">Alvaro</option>
                            <option value="Juan">Juan</option>
                            <option value="Pedro">Pedro</option>
                            <option value="Carlos">Carlos</option>
                            <option value="Alvaro">Alvaro</option>
                            <option value="Juan">Juan</option>
                            <option value="Pedro">Pedro</option>
                            <option value="Carlos">Carlos</option>
                            <option value="Alvaro">Alvaro</option>
                            <option value="Juan">Juan</option>
                            <option value="Pedro">Pedro</option>
                            <option value="Carlos">Carlos</option>
                        </select>
                    </div>
                    <div data-role="fieldcontain">
	                   <label for="select-choice-1" style="text-align:center;" class="select">Selecciona el curso</label>
                        <select name="curso" id="select-choice-1">
                            <option value="1 DAW">1 DAW</option>
                            <option value="2 DAW">2 DAW</option>
                            <option value="1 DAM">1 DAM</option>
                            <option value="2 DAM">2 DAM</option>
                        </select>
                    </div>
                    <input type="submit" value="Calificar" name="botonenviar" data-icon="arrow-r"/>
                </form>
              </div>
              
              <div data-role="footer" style="padding-left:20px;">
                <a href="index.html" data-role="button" data-icon="delete" class="botonesfooter">Cerrar sesion</a> 
                <a href="eleccion.php" data-role="button" data-icon="grid" class="botonesfooter">Alumnos</a> 
                <a href="index.html" data-role="button" data-icon="home" class="botonesfooter">Login</a> 
              </div>
              
        </div>  
    </body>
</html>
<?php }
else {
    header('Location: http://localhost/JQUERYMOBILE/index.html');
}
?> 
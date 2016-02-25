<?php
    $nombre = $_POST['alumno'];
    $curso = $_POST['curso'];
    session_start();
    $nombreprofe = $_SESSION['newsession'];
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
    <style>
        .leters{
            
        }
        .contenedor{
            padding: 20px;
            padding-top: 0px;
        }
        .titulocontenedor{
            margin-top: 10px;
            background-color: rgb(233,233,233);
            padding: 10px;
            color: black;
            border-radius: 10px;
            text-align: center;
            font-weight: bold;
            
        }
    </style>
    <body>
        <div data-role="page" id="pageone">
              <div data-role="header">
                <h1>Calificacion de <?php  echo "$nombre"." del curso"." $curso"  ?> </h1>
              </div>
 
              <div data-role="main" class="ui-content">
                  <form method="post" action="eleccion.php" data-ajax="false">
                        <input type="hidden" value="<?php  echo "$nombreprofe" ?>" name="user">
                      <input type="submit" value="Volver" name="botonenviar" data-icon="back"/>
                  </form>
                <form method="post" action="eleccion.php" data-ajax="false">
                   <p class="titulocontenedor">General</p>
                    <p class="leters">Entrada del alumno</p><label><input type="checkbox" name="checkbox-0" />bien </label>
                    <p class="leters">Indumentaria</p><label><input type="checkbox" name="checkbox-0" /> bien </label>
                    <p class="leters">Introducción: ¿Es atractiva? ¿Queda claro el proyecto?</p><label><input type="checkbox" name="checkbox-0" /> bien </label>
                    <p class="leters">Desarrollo: Orden en las ideas. Claridad en la exposición. Aclaración de términos técnicos</p><label><input type="checkbox" name="checkbox-0" /> bien </label>
                    <p class="leters">Conclusión: ¿Queda claro el objetivo del proyecto? ¿Lo vende bien?</p><label><input type="checkbox" name="checkbox-0" /> bien </label>
                    <p class="leters">Seguridad en lo que expone. La presentación está trabajada (power -point otros)</p><label><input type="checkbox" name="checkbox-0" />bien </label>
                    <p class="leters">Entusiasmo en lo que expone</p><label><input type="checkbox" name="checkbox-0" /> bien </label>
            
                    <p class="titulocontenedor" style="margin-top:20px;">Expresión oral:</p>
                            <p class="leters">Entonación</p><label><input type="checkbox" name="checkbox-0" /> bien </label>
                            <p class="leters">Volumen</p><label><input type="checkbox" name="checkbox-0" />bien </label>
                            <p class="leters">Velocidad</p><label><input type="checkbox" name="checkbox-0" /> bien </label>
                            <p class="leters">Vacilación en la voz</p><label><input type="checkbox" name="checkbox-0" /> bien </label>
                            <p class="leters">Pausas</p><label><input type="checkbox" name="checkbox-0" /> I agree </label>
                            <p class="leters">Utilización de muletillas</p><label><input type="checkbox" name="checkbox-0" /> bien </label>
                    <p class="leters">Duración: ¿Se adecua a lo estipulado?</p><label><input type="checkbox" name="checkbox-0" /> bien </label>
                    
                    <p class="titulocontenedor" style="margin-top:20px;">Lenguaje no verbal:</p>
                        <p class="leters">Mirada: ¿dirige la mirada a todo el auditorio?</p><label><input type="checkbox" name="checkbox-0" /> bien </label>
                        <p class="leters">Sonrisa/expresión facial positiva</p><label><input type="checkbox" name="checkbox-0" /> bien </label>
                        <p class="leters">Posición correcta del cuerpo</p><label><input type="checkbox" name="checkbox-0" /> bien </label>
                        <p class="leters">Tics, gestos nerviosos</p><label><input type="checkbox" name="checkbox-0" /> bien </label>
                    <p class="leters">*Atención del público: * ¿Logra atraer la atención del público?</p><label><input type="checkbox" name="checkbox-0" /> bien </label>
                    <p class="leters">Preguntas realizadas: ¿Responde de forma coherente?</p><label><input type="checkbox" name="checkbox-0" /> bien </label>
                    <input type="hidden" value="0" name="nota">
                    <input type="hidden" value="<?php  echo "$nombre" ?>" name="alumno">
                    <input type="hidden" value="<?php echo $nombreprofe ?>" name="user">
                     <input type="submit" value="Calificar <?php  echo "$nombre" ?>" name="botonenviar" data-icon="arrow-r"/>
                </form>
               
              

              <div data-role="footer" style="padding-left:20px;">
                <a href="index.html" data-role="button" data-icon="delete" class="botonesfooter">Cerrar sesion</a> 
                <a href="eleccion.php" data-role="button" data-icon="grid" class="botonesfooter">Alumnos</a> 
                <a href="index.html" data-role="button" data-icon="home" class="botonesfooter">Login</a> 
              </div>
        </div>  
    </body>
</html> 
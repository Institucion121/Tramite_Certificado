<!DOCTYPE html>
<html>
<head>
    <meta http-equiv= "Content-Type" content="text/html; charset=UTF-8">
    <title>Datos generales del alumno </title>
</head>
<body>

    <br><br><br><br>
    <div class="estilo">
         <font SIZE=3 FACE="Montserrat" COLOR="black"> 
        <h1>Registrarse</h1>
    </font>
        <form id="miFormu" action="datos_alumnos.php" method= "POST">

            <label for="Nombre">Nombre(s):</label>
            <input type="text" id="Nombre" name="Nombre" required><br>

            <label for="Apellido_paterno">Apellido paterno:</label>
            <input type="text" id="Apellido_paterno" name="Apellido_paterno" required><br>

            <label for="Apellido_materno">Apellido materno:</label>
            <input type="text" id="Apellido_materno" name="Apellido_materno" required><br>

            <label for="Especialidad">Especialidad:</label>
            <input type="text" id="Especialidad" name="Especialidad" required><br>

            <label for="Grado">Grado:</label>
            <input type="number" id="Grado" name="Grado" required><br>

            <label for="Turno">Turno:</label>
            <input type="texto" id="Turno" name="Turno" required><br>

            <label for="Correo_electronico">Correo electronico:</label>
            <input type="text" id="Correo_electronico" name="Correo_electronico" required><br>

            <label for="Telefono">Teléfono:</label>
            <input type="varchar" id="Telefono" name="Telefono" required><br>
            
            <label for="Num_control">Número de control:</label>
            <input type="varchar" id="Num_control" name="Num_control" required><br>



           <center>
          <button type="submit">Enviar</button>
            </center>
        </form>
    </div>
</body>
</html>
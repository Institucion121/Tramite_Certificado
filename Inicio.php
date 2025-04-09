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
        <h1>Inicio</h1>
    </font>
        <form id="miFormu" action="inicio_sesion.php" method= "POST">

            <label for="ID">ID:</label>
            <input type="varchar" id="ID" name="ID" required><br>

            <label for="Name">Usuario:</label>
            <input type="varchar" id="Name" name="Name" required><br>

            <label for="Nomber">Numero:</label>
            <input type="varchar" id="Nomber" name="Nomber" required><br>

              <label for="Email">Email:</label>
            <input type="varchar" id="Email" name="Email" required><br>


           <center>
          <button type="submit">Enviar</button>
            </center>
        </form>
    </div>
</body>
</html>
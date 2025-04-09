
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nombre = $_POST["Nombre"];
    $Apellido_paterno = $_POST["Apellido_paterno"];
    $Apellido_materno = $_POST["Apellido_materno"];
    $Especialidad = $_POST["Especialidad"];
    $Grado = $_POST["Grado"];
    $Turno = $_POST["Turno"];
    $Correo_electronico = $_POST["Correo_electronico"];
    $Telefono = $_POST["Telefono"];
    $Num_control = $_POST["Num_control"];
 

    $conn = new mysqli("localhost", "root", "", "tramite_certificado");

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }


    $sql = "INSERT INTO datos_alumnos (Nombre, Apellido_paterno, Apellido_materno, Especialidad, Grado, Turno, Correo_electronico, Telefono, Num_control) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssssssssi", $Nombre, $Apellido_paterno, $Apellido_materno, $Especialidad, $Grado, $Turno, $Correo_electronico, $Telefono, $Num_control);

        if ($stmt->execute()) {
            echo "<h2>DATOS REGISTRADOS <span class='co'>CORRECTAMENTE</span></h2>";
        } else {
            echo "<h2><span class='in'>ERROR</span> AL HACER EL REGISTRO DE DATOS: " . $stmt->error . "</h2>";
        }

        $stmt->close();
    } else {
        echo "<h2><span class='in'>ERROR</span> AL PREPARAR LA CONSULTA: " . $conn->error . "</h2>";
    }

    $conn->close();
}
?>


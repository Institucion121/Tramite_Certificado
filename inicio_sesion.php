
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ID = $_POST["ID"];
    $Name = $_POST["Name"];
    $Nomber = $_POST["Nomber"];
    $Email = $_POST["Email"];
    
    
 

    $conn = new mysqli("localhost", "root", "", "tramite_certificado");

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }


    $sql = "INSERT INTO inicio_sesion (ID,Name, Nomber, Email) 
            VALUES (?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssss", $ID, $Name, $Nomber, $Email);

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


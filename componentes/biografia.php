<?php
include_once(__DIR__ . '/../config/db.php');

// Consulta para obtener la biografía (suponiendo que está en la tabla 'entradas' y la sección biografía tiene seccion_id=7, por ejemplo)
$sql = "SELECT titulo,contenido FROM entradas WHERE seccion_id = 1 ORDER BY fecha DESC LIMIT 1;";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo '<h2>Biografía completa</h2>';
    echo '<p>' . nl2br(htmlspecialchars($row["contenido"])) . '</p>';
} else {
    echo '<h2>Biografía completa</h2>';
    echo '<p>No hay biografía disponible en este momento.</p>';
}
?>




<?php
include_once(__DIR__ . '/../config/db.php');
// Consulta para obtener todos los elementos del menú ordenados por ID
$sql = "SELECT * FROM menu ORDER BY id ASC";
$result = $conn->query($sql);

// Array para mapear los nombres con sus IDs HTML personalizados
$ids_personalizados = [
    // 'Inicio' => 'inicio',
    'Biografía' => 'biografia',
    'Entrevistas' => 'entrevistas',
    'Galería' => 'galeria',
    'Videos' => 'videos',
    'Agenda' => 'agenda',
    'Redes Sociales' => 'redes'
];

// Verificar si hay resultados
if ($result && $result->num_rows > 0) {
    echo '<nav>';
    while ($row = $result->fetch_assoc()) {
        $nombre = $row['nombre'];
        // Comprobamos si el nombre tiene un id personalizado
        if (isset($ids_personalizados[$nombre])) {
            $id = $ids_personalizados[$nombre];
            echo '<a href="#' . htmlspecialchars($id) . '">' . htmlspecialchars($nombre) . '</a>';
        }
    }
    echo '</nav>';
} else {
    echo '<p>No se encontró ningún elemento de menú.</p>';
}
?>

<?php
include_once(__DIR__ . '/../config/db.php');
//SELECT foto_url FROM entradas WHERE foto_url IS NOT NULL AND foto_url != '';
$sql = "SELECT * FROM `galeria`";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    echo '<h2>Galería</h2>';
    echo '<div class="galeria-contenedor"><div class="galeria">';

    while ($row = $result->fetch_assoc()) {
        $foto = htmlspecialchars($row["foto_url"]);
        echo '<a href="/mi_pagweb/' . $foto . '" target="_blank">';
        echo '<img src="/mi_pagweb/' . $foto . '" alt="Imagen de galería">';
        echo '</a>';
    }

    echo '</div></div>';
} else {
    echo '<p>No hay imágenes en la galería.</p>';
}
?>
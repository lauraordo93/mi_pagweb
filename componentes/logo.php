<?php
// Incluir solo una vez el archivo de conexión a la base de datos
include_once(__DIR__ . '/../config/db.php');

// Consulta SQL para obtener texto y URL
$sql = "SELECT nombre_pagina, logo FROM encabezado_logo LIMIT 1";
$result = $conn->query($sql);

$logo_url = ''; // Inicializar

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();


    $logo_url = '/mi_pagweb/' . htmlspecialchars($row["logo"]);

    // Mostrar el título
    //  echo '<div class="text">';
    // echo '<h1 class="nombre_pag">' . htmlspecialchars($row["nombre_pagina"]) . '</h1>';
    // echo '</div>';
}
?>

<!-- Aquí ya puedes imprimir el estilo porque $logo_url está definido -->
<style>
    header#inicio {
        background-image: url('<?php echo $logo_url; ?>');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
         background-attachment: fixed;
         /*quitando esto la imagen baja sola*/  
        /* width: 100%;
        min-height: 115vh; */
        justify-content: center;
    }

    @media screen and (max-width: 768px) {
        header#inicio {
            min-height: 50vh;
            padding: 1rem;
            background-position: center center;
        }
    }
</style>
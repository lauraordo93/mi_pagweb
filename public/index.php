<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página web Carlos</title>
    <link rel="stylesheet" href="../css/pagweb.css?v=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>



<body>

    <header id="inicio">

        <nav class="nav-container">

            <?php include('../componentes/menunav.php'); ?>
        </nav>

        <div class="logo">
            <?php include('../componentes/logo.php'); ?>

        </div>


        <div class="intro">

            <?php include('../componentes/sobremi.php'); ?>

        </div>


    </header>


    <section id="entrevistas">
        <?php include('../componentes/entrevistas.php'); ?>
    </section>


    <section id="biografia">
        <?php include('../componentes/biografia.php'); ?>
    </section>


    <section id="galeria">
        <?php include('../componentes/galeria.php'); ?>
    </section>

    <section id="videos">
        <?php include_once('../componentes/videos.php'); ?>
    </section>

    <section id="academia">
        <?php include('../componentes/academia.php'); ?>
    </section>

    <section id="agenda">
        <div class="mensaje-agenda">
            <?php include_once('../componentes/agenda.php'); ?>
            <label for="agenda-progress"><strong>En desarrollo...</strong></label>
            <progress id="agenda-progress" class="agenda" value="30" max="100"></progress>
        </div>
    </section>



    <footer>
        <?php include_once('../componentes/redes.php'); ?>
        <div class="pie">
            <p>
                &copy; 2025 Todos los derechos reservados
                |
                <strong>Artist by</strong>
                <a href="https://es.yamaha.com/es/artists/c/carlos_ordonez_de%20arce.html" target="_blank"
                    rel="noopener noreferrer">
                    <img src="../img/logo_yamaha1.png" alt="Yamaha"
                        style="height: 80px; margin-left: 5px; vertical-align: middle;">
                </a>
            </p>
            <a class="init" href="#inicio">Volver al inicio</a>
        </div>
    </footer>


<!--Animación java script-->
<!-- <script src="../js/animacion_galeria.js" defer></script> -->
<script src="../js/animacion_academia.js" defer></script>
<script src="../js/sobremi.js"></script>
</body>

</html>
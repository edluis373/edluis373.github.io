<?php 
    require 'includes/funciones.php';
    incluirTemplate('header');

    // Importar la conexión
    require 'includes/config/database.php';
    $db = conectarDB();

    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if (!$id) {
        header('Location: /anuncios.php');
    }

    // Escribir el Query
    $query = "SELECT * FROM propiedades WHERE id=${id}";

    // Consultar la BD
    $resultadoConsulta = mysqli_query($db, $query);

    if(!$resultadoConsulta->num_rows) {
        header('Location: /anuncios.php');
    }

    $propiedad = mysqli_fetch_assoc($resultadoConsulta);    
?>

    <main class="contenedor seccion contenido-centrado">

        <h1><?php echo $propiedad['titulo']; ?></h1>
        <img loading="lazy" src="/imagenes/<?php echo $propiedad['imagen'] ?>" alt="anuncio ">

        <div class="resumen-propiedad">
            <p class="precio">$<?php echo number_format($propiedad['precio'], 0, '.', ',');?></p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p><?php echo $propiedad['wc']; ?></p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p><?php echo $propiedad['estacionamiento']; ?></p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p><?php echo $propiedad['habitaciones']; ?></p>
                </li>
            </ul>

            <p><?php echo $propiedad['descripcion']; ?></p>
        </div>
    </main>

<?php 
    mysqli_close($db);
    incluirTemplate('footer'); 
?>
<?php 
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img build="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    25 Años de experiencia 
                </blockquote>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae molestias architecto illum nihil, assumenda sunt eius dolorem. Tempora officia maiores fugiat iste accusamus? Expedita dolore fugit, architecto necessitatibus similique nam! Eum, at? Repellat qui, necessitatibus suscipit laboriosam neque unde error consequuntur. Labore, tenetur! Asperiores odit qui dignissimos neque quod esse maiores quibusdam aut quae, quis corporis omnis commodi. Eum, officiis! Maiores, obcaecati? Amet accusamus corporis est sapiente consectetur, nulla iure odit non sint, praesentium minus facilis delectus at saepe minima officia dolorem reiciendis explicabo exercitationem cupiditate! Iure alias vel odio.</p>

                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum nesciunt laudantium eaque quos quo sit rerum modi nisi enim molestiae quibusdam corrupti tenetur ipsum at, ad aliquid hic magnam necessitatibus.</p>
            </div>      
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más sobre nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci iure, praesentium commodi atque excepturi voluptate impedit possimus cumque voluptatum suscipit ut quibusdam, temporibus illum, deserunt veritatis ullam tempore delectus eveniet.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci iure, praesentium commodi atque excepturi voluptate impedit possimus cumque voluptatum suscipit ut quibusdam, temporibus illum, deserunt veritatis ullam tempore delectus eveniet.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci iure, praesentium commodi atque excepturi voluptate impedit possimus cumque voluptatum suscipit ut quibusdam, temporibus illum, deserunt veritatis ullam tempore delectus eveniet.</p>
            </div>
        </div>
    </section>

<?php incluirTemplate('footer'); ?>
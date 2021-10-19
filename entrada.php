<?php 
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoración de tu hogar</h1> 
        <picture> 
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="buld/img/destacada.jpg" alt="imagen de la propiedad">
        </picture>
        
        <p class="informacion-meta">Estrico el: <span>08/05/2021</span> por: <span>Admin</span> </p>
        
        <div class="resumen-propiedad">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae molestias architecto illum nihil, assumenda sunt eius dolorem. Tempora officia maiores fugiat iste accusamus? Expedita dolore fugit, architecto necessitatibus similique nam! Eum, at? Repellat qui, necessitatibus suscipit laboriosam neque unde error consequuntur. Labore, tenetur! Asperiores odit qui dignissimos neque quod esse maiores quibusdam aut quae, quis corporis omnis commodi. Eum, officiis! Maiores, obcaecati? Amet accusamus corporis est sapiente consectetur, nulla iure odit non sint, praesentium minus facilis delectus at saepe minima officia dolorem reiciendis explicabo exercitationem cupiditate! Iure alias vel odio.</p>

            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum nesciunt laudantium eaque quos quo sit rerum modi nisi enim molestiae quibusdam corrupti tenetur ipsum at, ad aliquid hic magnam necessitatibus.</p>
        </div>
    </main>

<?php incluirTemplate('footer'); ?>
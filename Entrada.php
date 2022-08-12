<?php 

  require 'includes/funciones.php';
  incluirTemplate('header');

?>


    <main class="contenedor contenido-centrado">
        <h1>Casa en venta Frente al bosque
        </h1>

        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg.jpg " type="image/jpg">
            <img src="build/img/destacada2.jpg" alt="destacada">
        </picture>

        <div class="resumen-propiedad">
          <p class="informacion-meta">Creado el: <span>20/20/2020</span> </p>

          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quisquam eveniet, vel maxime reiciendis odit, animi deleniti similique suscipit delectus aperiam laudantium. Impedit labore ratione velit laboriosam quasi, magnam eaque?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem dolorum quas magni temporibus magnam repellendus ad reiciendis ullam, tempora dolorem?
          </p>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur inventore at quibusdam ratione nulla, deleniti nesciunt vero aperiam eos magni.</p>

          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam, dolorem obcaecati! Adipisci est asperiores doloribus incidunt obcaecati, quam quaerat a quae vitae aliquid saepe voluptatem harum ut unde velit culpa.</p>
      
        </div>
     </main>
 
 <?php 
  include './includes/template/footer.php';
?>
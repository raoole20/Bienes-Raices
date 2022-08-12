<?php 
  require 'includes/funciones.php';
  incluirTemplate('header');
?>


    <main class="contenedor contenido-centrado">
        <h1>Casa en venta Frente al bosque
        </h1>

        <picture>
            <source srcset="build/img/destacada.webp">
            <source srcset="build/img/destacada.jpeg">
            <img src="build/img/destacada.jpg" alt="destacada">
        </picture>

        <div class="resumen-propiedad">
          <p class="precio">3,000,000.00</p>

          <ul class="iconos-caracteristicas">
            <li>
              <img src="/build/img/icono_wc.svg" alt="icono wc" loading='lazy'>
              <p>3</p>
            </li>
            <li>
              <img src="/build/img/icono_dormitorio.svg" alt="icono cuartos" loading='lazy'>
              <p>4</p>
            </li>
            <li>
              <img src="/build/img/icono_estacionamiento.svg" alt="icono estacionamieto" loading='lazy'>
              <p>2</p>
            </li>
          </ul>

          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias quisquam eveniet, vel maxime reiciendis odit, animi deleniti similique suscipit delectus aperiam laudantium. Impedit labore ratione velit laboriosam quasi, magnam eaque?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem dolorum quas magni temporibus magnam repellendus ad reiciendis ullam, tempora dolorem?
          </p>
        </div>
     </main>

 
 
     <?php 
  include './includes/template/footer.php';
?>
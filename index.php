<?php 

  require 'includes/funciones.php';
  incluirTemplate('header', $inicio= true);

?>

    <main class="contenedor seccion">
      <h1>Más Sobre Nostoros</h1>

      <div class="iconos-nosotros ">

        <div class="icono">
          <img
            src="/build/img/icono1.svg"
            alt="Icono de Seguridad"
            loading="lazy"
          />
          <h3>Seguridad</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta
            officiis magni explicabo unde. Laudantium, maxime ratione. Non
            itaque dolores, veritatis laudantium deserunt necessitatibus dicta
            distinctio dignissimos obcaecati explicabo perspiciatis beatae.
          </p>
        </div>

        <div class="icono">
          <img
            src="/build/img/icono2.svg"
            alt="Icono de precio"
            loading="lazy"
          />
          <h3>Precio</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta
            officiis magni explicabo unde. Laudantium, maxime ratione. Non
            itaque dolores, veritatis laudantium deserunt necessitatibus dicta
            distinctio dignissimos obcaecati explicabo perspiciatis beatae.
          </p>
        </div>
        <div class="icono">
          <img
            src="/build/img/icono3.svg"
            alt="Icono de Tiempo"
            loading="lazy"
          />
          <h3>A Tiempo</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta
            officiis magni explicabo unde. Laudantium, maxime ratione. Non
            itaque dolores, veritatis laudantium deserunt necessitatibus dicta
            distinctio dignissimos obcaecati explicabo perspiciatis beatae.
          </p>
        </div>

      </div>
    </main>

    <seccion class=" contenedor seccion  ">
      <h2>Casas y Depas en Ventas</h2>

      <div class="contenedor-anuncios">
        <div class="anuncio">

          <picture>
            <source srcset="build/img/anuncio1.webp"> 
            <source srcset="build/img/anuncio1.jpg">
            <img loading = 'lazy' alt="anuncio" src="/build/img/anuncio1.jpg"> 
          </picture>

          <div class="contenido-anuncio">
            <h3>Casa de lujo en el lago</h3>
            <p>Casas en el lago con excelente vista, acabados de lujo a un excelente recio</p>

            <p class="precio">$3,000.000</p>

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

            <a href="anuncios.php" class="boton-amarrillo">
              Ver Propiedad  
            </a>
          </div> <!-- Contenido de anuncios -->

        </div><!-- Anuncio -->
        <div class="anuncio">

          <picture>
            <source srcset="build/img/anuncio1.webp"> 
            <source srcset="build/img/anuncio1.jpg">
            <img loading = 'lazy' alt="anuncio" src="/build/img/anuncio1.jpg"> 
          </picture>

          <div class="contenido-anuncio">
            <h3>Casa de lujo en el lago</h3>
            <p>Casas en el lago con excelente vista, acabados de lujo a un excelente recio</p>

            <p class="precio">$3,000.000</p>

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

            <a href="anuncios.php" class="boton-amarrillo">
              Ver Propiedad  
            </a>
          </div> <!-- Contenido de anuncios -->

        </div><!-- Anuncio -->
        <div class="anuncio">

          <picture>
            <source srcset="build/img/anuncio3.webp"> 
            <source srcset="build/img/anuncio3.jpg">
            <img loading = 'lazy' alt="anuncio" src="/build/img/anuncio3.jpg"> 
          </picture>

          <div class="contenido-anuncio">
            <h3>Casa con piscina</h3>
            <p>Casas en el lago con excelente vista, acabados de lujo a un excelente recio</p>

            <p class="precio">$3,000.000</p>

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

            <a href="anuncios.php" class="boton-amarrillo">
              Ver Propiedad  
            </a>
          </div> <!-- Contenido de anuncios -->

        </div><!-- Anuncio -->
      </div><!-- Contenedor anncios-->

      <div class="ver-todas ">
        <a href="anuncios.php" class="boton-verde">Ver todas</a>
      </div>

    </seccion>

    <seccion class="imagen-contacto">
      <h3>Encuentra la casa de tus sueños</h3>
      <p>Llena el formulario de contacto y un asesor se pondra en contacto contigo  a la brevedad</p>
      <a href="/nosotros.php" class="boton-amarrillo-inline-block">Contactanos</a>
  
    </seccion>

  
    <div class="contenedor seccion seccion-inferior">
      <section class="blog">
        <h3>Nuestro Blog</h3>

        <article class="entrada-blog">
          <div class="imagen">     
                      <picture>
                        <source srcset="build/img/blog1.jpg" type="image/web"> 
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img src="build/img/blog1.jpg" alt="Texto Entrada Blog" loadding='lazy'> 
                      </picture>
          </div>

          <div class="texto-entrada">
              <a href="entrada.php">
                <h4>Terraza en el techo de tu casa</h4>
                <p>Escrito el: <span>20/10/2021</span> por <span>Admin</span>                </p>

                <p>consjos para construir la teraza en tu casa</p>
              </a>
          </div>


        </article>
        <article class="entrada-blog">
          <div class="imagen">     
                      <picture>
                        <source srcset="build/img/blog2.jpg" type="image/web"> 
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img src="build/img/blog2.jpg" alt="Texto Entrada Blog" loadding='lazy'> 
                      </picture>
          </div>

          <div class="texto-entrada">
              <a href="entrada.php">
                <h4>Guia para la decoracion de tu hogar</h4>
                <p>Escrito el: <span>20/10/2021</span> por <span>Admin</span>                </p>

                <p>Decora tu casa con estilo</p>
              </a>
          </div>


        </article>
      </section>

      
      <section class="">
        <h3>Testimoniales</h3>
        <div class="testimonial">
          <blockquote>
            El personal se comprotó de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas las expectativas
          </blockquote>
          <p>-Raul Espina
          </p>
        </div>
      </section>
    </div>


<?php 
    incluirTemplate('footer');
?>

<?php 

  require 'includes/funciones.php';
  incluirTemplate('header');

?>

    <main class="contenedor contenido-centrado">
      <section class="blog">
        <h3>Nuestro Blog</h3>

        <article class="entrada-blog">
          <div class="imagen">     
                      <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp"> 
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
                        <source srcset="build/img/blog2.webp" type="image/webp"> 
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
        <article class="entrada-blog">
          <div class="imagen">     
                      <picture>
                        <source srcset="build/img/blog3.webp" type="image/webp"> 
                        <source srcset="build/img/blog3.jpg" type="image/jpeg">
                        <img src="build/img/blog3.jpg" alt="Texto Entrada Blog" loadding='lazy'> 
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
        <article class="entrada-blog">
          <div class="imagen">     
                      <picture>
                        <source srcset="build/img/blog4.webp" type="image/webp"> 
                        <source srcset="build/img/blog4.jpg" type="image/jpeg">
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
    </main>


<?php 
  include './includes/template/footer.php';
?>
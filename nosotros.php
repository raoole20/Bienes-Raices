<?php 

  require 'includes/funciones.php';
  incluirTemplate('header');

?>

    <main class="contenedor">
        <h1>Conoce Sobre Nosotros</h1>

        <div class="nosotros">
          <div class="imagen">  
            <picture>
              <source srcset="build/img/nosotros.webp"> 
              <source srcset="build/img/nosotros.jpg"> 
              <img loading='lazy' src="build/img/nosotros.jpg" alt="Entrada Nosotros">
            </picture>   
          </div>

          <div class="nosotros-texto">
            <h4>25 años de Experiencia</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et architecto totam eveniet dolor at, maxime aliquam ipsam molestias dolorum, veritatis rerum nihil officiis provident exercitationem pariatur sapiente, eius doloribus hic commodi accusantium. Magnam temporibus sunt dolores eligendi illo maiores exercitationem, hic nisi assumenda quasi officia placeat quod odit reprehenderit modi repellendus corrupti incidunt tempora. Quisquam ea perferendis consectetur. Iusto ratione recusandae perspiciatis. Facere adipisci magnam molestiae voluptatum nostrum, repellat porro! Vitae quidem, et officia doloribus aut praesentium facilis vel soluta delectus nihil quaerat possimus dolor rem molestiae earum voluptatem nisi. Quia et architecto modi sunt enim, magni velit deserunt ullam.</p>
          </div>
        </div>
    </main>

    
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


<?php 
  include './includes/template/footer.php';
?>
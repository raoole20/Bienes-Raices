<?php 

  require 'includes/funciones.php';
  incluirTemplate('header');

?>


    <main class="contenedor">
        <h1>Contacto</h1>

        <picture>
          <source srcset="build/img/destacada3.webp" type="image/webp">
          <source srcset="build/img/destacada3.jpg" type="image/jpg">
          <img src="/build/img/destacada3.jpg" alt="Imagen de contacto" loading ='lazy'>
        </picture>


        <h2>Llene el formulario</h2>

        <form action="" class="formulario">
          <fieldset>
            <legend>Información Personal</legend>

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="Ingrese tú nombre">

            <label for="e-mail">E-mail</label>
            <input type="email" name="e-mail" id="e-mail">

            <label for="telefono">Teléfono</label>
            <input type="tel" name="telefono" id="telefono">

            <label for="mensaje">Mensaje</label>
            <textarea name="" id="mensaje" cols="30" rows="10"></textarea>

          </fieldset>

          <fieldset>
            <legend>Información sobre la propiedad</legend>

            <label for="opciones">Vende o Compra</label>
            <select name="" id="opciones" >
              <option value="" disabled selected>Seleccione</option>
              <option value="Compra">Compra</option>
              <option value="Vede">Vende</option>
            </select>

            <label for="presupuesto">Precio o presupuesto</label>
            <input type="number" id='presupuesto' placeholder="">
          </fieldset>

          <fieldset>
            <legend>Contacto</legend>
            <p>Como desea ser contactado</p>
            <div class="forma-contacto">
              <label for="contactar-telefon">Teléfono</label>
              <input type="radio" value="telefono" id="contactar-telefon" name="contacto">
              
              <label for="contactar-e-mail">E-mail</label>
              <input type="radio" value="e-mail" id="contactar-e-mail" name="contacto">
            </div>

            <p>Si eligió teléfono eliga la fecha y la hora pra ser contactado</p>

            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha">

            <label for="hora">Hora</label>
            <input type="time" id="hora" min="09:00" max="18:00">

          </fieldset>

          <input type="submit" class="boton-verde">
        </form>


    </main>


<?php 
  include './includes/template/footer.php';
?>
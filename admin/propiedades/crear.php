<?php
  require '../../includes/configuracion/databases.php';
  $db =  connecionDB();
  var_dump($db);

  require '../../includes/funciones.php';
  incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h3>Crear</h3>
        <a href="/admin/index.php" class="boton boton-verde">Volver</a>

        <form action="" class="formulario">
            <fieldset>

                <legend>Informacion General</legend>
                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" placeholder="Titulo Propidad">

                <label for="precio">Precio:</label>
                <input type="number" id="precio" placeholder="precio de la propiedad">

                <label for="imagen">Imagen:</label>
                <input type="file" for='img' accept="image/jpeg, image/jpg">

                <label for="descripcion">Descripcion</label>
                <textarea name="" id="descripcion" cols="30" rows="10"></textarea>

            </fieldset>

            <fieldset>
                <legend>Informacion de la ropiedad</legend>

                <label for="habitaciones">Habitaciones</label>
                <input type="number" id="habitacion" min='1' max= '9' step="1"  placeholder="ej: 3">

                <label for="baños">Baños</label>
                <input type="number" id="baños" min= '1' max='5' placeholder="ej: 3">

                <label for="estacionanmientos">Estacionanmientos</label>
                <input type="number" id="estacionanmientos" min= '1' max='5' placeholder="ej: 3">
            </fieldset>

            <fieldset>
                <legend>Vendedor</legend>

                <select name="" id="">
                    <option value="1">Juan</option>
                    <option value="2">Karen</option>
                </select>
            </fieldset>

            <input type="submit" value="Crear Propiedad" class="boton boton-verde">

        </form>
    </main>
 
<?php
  incluirTemplate('footer');
?>
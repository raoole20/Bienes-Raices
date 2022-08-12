<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/build/css/app.css" />
    <title>Bienes Raices</title>
  </head>
  <body>

    <header class="header <?php echo $inicio ? 'inicio': ''; ?>">
      <div class="contenedor contenido-header">

     
        <!--Inicio - barra -->
        <div class="barra">
          <a href=".">
            <img src="/build/img/logo.svg" alt="Logotipo de Bienes Raices" />
          </a>

          <div class="mobile-menu">
            <img src="/build/img/barras.svg" alt="icono menu responsible ">
          </div>

          <div class="modoOscuro">
            <img id="icono" src="/build/img/dark-mode.svg" alt="Icono Darck-mode">
            <nav class="navegacion">
              <a href="nosotros.php">Nosotros</a>
              <a href="anuncios.php">Anuncios</a>
              <a href="blog.php">Blog</a>
              <a href="contacto.php">Contacto</a>
            </nav>
          </div>
        </div>
        <!--Fin - barra -->

      </div>
    </header>
 
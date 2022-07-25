<?php

session_start();

if (!isset($_SESSION['usuario'])) {
  echo '
    <script>
        alert("Por favor,inicia sesión");
        window.location = "index.php";
    </script>
    
    ';

  session_destroy();
  die();
}


?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no" />
  <title>Pagina Web UTN </title>
  <link rel="icon" type="favicon/x-icon" href="img/supertux.png" />
  <link rel="stylesheet" type="text/css" href="styles.css" />
  <link rel="stylesheet" type="text/css" href="responsive.css" />
</head>

<body>
  <!--inicio de la cabecera-->
  <header id="header">
    <div class="wrap">
      <div id="logo">
        <spam class="gear">S</spam>
        <h3>BLOG</h3>
      </div>

      <nav id="menu">
        <ul>
          <li><a href="#">INICIO</a></li>

          <li><a href="https://www.linkedin.com/in/sa%C3%BAl-marb%C3%A1-a92096237/">FORMACION</a></li>
          <li><a href="mailto: saul.marba.j@gmail.com?Subject=Interesado%20en%20el%20Blog">CONTACTO</a></li>
          <li><a href="php/cerrar_sesion.php">SALIR</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <!--fin de la cabecera-->

  <section class="wrap">
    <section id="info">
      <!--Inicio Banner-->
      <div id="banner">
        <h1>LENGUAJES DE PROGRAMACIÓN</h1>
      </div>
      <!--Fin del Banner-->

      <!--Inicio de Tarjetas-->
      <div id="cards">
        <div class="card">
          <p class="icon">H</p>
          <h2 class="category">Desarrollo Web</h2>
          <p class="description">
            Aprende los principales lenguajes para desarrollar webs
          </p>
        </div>

        <div class="card">
          <p class="icon">_</p>
          <h2 class="category">Sistemas Operativos</h2>
          <p class="description">
            Aprende a administrar sistemas linux y windows
          </p>
        </div>

        <div class="card">
          <p class="icon">S</p>
          <h2 class="category">Hardware</h2>
          <p class="description">Conoce los entresijos del Hardware</p>
        </div>

        <div class="card">
          <p class="icon">u</p>
          <h2 class="category">Redes e Internet</h2>
          <p class="description">
            Aprende a configurar y administrar redes informaticas y servidores
          </p>
        </div>

        <div class="card">
          <p class="icon">a</p>
          <h2 class="category">Base de datos</h2>
          <p class="description">
            Aprende a montar y administrar base de datos
          </p>
        </div>
      </div>
      <!--Fin de Tarjetas-->
    </section>

    <!--Inicio de la Barra lateral-->
    <div class="clearfix"></div>
    <aside id="lateral">
      <h3>REDES SOCIALES</h3>
      <div id="social" class="aside-box">
        <div class="twitter">
          <a href="https://twitter.com/MarbaSaul" class="icon">t</a>
          <p class="overlay">
            Twitter
          </p>
        </div>
        <div class="facebook">
          <a href="https://www.facebook.com/saul.marba" class="icon">f</a>
          <p class="overlay">
            Facebook
          </p>
        </div>
        <div class="youtube">
          <a href="https://www.youtube.com/channel/UCM0yRprnlVQ-DySjbaDft-A" class="icon">y</a>
          <p class="overlay">
            YouTube
          </p>
        </div>
      </div>


    </aside>
    <!--Fin de la Barra lateral-->

    <!--Inicio Articulos-->
    <section id="articles">
      <h2>Ultimos articulos</h2>
      <div class="clearfix"></div>
      <article>
        <div class="data">
          <span>Fecha: 21 de julio de 2022</span>
          <span>Categoria: Desarrollo Web</span>
        </div>
        <h4>
          <a href="https://keepcoding.io/blog/que-es-un-archivo-json/" target="_blank">¿Qué es un archivo JSON?</a>
        </h4>
        <p>
          Un archivo JSON es un tipo de archivo que nos encontraremos en muchos softwares de programación para la web pues nos permiten realizar diversas funciones.
           Por ello, es importante saber qué son y cómo nos ayudan a mejorar nuestra manera de programar.
            En este post, te explicaremos qué es un archivo JSON y qué funciones cumple a la hora de utilizar nuestro software de programación <a href="https://keepcoding.io/blog/que-es-un-archivo-json/">(...)</a>
        </p>
      </article>

      <article>
        <div class="data">
          <span>Fecha: 22 de Mayo de 2022</span>
          <span>Categoria: Desarrollo Web</span>
        </div>
        <h4>
          <a href="https://lineadecodigo.com/html5/asociar-un-boton-a-cualquier-formulario-con-html5/" target="_blank">Asociar un botón a cualquier formulario con HTML5</a>
        </h4>
        <p>
          Quizás uno de los nuevos atributos de HTML5 que nos haya pasado por alto, aunque es de gran utilidad, es el atributo form del elemento button. Esto nos va a permitir asociar un botón a cualquier formulario con HTML5. Es decir, independientemente de dónde tengamos el formulario y dónde tengamos el botón dentro de la estructura de nuestra página,
          podremos asociarlos para que funcionen de manera conjunta
          <a href="https://lineadecodigo.com/html5/asociar-un-boton-a-cualquier-formulario-con-html5/">(...)</a>
        </p>
      </article>

      <article>
        <div class="data">
          <span>Fecha:23 de junio de 2022 </span>
          <span>Categoria:Noticias</span>
        </div>
        <h4>
          <a href="https://programacion.net/articulo/que_demanda_de_programadores_habra_en_el_futuro_3221">¿Qué demanda de programadores habrá en el futuro? </a>
        </h4>
        <p>
        Vivimos en una sociedad donde prima lo digital,
         de ahí que el mercado demande profesionales tecnológicos de todo tipo.
         Entre los más demandados están los programadores,
         que son los encargados de desarrollar las aplicaciones,
          páginas web y todo tipo de software que utilizan las empresas y usuarios en su día a día
          <a href="https://programacion.net/articulo/que_demanda_de_programadores_habra_en_el_futuro_3221">(...)</a>
      </article>

      <article>
        <div class="data">
          <span>Fecha: 19 de julio de 2022 </span>
          <span>Categoria: Programacion</span>
        </div>
        <h4>
          <a href="https://keepcoding.io/blog/objetos-en-javascript/">Objetos en JavaScript</a>
        </h4>
        <p>
        Los objetos en JavaScript son los elementos principales de este lenguaje de programación. Así como los objetos en la vida real, estos se componen de una variedad de propiedades que los caracterizan. En este post, te enseñaremos qué son los objetos en JavaScript y cómo identificarlos exactamente en el desarrollo de un proyecto.
        <a href="https://keepcoding.io/blog/objetos-en-javascript/">...</a>
        </h4>
        </p>
      </article>

      <article>
        <div class="data">
          <span>Fecha:19 de julio de 2022</span>
          <span>Categoria: Noticias</span>
        </div>
        <h4>
          <a href="https://keepcoding.io/blog/lenguajes-programacion-interpretados-compilados/">Lenguajes de programación interpretados vs compilados</a>
        </h4>
        <p>
        Entender cómo funcionan los lenguajes de programación interpretados vs compilados nos permite entender los errores en nuestro código que vienen de la forma en la que lo escribimos, así como evitar posibles confusiones a futuro.
         Por ello, en este post, analizaremos la disputa conocida de los lenguajes de programación interpretados vs compilados.
          <a href="https://keepcoding.io/blog/lenguajes-programacion-interpretados-compilados/">(...)</a>
        </p>
      </article>

      <article>
        <div class="data">
          <span>Fecha:8 de julio de 2022</span>
          <span>Categoria:Desarrollo Web</span>
        </div>
        <h4>
          <a href="https://keepcoding.io/blog/disenar-un-spinner-basico-en-css/">Cómo diseñar un spinner básico en CSS</a>
        </h4>
        <p>
        Existen muchos elementos animados que son parte de nuestro día a día en la web moderna.
         Los elementos que nos comunican la idea de que un recurso está cargando son probablemente el elemento animado más común.
          Lo vemos cada vez que un vídeo se detiene y cada vez que nuestro internet falla. 
          Por ello, cada página web tiene una forma diferente de representar esta idea, sea cambiando el elemento que carga, su color o su velocidad. 
        En este post, te enseñaremos cómo diseñar un spinner básico en CSS para insertarlo en tu página web.
          <a href="https://keepcoding.io/blog/disenar-un-spinner-basico-en-css/">(...)</a>
        </p>
      </article>
      <article id="blog">
        <a href="blog_boton.php">Ir al blog</a>
      </article>
    </section>

    <!--Fin Articulos-->
  </section>

  <!-- inicio PIE DE PAGINA-->
  <div class="clearfix"></div>
  <footer id="footer">
    <div class="wrap">
      <div id="menu_footer">
        <h5>MENU</h5>
        <ul>
          <li><a href="#">INICIO</a></li>
          <li><a href="php/cerrar_sesion.php">SALIR</a></li>
          <li><a href="https://www.linkedin.com/in/sa%C3%BAl-marb%C3%A1-a92096237/">FORMACION</a></li>
          <li><a href="mailto: saul.marba.j@gmail.com?Subject=Interesado%20en%20el%20Blog">CONTACTO</a></li>
        </ul>
      </div>

      <div id="location">
        <h5>¿DONDE ESTAMOS? </h5>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d105018.20387856681!2d-58.607414883593734!3d-34.65927699999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc966bf151d67%3A0x255fef772508e89c!2sUTN.BA!5e0!3m2!1ses!2sar!4v1658700720149!5m2!1ses!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      </div>

      <div id="info">
        <h5>Desarrollado con</h5>
        <p>
          <img src="img/html5-badge-h-css3-graphics-multimedia-performance-semantics.png" alt="Creado con HTML y CSS" />
        </p>

        <h5>Optimizado para</h5>
        <p id="browsers">
          <a href="#">
            <img src="img/firefox-icon.png" alt="Firefox" title="Firefox" </a>
            <a href="#">
              <img src="img/chrome.png" alt="Chrome" title="Chrome" </a>
              <a href="#">
                <img src="img/Opera_256x256.png" alt="Opera" title="Opera" </a>
                <a href="#">
                  <img src="img/safari.png" alt="safari" title="safari" </a>
                  <a href="#">
                    <img src="img/android.png" alt="android" title="android" </a>
                    <a href="#">
                      <img src="img/ios.png" alt="ios" title="ios" </a>
        </p>

        <h5>AUTOR</h5>
        <p>&copy; Saúl Marbá</p>
      </div>
    </div>
  </footer>

  <!-- fin PIE DE PAGINA-->
</body>

</html>
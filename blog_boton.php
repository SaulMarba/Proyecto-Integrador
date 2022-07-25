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
      <h2>Bienvenidos al BLOG</h2>
      <div class="clearfix"></div>
      <article>
        
        </div>
        <h4>
          <a href="#" target="_blank">Blog para Desarrolladores Web</a>
        </h4>
        <p>
            A los desarrolladores web les fascina escribir, limpiar y enviar código a todas horas, a pesar de no ser precisamente un trabajo sencillo y que el aprendizaje es continuo. Por eso, en la mayoría de las ocasiones, convertirse en desarrollador web es algo vocacional.



            Por este motivo, a la mayoría de los web developers les gusta compartir su experiencia con otros. Y aunque, en este tema en particular, resulta complicado obtener información de expertos en tecnología en un blog, existen algunos que, sin duda, merece la pena leer.
            
            Si estás pensando en estudiar Desarrollo Web Full Stack, este artículo te va a interesar.
            <br>
            Los blogs imprescindibles para los que aún llevan la L en Desarrollo Web
        <br>
        <br>

 <b>A List Apart</b>
<br>
<br>
En este blog podrás profundizar en lenguajes de programación específicos como JavaScript, pero además, A List Apart cuenta con publicaciones de carácter informativo para todos aquellos que tienen curiosidad sobre la manera en la que se utilizan en la práctica los diferentes aspectos del desarrollo web.

<br>
<br>
<b>Super Dev Resources</b>
<br>
<br>
Super Dev Resources es el blog perfecto si acabas de comenzar un curso de Desarrollo Web Full Stack, aquí encontrarás recursos para desarrolladores, diseñadores y especialistas en marketing digital. Es de fácil lectura y tiene plantillas y herramientas para utilizar en la creación de sitios web. 
<br>
<br>

En este blog también hay consejos y trucos sobre cómo mejorar la usabilidad de un sitio web, la privacidad de los datos e incluso ciberseguridad. Pero lo mejor de este blog es que ofrece una visión que va más allá del desarrollo web, de cómo tu trabajo afectará al diseño y al marketing en un proyecto.

<br>
<br>

Los blogs imprescindibles para los que ya saben de Desarrollo Web
<br>
<br>
 <b>Blog de David Walsh</b>
<br>
<br>
El consultor David Walsh comparte su experiencia como ingeniero de software senior, además de como fundador del podcast de desarrollo web Script & Style. En su blog obtendrás consejos técnicos y procesos de investigación en el campo de los desarrolladores web. Las utilidades de Git esenciales, y sobre todo y lo más importante que logra este blog es eliminar esa particular sensación por parte de los desarrolladores web del síndrome del impostor.

<br>
<br>
<b>Webdesigner Depot</b> 
<br>
<br>
En Webdesigner Depot podrás encontrar además de artículos interesantes, software gratuito para que te resulte mucho más sencillo el proceso creativo de un sitio web. Si además no tienes demasiada experiencia en esto, aprenderás sobre cuáles son las necesidades a la hora de crear sitios web. También hay herramientas y tutoriales sobre cómo usar PHP, elegir entre Grid o Flexbox, etc.

<br>
<br>
¿Has empezado a trabajar como desarrollador web? Estos son los blogs que necesitas
‍<br>
<br>
<b>SixRevisions</b>
‍<br>
<br>
SixRevisions es un blog dirigido específicamente a desarrolladores interesados ​​en crear productos web de marketing. Encontrarás artículos que tratan temas muy interesantes, como el de cómo tomar las mejores decisiones al rediseñar un sitio web o las mejores prácticas para mejorar la velocidad de un site.

<br>
<br>
<b>Hacker Noon</b>
<br>
<br>
Los programadores de todo el mundo se encargan de contribuir con su contenido al blog de Hacker Noon. En él verás las últimas novedades sobre lo que está sucediendo en el sector tecnológico y lo que de verdad te interesa saber para convertirte en un desarrollador web de éxito (automatización con Python, componentes de React y consejos sobre cómo corregir automáticamente su propio código, etc). 

<br>
<br>
Y ahora que ya te haces una idea de dónde conseguir más información sobre el desarrollo web… ¿Estás listo para convertirte en uno? En este Blog queremos acabar con la brecha digital y por eso, te ofrecemos varias opciones para que nada frene tus ganas de comenzar el bootcamp de Desarrollo Web Full Stack. Nuestras becas y posibilidades de financiación te ayudarán a dar el paso definitivo. ¡Consúltanos!
        </p>
      </article>

      

      <article>
        
        <h4>
          <a href="#">¡Mantente informado!</a>
        </h4>
        <p>
        En este blog somos amantes de la tecnología, por lo cual te mantendremos siempre al día con lo ultimo en programación,si te interesa saber mas puedes revisar nuestros ultimos articulos, que se actualizan constantemente, y de manera gratuita.
        <br>
        Echa un vistazo haciendo click en el boton de "<b>IR AL INICIO</b>".
        </p>
      </article>
      <article id="blog">
        <a href="blog.php">Ir al INICIO</a>
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
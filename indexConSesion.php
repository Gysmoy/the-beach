<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recreo Ponceca</title>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!--FUENTE DE LETRA - EB Garamond-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&family=Roboto:wght@100;900&family=Tangerine&display=swap" rel="stylesheet">

    <!--codigo para que la página cargue rápido-->
    <link rel="preload" href="interfaz.css" as="style">
    <link href="interfaz.css" rel="stylesheet">

    <!--Icono-->  
    <link rel="shortcut icon" type="image/x-icon" href="images/LogoPaginaWeb.JPG">

</head>
<body>

  <!--BARRA DE NAVEGACIÓN-->
    <div>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="indexConSesion.html"> 
                <img src="/imagenes/logo.PNG" alt="" height="100"> 
              </a>
              
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="nosotrosConSesion.html" >NOSOTROS</a> 
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="reservarEventos.html">RESERVA DE EVENTOS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="delivery-Platos.html">PEDIR AHORA</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#contacto">CONTACTO</a>
                  </li>
                  <a href="miCuentaReservas.html">
                    <button type="button" class="btn btn-primary btn-lg tipoLetraBoton">MI CUENTA</button>
                  </a>
                  
                </ul>
              </div>
            </div>
          </nav>
    </div>

    <!--IMAGEN PRINCIPAL-->
    <header>
      <section class= "banner ">
        <div class= "contenido-banner container">
          <divc class="row">
            <div class="col-5">
              <h2>BIENVENIDO AL RECREO CAMPESTRE PONCECA ECOTURIMOS</h2>
            </div>
          </div>
        </div>
      </section>
    </header>

    <!--PRESENTACIÓN-->
    <main>
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-12 col-sm-12">
            <h2 class="formatoTitulo">
              BIENVENIDOS A PONCECA ECOTURISMO
            </h2>
            <p>
              Ponceca Ecoturismo, cuenta con una moderna infraestructura como restaurantes con amplias áreas verdes y una variada carta de platos típicos nacionales. Además de diversiones para adultos y niños como canchas de fútbol, vóley, columpio y tobogán. <br>
              Además de ofrecerte un lugar maravilloso para descansar y pasar días de relajación, contamos con un exquisito restaurante y zonas ideales para la organización de tus eventos, sean éstos reuniones sociales o corporativas.
            </p>
          </div>

          <div class="col-lg col-md-12 col-sm-12 imagen">
          </div>
        </div>
      </div>
    </main>

    <!--ACTIVIDADES-->
    <article>
      <h2 class="formatoTitulo">
        PONCECA ~ ACTIVIDADES
      </h2>
      
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/imagenes/reserva de evento.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="formatoLetraImagen">RESERVA DE EVENTOS</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/imagenes/RESEVA DE MESA.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="formatoLetraImagen">RESERVAR MESA</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/imagenes/campo recreativo.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="formatoLetraImagen">CAMPO RECREATIVO PARA NIÑOS</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/imagenes/deliveru.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="formatoLetraImagen">PEDIR AHORA</h5>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <br>
      <br>
    </article>

    <!--CONTACTO-->
    <section id="contacto">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 col-md-12 col-sm-12">
            <h2 class="formatoTitulo">
              CONTACTO
            </h2>
            <p>
              Estamos ubicados en Av. Santa Cruz 616 Andahuaylas. <br>

              Si tienes preguntas o comentarios, no dudes en comunicarte con nosotros.
            </p>
            <div class="row">
              <div class="col-2">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAAAXNSR0IArs4c6QAABQhJREFUeF7tm4+xDTEUh8+rABWgAlSAClABKkAFqAAVoAJUgAroABWgAuab2cxkzpxskt1972T3nsyY8e7dm5P8vpw/Se49k2iuCpy5Wg/jEgCcF0EAOCEA/0Tkj4h8n+b8UUS+Zn87S+Fj/iI9AABW+yki70TkpY8EvlZ7ADwSkVfTcJ9NovWMvgQg9QGIFyLyvqfTvT/bCgDx36rJPu6EUAOQuv8iIg+mcLV3favjbwFgiZ867oXA5+6IyDURuT/9/5IxSrwBCClfVCey1wdqAObEXwMhffayiDyd/mkQJOy7R4cwB6BF/C0g0AcgSMT31ErGE24dORyVAJTEJ+TQdD7gtSXhSEcOkvBz9SI5AU84ZLMA3BSRb8Zsc4HnALGSrZbvA4jtn0QEcVsgbAF3SIAWADZIOhRYAvRCsKogAFDS6mSrx0Aouj6kgisHZQH4PcXklvhegkAFg4h5K5WhJFu9ryAnIHqemNmoEaIO1SwAWqgllZK1Yuf2AVbFo/PBIb3AEpewcDtbZiRAK1anRywv+DXV+nq1srLZB1B65jZ4TidbywsIQ4A4TFsLoCcEadGsz2rYOhcQql4fRn0R8z6ACT7JJlmaNDvZD5VqqaaV9jYd5zUkKifsHqZZHqBjbyn56WSNKL3loobI8TQhKjX+/zn7W7+/exAWAL3qKBHZjepG4syrlCXhgTgPyNTo80r2t37/cInYAsBB2Q+ltpX82HA9zJ7jGBl4va1WddXe77U31POlEpNVfyMbqRVadHjQq3eoiY46mBIAysR0+cLYS8mPkHC1AmrUuQ8xrhIA6zyI2Mwqz5uumHifcKWfG2KyIw5ibperV/ebaQOVz4N8QbjKkzG1O0cR0RoUmAOgwxDdWcnYeq6lHF17x9wwvfEfqZ3zaC8oVTrWCSqvAcIKR1vcMY+vbsMIawAsodgT6ONj69wG84iPh5DEE4it75gbpjnuIzUAjFyXpKVrQspSVr11yY74vEdftbOclvA1rqKdI2sBoOt9TJSuCUt3u53D6j7S6O1/mOdbADBYXW7ymlUVpYkRdjhTsrwhn/x53zEPI3RpIK0A0qrXZ/hz4YISFRAcuOWbtTSWtXfMw4vbMsAeAIQXYrgWE+/gIG6uEcZIvukoGTD68r73jrllfsM/0wOAybBDJv7r0LLV1wnXXPAML7Y1wF4A9MEqZvVqCFt9ndCCcLhj6ARjCYDkCZSVVmxPXzVfenfbc8e8y1WfD3opAPogJwBBJ+bUP7mB27Seg7kIQQuWlFWi5t0AKf0aZs4rIgkvED99hCoHEPkljtUdVVT6wlb6qgv3vCcpPgKtCUGWwAjJBszKDb18T+JIYmsA+U6YWn8piJMQ/zw8QK/y9EsYPKMWnqwdcq/X7O758/IASwhgpJ8nUUGxqaNRRf2dNniEr8P/LGmrMnR3q23EAV+kB4w4f/cxBQBnBAEgADgr4Gw+PCAAOCvgbD48IAA4K+BsPjwgADgr4Gw+PCAAOCvgbD48IAA4K+BsPjwgADgr4Gw+PCAAOCvgbD48IAA4K+BsPjwgADgr4Gw+PCAAOCvgbD48IAA4K+BsPjwgADgr4Gw+PCAAOCvgbD48IAA4K+BsPjwgADgr4Gw+PCAAOCvgbD48IAA4K+BsPjwgADgr4Gw+PCAAOCvgbD48IAA4K+BsPjwgADgr4Gw+PCAAOCvgbD48IAA4K+BsPjzAGcB/OzXmYQf2JLwAAAAASUVORK5CYII="/>
              </div>
              <div class="col-10">
                <p>
                  Cel: 960719103 <br>
                </p>
              </div>

              <div class="col-2">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAAAXNSR0IArs4c6QAAA0RJREFUeF7tmuGN1DAUhOcqgA6ACoAO6ACoAK4DqACoADoAKgA6oAOgg6MCoALQoERCkZ17FzY3UfLl10pr+yXzeexZb87EFVXgLFqd4gJAeBIAAABhBcLlcQAAwgqEy+OAjQK4Lem1pHuS/Dl5XUj6Kum5JH/e1dVygAX/Iunmxp70p6T7e4PQAvBR0sONiT/ezidJjzZ6b4tuqwXgxwZn//hwXoLuLHrSjXZqAfg9udf0Rr21+zkpygqAd5LOT1q1PthbSU83NiHqd19oWQHgYZxCHl/jBugg8GFIYdPHSDuyIGu9SRWAR3QKMYTP9eEXtXwwiN9LYYcFMKr5UtKrRdJe3umFJI8/dx0egMVxVPW+YFec4vJs93pfiZiHA+DZ7pk5vRwJvSR5f/ify7+2vd63fnG3ah8OgB/Y67Jn/Y2J0naAjwiclJZcTjg+8piu978GN3i/OXwMHWecZ6gh3G0ovSSqtiKmh/42iD+e+wBgIrjFftKAUI2qcxHzfSP3A6AhtpeON50laS6q9iKml5xnnaUMAJ3F3Zunl6Rbje9bUbUXMb8PS05vMwfAzO7qzdNLUuv0dIyq7t6LmD7dtJvm4iwACvHGM74XVd29FzEv+9HlvgAoAHCTXlSddv83YlaGBkBFpaHNXFRtRczK0ACoqFSIqq2IWRkaABWVZqKqv+pFzMrQAKiotGIbAKwobmVoAFRUWrENAFYUtzI0ACoqrdgGACuKWxn6cAB8LjP946Ui1HW08cFd+l3Vkz4nryaeVM6rD9Z7OddHw1tzgc+QfAS+qzeke39w2+b+w8UP3Drvvzrq5T287HhC+Nf0rsS3JLt6w2A541xPAOS0/1sZAAAIKxAujwMAEFYgXB4HACCsQLg8DgBAWIFweRwAgLAC4fI4AABhBcLlcQAAwgqEy+MAAIQVCJfHAQAIKxAujwMAEFYgXB4HACCsQLg8DgBAWIFweRwAgLAC4fI4AABhBcLlcQAAwgqEy+MAAIQVCJfHAQAIKxAujwMAEFYgXB4HACCsQLg8DgBAWIFweRwAgLAC4fI4AABhBcLlcQAAwgqEy+MAAIQVCJfHAQAIKxAujwMAEFYgXB4HACCsQLj8H0vxf2G6KWOGAAAAAElFTkSuQmCC"/>
              </div>
              <div class="col-10">
                <p>
                  ponceca20@gmail.com
                </p>
              </div>
            </div>

            <h2 class="formatoTitulo">
              HORARIO
            </h2>
            <p>
              Lunes a domingo de 9:00 am hasta 05:00 pm.
            </p>

          </div>

          <div class="col-lg col-md col-sm ">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10965.510245792411!2d-73.4153834980756!3d-13.664249845671778!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x239e7a006870176b!2sPONCECA%20COMPLEJO%20RECREACIONAL!5e0!3m2!1ses-419!2spe!4v1656277625261!5m2!1ses-419!2spe" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <br>
        <br>
      </div>
    </section>

    <footer class="footer">
        <p>Recreo campestre Ponceca Ecoturismo. Todos los derechos reservados 2022.</p> 
    </footer>

    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</body>
</html>
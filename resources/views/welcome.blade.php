<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>GLOMA S.R.L</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">

    
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
        padding-top: 3rem;
        padding-bottom: 3rem;
        color: #5a5a5a;
        }


        /* CUSTOMIZE THE CAROUSEL
        -------------------------------------------------- */

        /* Carousel base class */
        .carousel {
        margin-bottom: 4rem;
        }
        /* Since positioning the image, we need to help out the caption */
        .carousel-caption {
        bottom: 3rem;
        z-index: 10;
        }

        /* Declare heights because of positioning of img element */
        .carousel-item {
        height: 32rem;
        }


        /* MARKETING CONTENT
        -------------------------------------------------- */

        /* Center align the text within the three columns below the carousel */
        .marketing .col-lg-4 {
        margin-bottom: 1.5rem;
        text-align: center;
        }
        .marketing .col-lg-4 p {
        margin-right: .75rem;
        margin-left: .75rem;
        }


        /* Featurettes
        ------------------------- */

        .featurette-divider {
        margin: 5rem 0; /* Space out the Bootstrap <hr> more */
        }

        /* Thin out the marketing headings */

        /* RESPONSIVE CSS
        -------------------------------------------------- */

        @media (min-width: 40em) {
        /* Bump up size of carousel content */
        .carousel-caption p {
            margin-bottom: 1.25rem;
            font-size: 1.25rem;
            line-height: 1.4;
        }

        .featurette-heading {
            font-size: 50px;
        }
        }

        @media (min-width: 62em) {
        .featurette-heading {
            margin-top: 7rem;
        }
        }

            body {
        padding-top: 3rem;
        padding-bottom: 3rem;
        color: #5a5a5a;
        }


        /* CUSTOMIZE THE CAROUSEL
        -------------------------------------------------- */

        /* Carousel base class */
        .carousel {
        margin-bottom: 4rem;
        }
        /* Since positioning the image, we need to help out the caption */
        .carousel-caption {
        bottom: 3rem;
        z-index: 10;
        }

        /* Declare heights because of positioning of img element */
        .carousel-item {
        height: 32rem;
        }


        /* MARKETING CONTENT
        -------------------------------------------------- */

        /* Center align the text within the three columns below the carousel */
        .marketing .col-lg-4 {
        margin-bottom: 1.5rem;
        text-align: center;
        }
        /* rtl:begin:ignore */
        .marketing .col-lg-4 p {
        margin-right: .75rem;
        margin-left: .75rem;
        }
        /* rtl:end:ignore */


        /* Featurettes
        ------------------------- */

        .featurette-divider {
        margin: 5rem 0; /* Space out the Bootstrap <hr> more */
        }

        /* Thin out the marketing headings */
        /* rtl:begin:remove */
        .featurette-heading {
        letter-spacing: -.05rem;
        }

        /* rtl:end:remove */

        /* RESPONSIVE CSS
        -------------------------------------------------- */

        @media (min-width: 40em) {
        /* Bump up size of carousel content */
        .carousel-caption p {
            margin-bottom: 1.25rem;
            font-size: 1.25rem;
            line-height: 1.4;
        }

        .featurette-heading {
            font-size: 50px;
        }
        }

        @media (min-width: 62em) {
        .featurette-heading {
            margin-top: 7rem;
        }
        }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">GLOMA S.R.L</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
        <nav class="nav nav-masthead justify-content-center">
            @if (Route::has('login'))
              @auth
              <a href="{{ route('/home') }}" class="nav-link fw-bold py-1 px-0" href="#">Casa</a>
              @else
              <a href="{{ route('login') }}" class="nav-link fw-bold py-1 px-20" href="#">Ingresa</a>
              @if (Route::has('register'))
              <a href ="{{ route('register') }}" class="nav-link fw-bold py-1 px-0" href="#">Registrate</a>
              @endif
              @endauth
           @endif
        </nav>
      </div>
    </div>
  </nav>
</header>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img" width="100%" height="100%" src="https://concepto.de/wp-content/uploads/2020/03/musica-e1584123209397.jpg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Todo tipo de transporte</h1>
            <p>Llevamos mercaderia pesada y tambien ligera</p>
            <p><a class="btn btn-lg btn-primary" href="#">Registrate</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="https://img.freepik.com/fotos-premium/cerrar-tocar-guitarra-electrica-concierto-rock_713163-1885.jpg?w=2000" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="true"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1>Envia tu mercaderia con GLOMA</h1>
            <p>Envia con nosotros de una Forma segura y confiable al 100%</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="https://img.chilango.com/2021/08/senad-palic-3bgcqIiFdRk-unsplash-1024x768.jpeg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Contactanos al numero *******</h1>
            <p>Ahora contamos con mas de 5 caminones a tu disposicion y en buen estado</p>
            <p><a class="btn btn-lg btn-primary" href="#">Llamanos</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://www.google.com/imgres?imgurl=https%3A%2F%2Flatin-america.internationalcamiones.com%2F-%2Fmedia%2FProject%2FInternational-Trucks%2FInternational-Trucks%2FLatinAmerica%2FCamiones%2FSERIE-LT%2F2023%2FSERIE-LT-Card.jpg%3Fh%3D261%26iar%3D0%26w%3D400%26rev%3D9182375979004636845f5ab430d1e5ac%26hash%3DDF3C0515C45EE17C8CEFB64E57E754A9&tbnid=1VPbFskbF-PRvM&vet=12ahUKEwj2lZKd1KL_AhWkDtQKHS8MBcsQMygXegUIARCQAg..i&imgrefurl=https%3A%2F%2Flatin-america.internationalcamiones.com%2Fcamiones&docid=OIedzXZGjuVc6M&w=400&h=261&q=camion&ved=2ahUKEwj2lZKd1KL_AhWkDtQKHS8MBcsQMygXegUIARCQAg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>

        <h2 class="fw-normal">Promicion 20% de descuento </h2>
        <p>Por 10 viajes llevate un viaje con el 20% de descuento</p>
        <p><a class="btn btn-secondary" href="#">Ver más &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fstatic.retail.autofact.cl%2Fblog%2Fc_url_original.4kmjx7kgtkmztx.jpg&tbnid=HdqzgsGRgdTvHM&vet=12ahUKEwj2lZKd1KL_AhWkDtQKHS8MBcsQMygIegUIARDyAQ..i&imgrefurl=https%3A%2F%2Fwww.autofact.pe%2Fblog%2Fcomprar-auto%2Fcaracteristicas%2Ftipos-camiones&docid=NUttoG2Tl--jlM&w=1280&h=854&q=camion&ved=2ahUKEwj2lZKd1KL_AhWkDtQKHS8MBcsQMygIegUIARDyAQ" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>

        <h2 class="fw-normal">Promocion por tonelada </h2>
        <p>Envie con nosotros y obten un 10% de descuento </p>
        <p><a class="btn btn-secondary" href="#">Ver más &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="/https://musicopolix.com/blog/wp-content/uploads/2021/12/cuales-son-las-mejores-marcas-de-baterias-acusticas-portada.jpg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>

        <h2 class="fw-normal">Camiones</h2>
        <p>Tenemos 5 camiones a su dispocion </p>
        <p><a class="btn btn-secondary" href="#">Ver más &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Descuentos en los viajes por el uso de nuestra pagina web <span class="text-muted">¡INTENTALO!</span></h2>
        <p class="lead">Por el debut de nuestra pagina web otorgamos un 10% de descuento en nuestros transportes</p>
      </div>
      <div class="col-md-5">
        <image src="" height="500" width="500"/>

      </div>
    </div>

    <hr class="featurette-divider">


    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2020–2023 GLOMA S.R.L &middot; <a href="#">Privacidad</a> &middot; <a href="#">Terminos y condiciones</a></p>
  </footer>
</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>

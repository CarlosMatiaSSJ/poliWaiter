<link rel="stylesheet" href="{{ asset('css/stylesLanding.css') }}">
<header id="header">
    <!--  Brand Logo  -->
    <div class="navbar_img shrink-0 flex items-center">
        <a href="{{ route('dashboard') }}">
          <img src="{{ asset('imgs/logoAzul.png') }}" alt="Logo" width="">
      </a>
  </div>
    

    <!--  Menus  -->
    <nav id="nav-bar" class="navbar">
      
      <ul class="menu">
            <li><a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a></li>
            <li><a class="nav-link" href="{{ route('register') }}">Registrarme</a></li>
        </ul>
        <ul class="social-menu">
            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
        </ul>
    </nav>
</header>

<!-- Hero Section -->
<div class="hero">
    <div class="image">
        <img src="{{ asset('imgs/comidaC.png') }}" alt="Comida Corrida">
    </div>
    <div class="hero-text">
        <h1>Más tiempo para ti, menos tiempo en la fila con Poli-Waiter.</h1>
<p>Una nueva forma de disfrutar tus comidas.</p>
        <a href="#featured" class="btn">Ver más</a>
    </div>
</div>

<!-- Featured Section -->
<section id="featured">
    <div class="title title-left">
        <span class="line"></span>
        <h3>¡Adiós filas!</h3>
    </div>
    <div class="wrapper">
        <div class="image">
            <img src="{{ asset('imgs/ketoSalad.png') }}" alt="Ensalada con huevo">
        </div>
        <div class="text">
            <h2>Fácil, rápido y totalmente remoto</h2>
            <p>Conoce todas las funcionalidades que Poli-Waiter tiene para ti.</p>
            <a href="#" class=btn>Comprar</a>
        </div>
    </div>
</section>


<!-- About Section -->
<section id="about">
    <div class="title title-left">
        <span class="line"></span>
        <h3>Bienvenido a Poli-Waiter: 
        </h3>
    </div>
    <div class="wrapper">
        <div class="text">
            <p>¿Cansado de hacer interminables filas en la cafetería para ordenar tu comida? 
            </br>¡Poli-Waiter ha llegado para cambiar esa experiencia! 
          </br>Ahora puedes olvidarte de las largas esperas y disfrutar al máximo de tu tiempo mientras te deleitas con deliciosas comidas preparadas frescas y a tu gusto.</p>
        </div>
        <div class="video-wrapper">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/YpjTBOm2xt4"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact">
    <div class="wrapper">
        <div class="contact-wrapper">
            <h4>Obten más informes sobre Poli-Waiter</h4>
            <div class="wrapper">
                <ul class="social-menu">
                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                </ul>
                <a class="contact-footer contact-tel" href="#"><i class="fa fa-phone"
                        aria-hidden="true"></i>(427)-226-9309</a>
                <a class="contact-footer contact-email" href="#"><i class="fa fa-envelope-o"
                        aria-hidden="true"></i>customerservice@poliwaiter.com</a>
            </div>
        </div>
        <div class="copy-wrapper">
            <h6><i class="fa fa-copyright" aria-hidden="true"></i> Proyecto Integrador</h6>
        </div>
    </div>
</section>

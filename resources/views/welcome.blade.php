<link rel="stylesheet" href="{{asset('css/stylesLanding.css')}}">
<header id="header">
  <!--  Brand Logo  -->
  <a class="nav-brand" href="" target="_blank">
    <img id="header-img" src="{{asset('imgs/logoAzul.png')}}" alt="Pixel Skincare">
  </a>
  
  <!--  Toggle Menu for Mobile  -->
  
  <input type="checkbox" id="toggle-menu" role="button">
  <label for="toggle-menu" class="toggle-menu">Menu</label>
  
  <!--  Menus  -->
  <nav id="nav-bar" class="navbar">
    <ul class="menu">
      <li><a class="nav-link" href="{{route('login')}}">Iniciar Sesión</a></li>
      <li><a class="nav-link" href="{{route('register')}}">Registrarme</a></li>

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
    <img src="{{asset('imgs/comidaC.png')}}" alt="Pixel Skincare">
  </div>
  <div class="hero-text">
    <h1>Lorem ipsum dolor sit.</br> Lorem ipsum dolor sit.</h1>
    <a href="#featured" class="btn">Ver más</a>
  </div>
</div>

<!-- Featured Section -->
<section id="featured">
  <div class="title title-left">
    <span class="line"></span><h3>Lorem, ipsum dolor.</h3>
  </div>
  <div class="wrapper">
    <div class="image">
      <img src="{{asset('imgs/ketoSalad.png')}}" alt="Pixel Facial Cream">
    </div>
    <div class="text">
      <h2>Lorem, ipsum dolor.</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit expedita perferendis quos.</p>
      <a href="#" class=btn>Comprar</a>
    </div>
  </div>
</section>


<!-- About Section -->
<section id="about">
  <div class="title title-left">
    <span class="line"></span><h3>Lorem, ipsum.</h3>
  </div>
  <div class="wrapper">
    <div class="text">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi unde quas ex?</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis voluptatem non modi hic corrupti debitis rerum blanditiis doloribus ab.</p>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia repellat, quasi atque velit aliquam assumenda ipsam fugit consequuntur rerum deserunt inventore?</p>
    </div>
    <div class="video-wrapper">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/YpjTBOm2xt4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
        <a class="contact-footer contact-tel" href="#"><i class="fa fa-phone" aria-hidden="true"></i>(427)226-9309</a>
        <a class="contact-footer contact-email" href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>customerservice@poliwaiter.com</a>
      </div>
    </div>
    <div class="copy-wrapper">
      <h6><i class="fa fa-copyright" aria-hidden="true"></i> Proyecto Integrador</h6>
    </div>
  </div>
</section>
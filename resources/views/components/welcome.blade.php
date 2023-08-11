{{-- Añadido de proyecto anterior --}}
<head>
    
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <meta charset="UTF-8">
</head>
{{-- Fin --}}


<div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700" >
    <div class="" style="display:flex; justify-content:center">
        <h1 class="mt-8 text-2xl font-medium text-gray-900 dark:text-white">
            ¡Conoce Poli-Waiter!
        </h1>        
    </div>
    
    <div class="" style="display:flex; justify-content:center">
        
        <img src="{{asset('imgs/logoAzul.png')}}" class="block h-40 w-auto" alt="">
        
    </div>
    

    <p class="mt-6 text-gray-500 dark:text-gray-400 leading-relaxed">
        Poli-Waiter te mostrará una completa carta con todos los alimentos disponibles, 
        tomará tu pedido y lo enviará a los cocineros, te permitirá pagar a través de una pasarela de pago segura, 
        encargada de realizar los cobros para que puedas acudir a la cafetería sólo el tiempo necesario para recogerlo.
        
    </p>
</div>



{{-- Añadido de proyecto anterior --}}
<div id="div1" class="bg-gray-200 dark:bg-gray-800 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8" >
    <body  background="{{asset('imgs/fondo.avif')}}">
        <div id="div2" class="container justify-content-center mt-3" style="margin:0px auto">
            <div class="row">
                
                <div class="col"> 
                    <h3 class="row justify-content-md-center"></h3>
                    <div class="card" style=" display:flex; justify-content:center;">
                        <img src="{{asset('imgs\index4.png')}}" class="card-img-top img-fluid" alt="...">
                    </div>
                    
                        
                        <div  class="contenedor">
                            <div class="cards">
                                <figure >
                                    <img src="imgs/comida.avif" >
                                    <div class="capa">
                                        <h3>COMIDA</h3>
                                            <p>
                                                Descubre nuestro amplio menú de comida recién preparada a tu elección, diseñada especialmente para satisfacer tus gustos y brindarte una experiencia culinaria nutritiva con auténtico sabor casero.
                                            </p>
                                    </div>  
                                </figure>
                            </div>
                        
                            <div class="cards">
                                <figure>
                                    <img src="imgs/bebidas.jpg" >
                                    <div class="capa">
                                        <h3>BEBIDAS</h3>
                                            <p>
                                                AExplora nuestra extensa selección de bebidas, siempre refrescantes y cuidadosamente seleccionadas para complementar tus platillos de manera perfecta. Descubre el acompañamiento ideal para tus alimentos.
                                            </p>
                                    </div>  
                                </figure>
                            </div>
                            <div class="cards">
                                <figure>
                                    <img src="imgs/snacks.jpg" >
                                    <div class="capa">
                                        <h3>SNACKS</h3>
                                            <p>
                                                Aquí encontrarás una amplia variedad de snacks irresistibles para satisfacer tus antojos en cualquier momento. Conoce nuestra selección y encuentra tu snack favorito, siempre listo para ser disfrutado.
                                            </p>
                                    </div>  
                                </figure>
                            </div>
                    
    
                        </div>
    {{--
                        <div class="card"  style=" display:flex; justify-content:center;">
                            <img src="{{asset('imgs\recommended.png')}}" class="card-img-top img-fluid" alt="..."  style=" display:flex; justify-content:center;">
                        </div>
    
                        <section id="galeria" class="container">
    
                            <div class="row">
                                <div class="col-lg-4">
                                    <img src="{{asset('imgs\burrito.jpg')}}" alt="Galeria Imagen">
                                    <div class="card">
                                        <div class="card-body text-center">     
                                            <h5 class="text-2xl font-medium text-gray-900 dark:text-white" >Burritos</h5>
                                            <a href="{{asset('comprarBurritos')}}"><div class="d-grid gap-2"><button class="boton">Comprar</button></div></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <img src="{{asset('imgs\enchiladas.jpg')}}" alt="Galeria Imagen">
                                    <div class="card">
                                        <div class="card-body text-center">     
                                            <h5 class="text-2xl font-medium text-gray-900 dark:text-white" >Enchiladas</h5>
                                            <a href="{{asset('comprarEnchiladas')}}"><div class="d-grid gap-2"><button class="boton">Comprar</button></div></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <img src="{{asset('imgs\molletes.png')}}" alt="Galeria Imagen">
                                    <div class="card">
                                        <div class="card-body text-center">     
                                            <h5 class="text-2xl font-medium text-gray-900 dark:text-white" >Molletes</h5>
                                            <a href="{{asset('comprarBurritos')}}"><div class="d-grid gap-2"><button class="boton">Comprar</button></div></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <img src="{{asset('imgs\papas-francesa.jpg')}}" alt="Galeria Imagen">
                                    <div class="card">
                                        <div class="card-body text-center">     
                                            <h5 class="text-2xl font-medium text-gray-900 dark:text-white" >Papas a la Francesa</h5>
                                            <a href="{{asset('comprarBurritos')}}"><div class="d-grid gap-2"><button class="boton">Comprar</button></div></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <img src="{{asset('imgs\aguaJamaica.jpg')}}" alt="Galeria Imagen">
                                    <div class="card">
                                        <div class="card-body text-center">     
                                            <h5 class="text-2xl font-medium text-gray-900 dark:text-white" >Agua de Jamaica</h5>
                                            <a href="{{asset('comprarBurritos')}}"><div class="d-grid gap-2"><button class="boton">Comprar</button></div></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <img src="{{asset('imgs\tacos.jpeg')}}" alt="Galeria Imagen">
                                    <div class="card">
                                        <div class="card-body text-center">     
                                            <h5 class="text-2xl font-medium text-gray-900 dark:text-white" >Tacos</h5>
                                            <a href="{{asset('comprarTacos')}}"><div class="d-grid gap-2"><button class="boton">Comprar</button></div></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                        </section>
    
    --}}
    
    
    
    
    
    
    
                    
                </div>
            </div>
        </div>                     
    </body>
</div>

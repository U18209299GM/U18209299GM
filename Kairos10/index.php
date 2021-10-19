<?php
    $pionero1 = "Alan Turinig";
    $fecha1 = 1936;
    $pionero2 = "John McCarthy";
    $pionero3 = "Marvin Minsky";
    $pionero4 = "Claude Shannon";
    $fecha2 = 1956;
    $fecha3 = 1990;
    $arreglo = array("auditiva","visual","tactil");
    $fechaMB = "26 de Noviembre";
    $correo = "U182092996@utp.edu.pe";
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Avance 4 TPW</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-jump">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- header 
    ================================================== -->
    <header class="s-header">

        <div class="row">
            <div class="header-logo">
                <a class="site-logo" href="index.html">
                    <img src="images/imagen.jpg" alt="Homepage">
                </a>
            </div>
    
            <nav class="header-nav-wrap">
                <ul class="header-main-nav">
                    <li class="current"><a class="smoothscroll" href="#home" title="intro">Introducción</a></li>
                    <li><a class="smoothscroll" href="#about" title="about">Surgimiento</a></li>
                    <li><a class="smoothscroll" href="#features" title="features">Objetivos</a></li>
                    <li><a class="smoothscroll" href="#pricing" title="pricing">Se encuentra</a></li>
                    <li><a class="smoothscroll" href="#download" title="download">Riesgos</a></li>	
                </ul>
    
            </nav> <!-- end header-nav-wrap -->
    
            <a class="header-menu-toggle" href="#"><span>Menu</span></a>
        </div>

    </header> <!-- end header -->


    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="images/hero-bg.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <div class="home-content__left">
                    <h1>
                    LA INTELIGENCIA<br>
                    ARTIFICIAL
                    </h1>
    
                    <h3>
                    En este espacio hablaremos sobre la inteligencia artificial,
                    sobre sus origenes, como nació esta idea, donde lo podemos 
                    encontrar y sobre todo, los riesgos que presenta.
                    </h3>

                    <h5 style="color:white">
                    La inteligencia artifical (IA), se presenta aun más en 
                    nuestras vidas, podemos definirlo como una combinación de 
                    algoritmos, que intentan simular las acciones humanas y mas allá.
                    Abierto a muchos campos innovando soluciones eficacez, como los 
                    servicios de atención al cliente, chatbots. Estos por 
                    estudios de la "Consultora Gartner" indican que mas de un 80% de
                    la población hara uso de estas para diferentes actividades.
                    Tiene como objetivo llegar a construir máquinas capaces de 
                    interpretar el conocimiento humano y mejorar según sus 
                    capacidades, superar la capacidad mental del ser humano en 
                    razonamiento, reconocimiento, creatividad, emociones, etc.
                    </h5>
    
                </div> <!-- end home-content__left-->

                <div class="home-content__right">
                    <img src="images/imagen2.jpg">
                </div> <!-- end home-content__right -->

            </div> <!-- end home-content__main -->

            <ul class="home-content__social">
                <li><a href="#0">Facebook</a></li>
                <li><a href="#0">twitter</a></li>
                <li><a href="#0">Instagram</a></li>
            </ul>

        </div> <!-- end home-content -->

        <a href="#about" class="home-scroll smoothscroll">
            <span class="home-scroll__text">Scroll</span>
            <span class="home-scroll__icon"></span>
        </a> 

    </section> <!-- end s-home -->


    <!-- about
    ================================================== -->
    <section id="about" class="s-about target-section">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h1 class="display-1">
                    ¿Como surgió la idea de la Inteligencia Artificial?
                </h1>
                <p class="lead">
                    <?php echo $pionero1; ?> fue el pinero de la IA, ya que en
                    <?php echo $fecha1; ?> puso la primera piedra, publicó el 
                    artículo "Números Calculables" fue la primera noción a IA. Pero 
                    también podemos decir que el concepto real fue definido en
                    <?php echo $fecha2; ?> por los científicos <?php echo $pionero2; ?>
                    , <?php echo $pionero3; ?> y <?php echo $pionero4; ?>, definiendolo 
                    como "La ciencia e ingenio de hacer máquinas inteligentes, especialmente
                     programas de cálculo inteligente". A partir de <?php echo $fecha3; ?>
                     cuando las grandes compañias empezara a utilzar este nuevo tipo de 
                     tecnología, pasado 7 años despues se creo Deep blue por IBM, un
                     ordenador capaz de superar las habilidades humanas en el ajedrez, 
                     provocando la creación de películas sobre el futuro tecnologíco donde 
                     la inteligencia artificial era el protagonista.
                </p>
            </div>
        </div> <!-- end section-header -->

        <div class="row wide about-desc" data-aos="fade-up">

            <div class="col-full slick-slider about-desc__slider">

                <div class="about-desc__slide">
                    <h3 class="item-title">Maquínas Reactivas</h3>

                    <p>
                    Diseñadas para la evaluación disponible en el entorno
                    y desarrollo de problemas inmediatos, analiza un 
                    momento determinado, construye soluciones posibles 
                    y elige la mas eficiente.
                    </p>
                </div>  <!-- end about-desc__slide -->

                <div class="about-desc__slide">
                    <h3 class="item-title">Máquinas con Memoria Limitada</h3>

                    <p>
                    Tecnología que usa la información obtenida a partir 
                    de una base de datos, teniendo la opotunidad de 
                    registrar la información de su entorno.
                    </p>
                </div>  <!-- end about-desc__slide -->

                <div class="about-desc__slide">
                    <h3 class="item-title">Máquinas con Teoría de la Mente</h3>

                    <p>
                    A pesar de encontrarse en pleno desarrollo, se espera 
                    que las futuras máquinas comprendan tanto el 
                    pensamiento como los sentimientos humanos, tomando 
                    decisiones a partir de ello, como el robot Sophia en 1996. 
                    </p>
                </div>  <!-- end about-desc__slide -->

                <div class="about-desc__slide">
                    <h3 class="item-title">Maquinas con Autoconciencia</h3>

                    <p>
                    Son aquellas capaces de captar percepciones, pensamientos 
                    y actitudes autoconcientes, en otras palabras, una máquina 
                    es capaz de percibir, sentir y actuar como un ser 
                    humano.
                    </p>
                </div>  <!-- end about-desc__slide -->

            </div> <!-- end about-desc__slider -->
            
        </div> <!-- end about-desc -->

    </section> <!-- end s-about -->


    <!-- about-how
    ================================================== -->
    <section id="about-how" class="s-about-how">

        <div class="row">
           <div class="col-full video-bg" data-aos="fade-up">

                <div class="shadow-overlay"></div>

                <a class="btn-video" href="https://www.youtube.com/watch?v=gSY9cqYmecM" data-lity>
                    <span class="video-icon"></span>
                </a>
           </div> <!-- end video-bg -->
        </div>

        <div class="row process-wrap">

            <h2 class="display-2 text-center" data-aos="fade-up">Caracteristicas</h2>

            <div class="process" data-aos="fade-up">
                <div class="process__steps block-1-2 block-tab-full group">

                    <div class="col-block step">
                        <h3 class="item-title">Reacción ante la información 
                            disponible.
                        </h3>
                    </div>

                    <div class="col-block step">
                        <h3 class="item-title">Memoria y aprendizaje a partir 
                            de experiencias.
                        </h3>
                    </div>

                    <div class="col-block step">
                        <h3 class="item-title">Capacidad para resolver problemas 
                            específicos.
                        </h3>
                    </div>
                    
                    <div class="col-block step">
                        <h3 class="item-title">Capacidad percepción sensorial
                        (<?php echo $arreglo[0]; ?>, <?php echo $arreglo[1]; ?> y 
                        <?php echo $arreglo[2]; ?>).
                        </h3>
                    </div>

                    <div class="col-block step">
                        <h3 class="item-title">Capacidad de gestión e 
                            infraestructura coherente y clara.
                        </h3>
                    </div>

                    <div class="col-block step">
                        <h3 class="item-title">Carácter medible para cuantificar 
                            el rendimiento en inversiones futuras.
                        </h3>
                    </div>

                </div> <!-- end process__steps -->
           </div> <!-- end process -->
        </div> <!-- end about-how -->

    </section> <!-- end s-about-how -->


    <!-- features
    ================================================== -->
    <section id="features" class="s-features target-section">

        <div class="row section-header has-bottom-sep" data-aos="fade-up">
            <div class="col-full">
                <h1 class="display-1">
                    Objetivos de la Inteligencia Artificial.
                </h1>
            </div>
        </div> <!-- end section-header -->

        <div class="row features block-1-3 block-m-1-2">

            <div class="col-block item-feature" data-aos="fade-up">
                <div class="item-feature__icon">
                    <i class="icon-shield"></i>
                </div>
                <div class="item-feature__text">
                    <h3 class="item-title">Automatización inteligente de los 
                        procesos de negocio.
                    </h3>
                    <p>
                    Los procesos asignan funciones que requieren la interevención 
                    humana a máquinas inteligentes, de esta forma, las tareas se 
                    ejercen de forma manual y rutinaria usando menos reursos en 
                    medio tiempo.
                    </p>
                </div>
            </div>

            <div class="col-block item-feature" data-aos="fade-up">
                <div class="item-feature__icon">
                    <i class="icon-shield"></i>
                </div>
                <div class="item-feature__text">
                    <h3 class="item-title">Apoyo a los empleados</h3>
                    <p>
                    Este gira a uno de los mayores temores en lo que respecta 
                    estabilidad laboral, estudios como el MqcKinsey Global Institute
                    (MGI) pronostican que alrededor de 800 millones de personas 
                    pierdan sus puestos de trabajo en menos de 10 años debido a la 
                    automatización de procesos.
                    </p>
                </div>
            </div>

            <div class="col-block item-feature" data-aos="fade-up">
                <div class="item-feature__icon">
                    <i class="icon-shield"></i>
                </div>  
                <div class="item-feature__text">
                    <h3 class="item-title">Análisis de datos</h3>
                    <p>
                    Capaz de llevar a cabo tareas de reconocimiento de regularidades 
                    y patrones, se identifican contextos y escenarios, esto gracias 
                    al Big Data y la ciencia de datos, disciplina encargada de 
                    recopilar, analizar, preparar y adaptar datos. 
                    </p>
                </div>
            </div>

            <div class="col-block item-feature" data-aos="fade-up">
                <div class="item-feature__icon">
                    <i class="icon-shield"></i>
                </div>
                <div class="item-feature__text">
                    <h3 class="item-title">Asegurar buena atención al cliente</h3>
                    <p>
                    Este es un factor coon mas cuidado, ya que lso  clientes deben ser 
                    tratados con la mayor prioridad y obtener respuesas inmediatas 
                    a sus problemas, para asegurar una buena atención se crearon los 
                    chatbots, solución que agiliza los procesos y propicia un trato 
                    directo y personal con el cliente.
                    </p>
                </div>
            </div>

            <div class="col-block item-feature" data-aos="fade-up">
                <div class="item-feature__icon">
                    <i class="icon-shield"></i>
                </div>
                <div class="item-feature__text">
                    <h3 class="item-title">Fidelizar talento</h3>
                    <p>
                    Las gestiones de personal que requieran de la actuación
                    humana pasan a ser digitalizadas, lo que supone una revolución 
                    en el departamento de recursos humanos. Estos observan el perfil 
                    del postulante, su criba de currículos, sus capacidades y la 
                    entrevista correspondiente para su aceptación en la empresa.
                    </p>
                </div>
            </div>

        </div> <!-- end features -->

        <div class="testimonials-wrap" data-aos="fade-up">

            <div class="row">
                <div class="col-full testimonials-header">
                    <h2 class="display-2">Testimonio</h2>
                </div>
            </div>

            <div class="row testimonials">

                <div class="col-full slick-slider testimonials__slider">

                    <div class="testimonials__slide">
                        <img src="images/avatars/margaret.jpg" alt="Author image" class="testimonials__avatar">
                        
                        <p>
                        ¿Cuál es la idea más equivocada que tenemos sobre la inteligencia 
                        artificial?
                        "Yo diría que hay dos ideas equivocadas. La primera es que la 
                        inteligencia artificial (IA) puede hacer mucho más de lo que 
                        es capaz realmente. Y la segunda es que puede hacer mucho menos.
                        Entre estos dos polos nos movemos, y esa ha sido mi idea con 
                        este libro. Examinar la naturaleza de la IA, hacer balance de 
                        dónde estamos e intentar vislumbrar el futuro, con los pies 
                        en el suelo y sin caer en escenarios de ciencia ficción."
                        </p>

                        <div class="testimonials__author">
                            <span class="testimonials__name">Margaret Boden</span>
                            <a href="#0" class="testimonials__link">
                                <?php echo $fechaMB; ?> de <?php echo $fecha1;?>
                            </a>
                        </div>
                    </div> <!-- end testimonials__slide -->
                    
                </div> <!-- end testimonials__slider -->

            </div> <!-- end testimonials -->

        </div> <!-- end testimonials-wrap -->

    </section> <!-- end s-features -->


    <!-- pricing
    ================================================== -->
    <section id="pricing" class="s-pricing target-section">

        <div class="row section-header align-center" data-aos="fade-up">
            <div class="col-full">
                <h1 class="display-1">
                   Donde encontramos <br> Inteligencia Artificial.
                </h1>
                <p class="lead">
                    <h3>Productividad</h3>
                    <p>
                        Las empresas de hoy en día aplican esta nueva 
                        tecnología para mejorar la eficiencia y eficacia 
                        en la solución de problemas y facilitar los procesos.
                    </p>
                    <br>
                    <h3>Medicina</h3>
                    <p>
                        La tecnología 5G a hecho realidad la cirugía 
                        teleasistida, un avance para la medicina, todo 
                        gracias a las dificultades de la situación, pero 
                        mas aún con la adpatación con las nuevas TICs.
                    </p>
                    <br>
                    <h3>Logística</h3>
                    <p>
                        El 5G y la IA permiten la geoposición exacata y en 
                        tiempo real las ubicaciones de las embarcaciones 
                        en el Port de Barcelona, un ejemplo a tomar en cuenta 
                        gracias a las implementaciones que surgen hoy en día.
                    </p>
                    <br>
                    <h3>Experiencia usuario</h3>
                    <p>
                        La IA ayuda al usuario la facilidad de manejar 
                        las diversas tecnoologías de información que se 
                        renuevan con el paso del tiempo, adaptando así un 
                        nuevo modo de vida.
                    </p>
                    <br>
                    <h3>Medio Ambiente</h3>
                    <p>
                        La IA ayuda al aumento eficaz y al bienestar social 
                        y cultural para promover asi la protección de la 
                        naturaleza misma, ya que esta se visto deteriorada 
                        con el pasar del tiempo.
                    </p>
                </p>
            </div>
        </div> <!-- end section-header -->

        <!--
        <div class="row plans block-1-2 block-m-1-2 block-tab-full stack">

            <div class="col-block item-plan" data-aos="fade-up">
                <div class="item-plan__block"> 

                    <div class="item-plan__top-part">
                        <h3 class="item-plan__title">Free</h3>
                        <p class="item-plan__price">$0</p>
                        <p class="item-plan__per">Forever</p>
                    </div>

                    <div class="item-plan__bottom-part">
                        <ul class="item-plan__features">
                            <li><span>5GB</span> Storage</li>
                            <li><span>10GB</span> Bandwidth</li>
                            <li><span>30</span> Email Accounts</li>
                            <li>Backup & Restore</li>
                        </ul>

                        <a class="btn btn--primary large full-width" href="#0">Get Started</a>
                    </div>  
                
                </div>
            </div> 

            <div class="col-block item-plan item-plan--popular" data-aos="fade-up">
                <div class="item-plan__block"> 

                    <div class="item-plan__top-part">
                        <h3 class="item-plan__title">Pro Plan</h3>
                        <p class="item-plan__price">$10</p>
                        <p class="item-plan__per">Per Month</p>
                    </div>

                    <div class="item-plan__bottom-part">
                        <ul class="item-plan__features">
                            <li><span>500GB</span> Storage</li>
                            <li><span>Unlimited</span> Bandwidth</li>
                            <li><span>50</span> Email Accounts</li>
                            <li>Backup & Restore</li>
                        </ul>

                        <a class="btn btn--primary large full-width" href="#0">Get Started</a>
                    </div>
                
                </div>
            </div> 

        </div>-->

    </section> <!-- end s-pricing -->


    <!-- download
    ================================================== -->
    
    <section id="download" class="s-download target-section">

        <!--
        <div class="row section-header align-center" data-aos="fade-up">
            <div class="col-full">
                <h1 class="display-1">
                    Join Our Community of 3,000,000+ Users.
                </h1>
                <p class="lead">
                    Et nihil atque ex. Reiciendis et rerum ut voluptate. Omnis molestiae nemo est. 
                    Ut quis enim rerum quia assumenda repudiandae non cumque qui. Amet repellat 
                    omnis ea.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-full text-center">
                <ul class="download-badges" data-aos="fade-up">
                    <li><a href="#0" title="" class="badge-appstore">App Store</a></li>
                    <li><a href="#0" title="" class="badge-googleplay">Play Store</a></li>
                </ul>
            </div> 
        </div> -->

        <div class="row download-bottom-image" data-aos="fade-up">
            <img src="images/encuentra.jpg" 
                srcset="images/encuentra.jpg 600w, 
                        images/encuentra.jpg 1400w, 
                        images/encuentra.jpg 2800w" 
                sizes="(max-width: 2800px) 100vw, 2800px" 
                alt="App Screenshots"> 
        </div> 

    </section> <!-- end s-download -->


    <!-- footer
    ================================================== -->
    <footer class="s-footer footer">

        <div class="row section-header align-center">
            <div class="col-full">
                <h1 class="display-1">
                    Riesgos del uso de la IA
                </h1>
                <p style = "color:white">
                    El término IA hace referencia a los dispositivos 
                    de cualquier tipo de mnaquinaria, como un robot 
                    hasta nuestro telefono móvil, se clasifica en varias 
                    categorías. Como señala el científico Stephen Hawking, 
                    uno de los mayores temores que se tiene sobre el avance 
                    de la tecnología es que pueda siginificar la extinción 
                    de la humanidad. Ya que este alcanzaría un nivel mucho 
                    mayor al de los seres humanos.
                </p>
            </div>
        </div> <!-- end section-header -->

        <div class="row footer__bottom">

            <div class="footer__about col-five tab-full left">

                <h4>Testimonio de Elon Musk</h4>

                <p style = "color:white">
                Elonk musk sugiere que un parásito está causando que los 
                humanos creen una IA sobrehumana. Al ser uno de los visionarios 
                más controvertidos de la actualidad. "La toxoplasmosis 
                infecta a las ratas, luego a los gatos, luego a los humanos 
                que hacen videos de gatos. Los trenes de inteligencia 
                artificial logran un entrenamiento de inteligencia 
                sobrehumana en videos de gatos de Internet, lo que convierte 
                a la toxoplasmosis en el verdadero árbitro de nuestro destino"
                </p>

                <ul class="footer__social">
                    <li><a href="#0"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                    <li><a href="#0"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#0"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>

            <div class="col-five md-seven tab-full right end">
                <div class="row">

                    <div class="footer__contact col-seven mob-full">
                        <h4>Fuente Exerna</h4>

                        <p style ="color:white">
                        El término Inteligencia Artificial hace referencia a los dispositivos
                         que permiten que cualquier maquinaria, desde un robot hasta 
                         nuestro teléfono móvil, procese información. Aunque esta tecnología 
                        se clasifica en varias categorías, hasta el momento no hemos logrado 
                        que iguale o supere la inteligencia umana. Sin embargo, varios expertos 
                        ya prevén cuáles podrían ser las consecuencias y los peligros de la 
                         Inteligencia Artificial si esta llegara a superar nuestras capacidades.

                        </p>
                    </div>

                </div>
            </div>

            <div class="col-full ss-copyright">
                <span>&copy; Copyright Kairos 2018</span> 
                <span>Design by <a href="https://www.styleshout.com/">styleshout</a></span>
            </div>

        </div> <!-- end footer__bottom -->

        <div class="go-top">
            <a class="smoothscroll" title="Back to Top" href="#top"></a>
        </div>

    </footer> <!-- end s-footer -->


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>
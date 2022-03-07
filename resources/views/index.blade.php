<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Gp Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    {{-- <!-- Favicons -->
    <link href="{{ asset('/InicioTemplate/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('/InicioTemplate/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon"> --}}

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/InicioTemplate/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('/InicioTemplate/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/InicioTemplate/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/InicioTemplate/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/InicioTemplate/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/InicioTemplate/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('/InicioTemplate/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('/InicioTemplate/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Gp - v4.7.0
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-lg-between">
            <img src="{{ asset('/InicioTemplate/assets/img/icono-casa.png') }}"
                                class="img-fluid" alt="" width="100 px" height="100 px">
            <h1 class="logo me-auto me-lg-0"><a href="#">PROTECNOSC</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Acerca de.</a></li>
                    <li><a class="nav-link scrollto" href="#services">Servicios</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Portafolio</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contactos</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="{{ route('acceso.ingresar') }}" class="get-started-btn scrollto" >Ingresar</a>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">
            <br>
            <br>
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-6 col-lg-8">
                    <h1>BIENVENIDO <span>.</span></h1>
                    <h2>A la Herramienta comunicaciónal de condominio para todos los miembros de nuestra comunidad.</h2>
                </div>
            </div>

            

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="{{ asset('/InicioTemplate/assets/img/condominio.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right"
                        data-aos-delay="100">
                        <h3>Mision</h3>
                        <p class="fst-italic">
                            El equipo de trabajo de la Junta de Condominio de la Urbanización La Rosaleda trabajara incansablemente para lograr convertirnos en un ejemplo y modelo a seguir de compromiso, organización, planificación, eficacia, unión, respeto, honestidad, ética y participación ciudadana, el cual esperamos que sea de manera permanente en el tiempo y pueda servir de inspiración, no sólo para nuestra comunidad, sino para todos los demás conjuntos residenciales y urbanizaciones.
                        </p>
                        <h3>Vision</h3>
                        <p class="fst-italic">
                            Nuestra misión es convertir nuestro conjunto residencial en lugar armonioso, organizado y pacífico en donde prevalezcan las normas de convivencia ciudadana y los valores éticos y morales que representan los pilares de la sociedad, como lo son el respeto mutuo, la igualdad, la equidad, la justicia, la solidaridad, la responsabilidad y el trabajo en equipo.
                        </p>
                        
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Servicios</h2>
                    <p>Nuestros Servicios</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="">Pago de servicios</a></h4>
                            <p>se podra pagar los distintos servicios de mantenimiento y pago de personal dentro del condominio</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">Comunicados</a></h4>
                            <p>se podra realizar distintos comunicados como reuniones, actividades entre otros </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="">Mensajes</a></h4>
                            <p>se podra realizar algunos reclamos por parte del propietario dueño inquilino y algunos mensajes por parte del comite a los propietarios<p>
                        </div>
                    </div>


                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
        

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Portafolio</h2>
                    <p>Portafolio de Imagenes</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">Todo</li>
                            <li data-filter=".filter-app">Areas Verdes</li>
                            <li data-filter=".filter-card">terrenos</li>
                            <li data-filter=".filter-web">parques</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('/InicioTemplate/assets/img/portfolio/area.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Area 1</h4>
                                <p>Area</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('/InicioTemplate/assets/img/portfolio/area.jpg')}}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('/InicioTemplate/assets/img/portfolio/parque.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Parque 3</h4>
                                <p>Parque</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('/InicioTemplate/assets/img/portfolio/parque.jpg')}}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('/InicioTemplate/assets/img/portfolio/area1.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Area 2</h4>
                                <p>Area</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('/InicioTemplate/assets/img/portfolio/area1.jpg')}}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('/InicioTemplate/assets/img/portfolio/te1.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Terreno 2</h4>
                                <p>Terreno</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('/InicioTemplate/assets/img/portfolio/te1.jpg')}}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('/InicioTemplate/assets/img/portfolio/pisi.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Parque 2</h4>
                                <p>Parque</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('/InicioTemplate/assets/img/portfolio/pisi.jpg')}}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('/InicioTemplate/assets/img/portfolio/area2.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Area 3</h4>
                                <p>Area</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('/InicioTemplate/assets/img/portfolio/area2.jpg')}}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('/InicioTemplate/assets/img/portfolio/te2.jpeg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Terreno 1</h4>
                                <p>Terreno</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('/InicioTemplate/assets/img/portfolio/te2.jpeg')}}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                                   
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('/InicioTemplate/assets/img/portfolio/te3.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Terreno 3</h4>
                                <p>Terreno</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('/InicioTemplate/assets/img/portfolio/te3.jpg')}}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                                  
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('/InicioTemplate/assets/img/portfolio/parque2.jpeg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Parque 1</h4>
                                <p>Parque</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('/InicioTemplate/assets/img/portfolio/parque2.jpeg')}}" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contacto</h2>
                    <p>Contacto Us</p>
                </div>

                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30399.962260283366!2d-63.23464129303485!3d-17.74486144925004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93f1dd7059c64519%3A0xa7317ff55efc1ddc!2zVXJ1YsOzLCBDb2xpbmFzIGRlbCBVcnViw7M!5e0!3m2!1ses-419!2sbo!4v1642483997113!5m2!1ses-419!2sbo"  style="border:0;width: 100%; height: 270px;" allowfullscreen="" loading="lazy" frameborder="0" allowfullscreen></iframe>
                   
                </div>

                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Localidad:</h4>
                                <p>Bolivia, Santa Cruz , N 37</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Correo:</h4>
                                <p>aguilargabriel004@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Celular:</h4>
                                <p>+1 68101887</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Nombre" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Correo" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Asunto" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Mensaje"
                                    required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->
        @include('layauts.vistas',['pagina'=>'inicio'])
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->


    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('/InicioTemplate/assets/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('/InicioTemplate/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('/InicioTemplate/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/InicioTemplate/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('/InicioTemplate/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('/InicioTemplate/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('/InicioTemplate/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('/InicioTemplate/assets/js/main.js') }}"></script>

</body>

</html>

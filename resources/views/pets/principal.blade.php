<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Index</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('dash/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('dash/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('dash/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{ asset('dash/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('dash/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{ asset('dash/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('dash/css/estilos.css')}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="img/logo.png" alt="" class="logo-head">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-9">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation" class="nav">
                                        <li><a  href="index.html">Inicio</a></li>
                                        <li><a  href="index.html">Nosotros</a></li>
                                        <li><a href="index.html">Módulos</a></li>
                                        <li><a href="index.html">Funcionalidades</a></li>
                                        <li><a href="index.html">Ventajas</a></li>
                                        <li><a href="index.html">Contacto</a></li>
                                        <li><a href="login.html" ><button class="boxed-btn4">Inicio sesión</button></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider slider_bg_1 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <div class="slider_text">
                            <h3><span >Por amor a rocky</span> <br>Sistema para la gestión de adopciones</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dog_thumb d-none d-lg-block">
                <img src="{{ asset('dash/img/banner/dog.png')}}" alt="">
            </div>
        </div>
    </div>
    <!-- slider_area_end -->
    
    <!-- pet_care_area_start  -->
    <div class="pet_care_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="pet_thumb">
                        <img src="{{ asset('dash/img/about/pet_care.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 col-md-6">
                    <div class="pet_info">
                        <div class="section_title">
                            <h3><span>Con el sistema,</span> <br>
                             todo es más fácil  </h3>
                            <p>El sistema va en base para la gestión de adopción de animales para fundaciones sin ánimo de lucro por el bien de todos los animales sin un hogar, ayudando a 
                            agilizar y gestionar correctamente las gestiones de la fundación.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pet_care_area_end  -->
    <!-- service_area_start  -->
    <div class="service_area">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-7 col-md-10">
                    <div class="section_title text-center mb-95">
                        <h3>Nuestros Módulos</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                         <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                             <div class="service_icon">
                                 <img src="{{ asset('dash/img/user.png')}}" alt="">
                             </div>
                         </div>
                         <div class="service_content text-center">
                            <h3>Usuarios</h3>
                            <p>Que tendrán el control dependiendo su rol y lo que la fundación necesite para el control del sistema,
                                dando seguridad para el usuario y el sistema en concreto</p>
                         </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service active">
                         <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                             <div class="service_icon">
                                 <img src="{{ asset('dash/img/gato.png')}}" alt="">
                             </div>
                         </div>
                         <div class="service_content text-center">
                            <h3>Peludos</h3>
                            <p>Ellos son la base de nuestro sistema y la razón de este, así que este se encarga completamente del manejo
                            de la información específica de cada uno de ellos
                            </p>
                         </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                         <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                             <div class="service_icon">
                                 <img src="{{ asset('dash/img/papeles.png')}}" alt="">
                             </div>
                         </div>
                         <div class="service_content text-center">
                            <h3>Adopción</h3>
                            <p>Aquí se almacenarán todos los datos que aplican en un caso de adopción, validando y dando a conocer
                               de manera específica y clara toda a información para el manejo
                            </p>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service_area_end -->

      <!-- ============================================-->
      <!-- <section> begin ============================-->
        <section class="py-6">

            <div class="container">
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-md-6 order-md-1 text-center text-md-start"><img class="img-fluid mb-4" src="{{ asset('dash/img/about/FuncDog.png')}}" /></div>
                  <div class="col-md-6 text-center text-md-start">
                    <div class="section_title text-center mb-95 2">
                        <h3 class="func-tit">Funcionalidades</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-4">
                              <div class="py-4"><img class="img-fluid" src="{{ asset('dash/img/fun1.png')}}" width="90" alt="" /></div>
                              <h5 class="fw-bold text-undefined">Verificación hogar</h5>
                              <p class="mt-2 mb-0">Verificación que la mascota vivirá plenamente.</p>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="mb-4">
                              <div class="py-4"><img class="img-fluid" src="{{ asset('dash/img/fun2.png')}}" width="90" alt="" /></div>
                              <h5 class="fw-bold text-undefined">Condición del animal</h5>
                              <p class="mt-2 mb-0">Verificación de alguna condición única.</p>
                            </div>
                          </div>
                      <div class="col-md-6">
                        <div class="mb-4">
                          <div class="py-4"><img class="img-fluid" src="{{ asset('dash/img/fun3.png')}}" width="90" alt="" /></div>
                          <h5 class="fw-bold text-undefined">Estado del animal</h5>
                          <p class="mt-2 mb-0">Validación del estado del animal y sus suplementos.</p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb-4">
                          <div class="py-4"><img class="img-fluid" src="{{ asset('dash/img/fun4.png')}}" width="90" alt="" /></div>
                          <h5 class="fw-bold text-undefined">Contratos legales</h5>
                          <p class="mt-2 mb-0">Validación de contratos legales sobre la adopción del animal.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end of .container-->
    
          </section>
          <!-- <section> close ============================-->
          <!-- ============================================-->
    <!-- adapt_area_end  -->

    <!-- testmonial_area_start  -->
    <div class="testmonial_area">
        <div class="container">
                <div class="row justify-content-center ">
                    <div class="col-lg-7 col-md-10">
                        <div class="section_title text-center mb-95">
                            <h3>Ventajas</h3>
                        </div>
                    </div>
                </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="textmonial_active owl-carousel">
                        <div class="testmonial_wrap">
                            <div class="single_testmonial d-flex align-items-center">
                                <div class="test_thumb">
                                    <img src="{{ asset('dash/img/vacuna.png')}}" alt="">
                                </div>
                                <div class="test_content">
                                    <h4>Validacion Vacunas</h4>
                                    <p>En nuestro sistema tenemos en cuenta la seguridad del peludo y tenemos validaciones del estado del animal.</p>
                                </div>
                            </div>
                        </div>
                        <div class="testmonial_wrap">
                            <div class="single_testmonial d-flex align-items-center">
                                <div class="test_thumb">
                                    <img src="{{ asset('dash/img/candado.png')}}" alt="">
                                </div>
                                <div class="test_content">
                                    <h4>Permisos de Usuario</h4>
                                    <p>Ya que trataremos con información del usuario, damos seguridad y permisos, según el tipo de usuario en el sistema.</p>
                                </div>
                            </div>
                        </div>
                        <div class="testmonial_wrap">
                            <div class="single_testmonial d-flex align-items-center">
                                <div class="test_thumb">
                                    <img src="{{ asset('dash/img/lista.png')}}" alt="">
                                </div>
                                <div class="test_content">
                                    <h4>Seguimiento</h4>
                                    <p>El sistema generará automáticamente los documentos requeridos por el usuario para agilizar el proceso y verificarlo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- testmonial_area_end  -->


    <section class="contact-section">
        <div class="container">


            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Contáctenos</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingresa tu nombre'" placeholder="Ingresa tu nombre">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingresa tu Email'" placeholder="Ingresa tu Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Ingresa el mensaje de consulta"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">Enviar</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>+57 3166443555</h3>
                            <p>Lunes a viernes 9am - 6pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Bogotá Colombia.</h3>
                            <p>Cll 130 c #123 91</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer_start  -->
    <footer class="footer">
       
        <div class="copy-right_text">
            <div class="container">
                
                <div class="bordered_1px"></div>
                <div class="row">
                    <div class="col-xl-15">
                        <p class="copy_right text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib   </a>
  <img src="{{ asset('dash/img/logo.png')}}" class="logofoot">          <ul>

  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->


    <!-- JS here -->
    <script src="{{ asset('dash/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{ asset('dash/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{ asset('dash/js/popper.min.js')}}"></script>
    <script src="{{ asset('dash/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('dash/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('dash/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('dash/js/ajax-form.js')}}"></script>
    <script src="{{ asset('dash/js/waypoints.min.js')}}"></script>
    <script src="{{ asset('dash/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('dash/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('dash/js/scrollIt.js')}}"></script>
    <script src="{{ asset('dash/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{ asset('dash/js/wow.min.js')}}"></script>
    <script src="{{ asset('dash/js/nice-select.min.js')}}"></script>
    <script src="{{ asset('dash/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{ asset('dash/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('dash/js/plugins.js')}}"></script>
    <script src="{{ asset('dash/js/gijgo.min.js')}}"></script>

    <!--contact js-->
    <script src="{{ asset('dash/js/contact.js')}}"></script>
    <script src="{{ asset('dash/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ asset('dash/js/jquery.form.js')}}"></script>
    <script src="{{ asset('dash/js/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('dash/js/mail-script.js')}}"></script>

    <script src="{{ asset('dash/js/main.js')}}"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            disableDaysOfWeek: [0, 0],
        //     icons: {
        //      rightIcon: '<span class="fa fa-caret-down"></span>'
        //  }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

        });
        var timepicker = $('#timepicker').timepicker({
         format: 'HH.MM'
     });
    </script>
</body>

</html>
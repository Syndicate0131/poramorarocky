<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Por Amor A Rocky</title>
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
                                    <img src="{{ asset('dash/img/logo.png')}}" alt="" class="logo-head">
                                </a>
                            </div>
                        </div>
                        @if(Auth::user()->tipousuario===1)
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
                                        <li><a href="/" ><button class="boxed-btn4">Cerrar Sesión</button></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        @else
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </header>
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
                            <a href="{{ route('usuario.index')}}" ><button class="boxed-btn4">Listar Usuarios</button></a>
                            <hr>
                            <br>
                            <a href="{{ route('usuario.create')}}" ><button class="boxed-btn4">Registrar Usuario</button></a>
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
                            <a href="{{ route('adoption.index')}}" ><button class="boxed-btn4">Listar Adopciónes</button></a>
                            <hr>
                            <br>
                            <a href="{{ route('adoption.create')}}" ><button class="boxed-btn4">Registrar Adopción</button></a>
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
                            <a href="{{ route('pet.index')}}" ><button class="boxed-btn4">Listar Peludos</button></a>
                            <hr>
                            <br>
                            <a href="{{ route('pet.create')}}" ><button class="boxed-btn4">Registrar Peludo</button></a>
                         </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-7 col-md-10">
                    <div class="section_title text-center mb-95">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
            
                <div class="col-lg-4 col-md-6">
                    <div class="single_service active">
                         <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                             <div class="service_icon">
                                 <img src="{{ asset('dash/img/vacuna.png')}}" alt="">
                             </div>
                         </div>
                         <div class="service_content text-center">
                            <h3>Mis Vacunas</h3>
                            <a href="{{ route('myvaccine.index')}}" ><button class="boxed-btn4">Listar Mi Vacunas</button></a>
                            <hr>
                            <br>
                            <a href="{{ route('myvaccine.create')}}" ><button class="boxed-btn4">Registrar Mi Vacuna</button></a>
                         </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service">
                         <div class="service_thumb service_icon_bg_1 d-flex align-items-center justify-content-center">
                             <div class="service_icon">
                                 <img src="{{ asset('dash/img/lista.png')}}" alt="">
                             </div>
                         </div>
                         <div class="service_content text-center">
                            <h3>Vacuna</h3>
                            <a href="{{ route('vaccine.index')}}" ><button class="boxed-btn4">Listar Vacunas</button></a>
                            <hr>
                            <br>
                            <a href="{{ route('vaccine.create')}}" ><button class="boxed-btn4">Registrar Vacuna</button></a>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service_area_end -->


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
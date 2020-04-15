<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} @yield('title')</title>

    <link rel="icon" href="{{ asset('img/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <!--::header part start::-->
    <header class="main_menu @yield('navbar')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="/"> <img src="{{ asset('img/logo.png') }}" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end" id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item">
                                    <a class="nav-link" href="/phtls">PHTLS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/generales">Generales</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/proyectos">Proyectos</a>
                                </li>
                                <!--li class="nav-item">
                                    <a class="nav-link" href="/tums">TUMS</a>
                                </li-->
                                <li class="nav-item">
                                    <a class="nav-link" href="/urgencias-medicas">Urgencias Médicas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/primera-gen">Primera Gen</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/mdfpp">MDFPP</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

     @yield('content')

    <!-- footer part start-->
    <footer class="footer-area">
        <div class="footer section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                        <h4>Tiendas de Equipo</h4>
                        <ul>
                            <li><a target="_blank" href="https://www.emsmex.com/">ESM MÉXICO</a></li>
                            <li><a target="_blank" href="https://www.511tactical.com/">5.11 TACTICAL</a></li>
                            <li><a target="_blank" href="https://www.lancetahg.com.mx/">LANCETA HG</a></li>
                            <!--li><a target="_blank" href="#">Link</a></li>
                            <li><a target="_blank" href="#">Link</a></li-->
                        </ul>
                    </div>
                    <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                        <h4>Cursos</h4>
                        <ul>
                            <li><a target="_blank" href="https://www.vidacem.com.mx/">VIDACEM</a></li>
                            <li><a target="_blank" href="http://escuelasos.com.mx/page/capacitacion/salud/">SOS Escuela de Emergencias</a></li>
                            <li><a target="_blank" href="http://ediccollege.edu/tecnico-de-emergencias-medicas/">EDIC College</a></li>
                            <!--li><a target="_blank" href="#">Link</a></li>
                            <li><a target="_blank" href="#">Link</a></li-->
                        </ul>
                    </div>

                    <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                        <h4>Recomendadas</h4>
                        <ul>
                            <li><a target="_blank" href="https://www.heart.org/">HEART.org</a></li>
                            <li><a target="_blank" href="http://www.ecured.cu/Param%C3%A9dico">EcuRed</a></li>
                            <li><a target="_blank" href="https://www.cruzrojamexicana.org.mx/">Cruz Roja Mexicana</a></li>
                            <!--li><a target="_blank" href="#">Link</a></li>
                            <li><a target="_blank" href="#">Link</a></li-->
                        </ul>
                    </div>
                    <!--div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                        <h4>Links</h4>
                        <ul>
                            <li><a target="_blank" href="#">Link</a></li>
                            <li><a target="_blank" href="#">Link</a></li>
                            <li><a target="_blank" href="#">Link</a></li>
                            <li><a target="_blank" href="#">Link</a></li>
                            <li><a target="_blank" href="#">Link</a></li>
                        </ul>
                    </div-->
                    <div class="col-xl-4 col-sm-8 col-md-8 mb-4 mb-xl-0 single-footer-widget">
                        <h4>Boletín</h4>
                        <p>Recibe información actualizada sobre protocolos y técnicas adecuadas en tu correo electrónico.</p>
                        <div class="form-wrap" id="mc_embed_signup">
                            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
                                <input class="form-control" name="EMAIL" placeholder="Tu Correo Electrónico" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tu Correo Electrónico '" required="" type="email">
                                <button class="click-btn btn btn-default text-uppercase">Suscribirse</button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                </div>

                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright_part">
            <div class="container">
                <div class="row align-items-center">
                    <p class="footer-text m-0 col-lg-8 col-md-12">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Salvando Vidas &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                    <!--div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"> <i class="ti-twitter"></i> </a>
                        <a href="#"><i class="ti-instagram"></i></a>
                        <a href="#"><i class="ti-skype"></i></a>
                    </div-->
                </div>
            </div>
        </div>
    </footer>

    <!-- footer part end-->

    <!-- jquery plugins here-->

    <script src="{{ asset('js/jquery-1.12.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- easing js -->
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('js/masonry.pkgd.js') }}"></script>
    <!-- particles js -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <!-- contact js -->
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/jquery.form.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/mail-script.js') }}"></script>
    <script src="{{ asset('js/contact.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('js/custom.js') }}"></script>

    <script src="//mozilla.github.io/pdf.js/build/pdf.js"></script>

    @yield('javascript')
</body>

</html>
@extends('layouts.app')

@section('title', ' - Inicio')

@section('content')

<!-- banner part start-->
<section class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-xl-6">
                <div class="banner_text">
                    <div class="banner_text_iner">
                        <h1>Salvando Vidas</h1>
                        <p align="justify">Información esencial para personal del Sistema Médico de Urgencias y a población en general la cual busca que quienes lo lean puedan comprender los temas fácilmente y se motiven a capacitarse para poder ser capaces de aplicar sus conocimientos frente a un paciente.</p>
                        <a href="#" class="btn_2">Salva una vida</a>
                        <div class="banner_item">
                            <div class="single_item">
                                <img src="{{ asset('img/icon/banner_1.svg') }}" alt="">
                                <h5>Primeros Auxilios</h5>
                            </div>
                            <div class="single_item">
                                <img src="{{ asset('img/icon/banner_2.svg') }}" alt="">
                                <h5>Protocolos</h5>
                            </div>
                            <div class="single_item">
                                <img src="{{ asset('img/icon/banner_3.svg') }}" alt="">
                                <h5>Técnicas Adecuadas</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner part start-->

<!-- feature_part start-->
<section class="feature_part padding_top">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-md-4 align-self-center">
                <div class="single_feature_text ">
                    <h2>Objetivo</h2>
                    <p align="justify">Se busca definir cuál es el método con el cual la mayor parte de la población acceda a capacitarse en primeros auxilios, buscaremos ver la conveniencia de implementar un programa de capacitación de primeros auxilios en las escuelas y principalmente buscaremos ver si digitalizar la información y protocolos funciona para que el personal que labora en el servicio médico de urgencias se actualice.</p>
                    <!--a href="#" class="btn_2">More service</a-->
                </div>
            </div>
            <div class="col-lg-8 col-md-8">
                <div class="feature_item">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_feature">
                                <div class="single_feature_part">
                                    <span class="single_feature_icon"><img src="{{ asset('img/icon/feature_1.svg') }}" alt=""></span>
                                    <h4>Actualización</h4>
                                    <p>Es muy importante que tanto personal de atención pre hospitalaria como aquellas personas de la población general nos actualicemos constantemente para ser capaces de ayudar a las personas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_feature">
                                <div class="single_feature_part">
                                    <span class="single_feature_icon"><img src="{{ asset('img/icon/feature_2.svg') }}" alt=""></span>
                                    <h4>Técnicas Adecuadas</h4>
                                    <p>Perjudicar a las personas aún más por tratar de ayudarlos, pero por nuestra falta de conocimiento ya sea porque no hemos tomados cursos o porque nos negamos a continuar estudiando.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_feature">
                                <div class="single_feature_part">
                                    <span class="single_feature_icon"><img src="{{ asset('img/icon/feature_2.svg') }}" alt=""></span>
                                    <h4>Deseo de ayuda</h4>
                                    <p>Motivarnos a nosotros mismos y a otras personas a estudiar, aprender y actualizarse para conocer los métodos correctos y más recientes para poder ayudar a las personas y no dañarlas en el intento.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_feature">
                                <div class="single_feature_part">
                                    <span class="single_feature_icon"><img src="{{ asset('img/icon/feature_1.svg') }}" alt=""></span>
                                    <h4>Conocimiento oportuno</h4>
                                    <p>Saber primeros auxilios nos hace capaces de resolver situaciones o atender lesiones para que el lesionado, amigo, familiar, conocido o desconocido pueda tener la menor cantidad de afectaciones.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature_part start-->

<!-- our_ability part start-->
<section class="our_ability section_padding">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6 col-lg-6">
                <div class="our_ability_img">
                    <img src="{{ asset('img/ability_img.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="our_ability_member_text">
                    <h2>En México la población no considera necesario capacitarse</h2>
                    <p align="justify">En México menos del 10% de la población sabe que debe hacer en caso de alguna situación de emergencia, gran parte de los mexicanos entra en pánico cuando ocurre algún incidente y no pueden ayudar al herido. Muchas veces hay personas que intentan ayudar a los heridos en el momento de una emergencia, pero su falta de conocimiento ocasiona mayores daños que los que en muchos casos el paciente tenía inicialmente.</p>
                    <ul>
                        <li><span class="ti-mouse"></span>Digitalización</li>
                        <li><span class="ti-heart-broken"></span>Protocolos</li>
                        <li><span class="ti-package"></span>Información actualizada</li>
                        <li><span class="ti-headphone-alt"></span>Disponibilidad 24/7</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- our_ability part end-->

<!-- top_service part start-->
<section class="top_service our_ability padding_bottom">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-5 col-lg-5">
                <div class="our_ability_member_text">
                    <h2>Programa de capacitación de primeros auxilios</h2>
                    <p align="justify">El objetivo de este proyecto es crear conciencia en personal de atención de emergencia y la población en general de la importancia que tiene el capacitarse constantemente para poder salvar vidas y ser aquella persona que ayuda y no aquella que daña.</p>
                    <!--a href="#" class="btn_2">read more</a-->
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="our_ability_img">
                    <img src="{{ asset('img/top_service.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- top_service part end-->

<!--::review_part start::-->
<!--section class="review_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="client_review_part owl-carousel">
                        <div class="client_review_single">
                            <img src="{{ asset('') }}img/Quote.png" class="Quote" alt="quote">
                            <div class="client_review_text">
                                <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                    god dea earth light for life may itself shall whales made they're blessed whales
                                    also made from give
                                    may saying meat. There from heaven it lights face had amazing place</p>
                            </div>
                            <h4>Mosan Cameron, <span>Executive of fedex</span></h4>
                        </div>
                        <div class="client_review_single">
                            <img src="{{ asset('') }}img/Quote.png" class="Quote" alt="quote">
                            <div class="client_review_text media-body">
                                <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                    god dea earth light for life may itself shall whales made they're blessed whales
                                    also made from give
                                    may saying meat. There from heaven it lights face had amazing place</p>
                            </div>
                            <h4>Mosan Cameron, <span>Executive of fedex</span></h4>
                        </div>
                        <div class="client_review_single">
                            <img src="{{ asset('') }}img/Quote.png" class="Quote" alt="quote">
                            <div class="client_review_text">
                                <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                    god dea earth light for life may itself shall whales made they're blessed whales
                                    also made from give
                                    may saying meat. There from heaven it lights face had amazing place</p>
                            </div>
                            <h4>Mosan Cameron, <span>Executive of fedex</span></h4>
                        </div>
                        <div class="client_review_single">
                            <img src="{{ asset('') }}img/Quote.png" class="Quote" alt="quote">
                            <div class="client_review_text">
                                <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                    god dea earth light for life may itself shall whales made they're blessed whales
                                    also made from give
                                    may saying meat. There from heaven it lights face had amazing place</p>
                            </div>
                            <h4>Mosan Cameron, <span>Executive of fedex</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section-->
<!--::review_part end::-->

<!--::regervation_part start::-->
<!--section class="regervation_part">
        <div class="container">
            <div class="row align-items-center regervation_content">
                <div class="col-lg-7 col-md-6">
                    <div class="regervation_part_iner">
                        <form>
                            <h2>Make an Appointment</h2>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="password" class="form-control" id="inputPassword4" placeholder="Email address">
                                </div>
                                <div class="form-group col-md-6">
                                    <select class="form-control" id="Select">
                                        <option value="1" selected>Select service</option>
                                        <option value="2">Name of service</option>
                                        <option value="3">Name of service</option>
                                        <option value="4">Name of service</option>
                                        <option value="5">Name of service</option>
                                    </select>
                                </div>
                                <div class="form-group time_icon col-md-6">
                                    <select class="form-control" id="Select2">
                                        <option value="" selected>Time</option>
                                        <option value="1">8 AM TO 10AM</option>
                                        <option value="1">10 AM TO 12PM</option>
                                        <option value="1">12PM TO 2PM</option>
                                        <option value="1">2PM TO 4PM</option>
                                        <option value="1">4PM TO 6PM</option>
                                        <option value="1">6PM TO 8PM</option>
                                        <option value="1">4PM TO 10PM</option>
                                        <option value="1">10PM TO 12PM</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" id="Textarea" rows="4" placeholder="Your Note "></textarea>
                                </div>
                            </div>
                            <div class="regerv_btn">
                                <a href="#" class="regerv_btn_iner">Make an Appointment</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="reservation_img">
                        <img src="{{ asset('') }}img/reservation.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section-->
<!--::regervation_part end::-->

<!--::doctor_part start::-->
<!--section class="doctor_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2> Experienced Doctors</h2>
                        <p>Face replenish sea good winged bearing years air divide wasHave night male also</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="{{ asset('') }}img/doctor/doctor_1.png" alt="doctor">
                            <div class="social_icon">
                                <a href="#"> <i class="ti-facebook"></i> </a>
                                <a href="#"> <i class="ti-twitter-alt"></i> </a>
                                <a href="#"> <i class="ti-instagram"></i> </a>
                                <a href="#"> <i class="ti-skype"></i> </a>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3>DR Adam Billiard</h3>
                                <p>Heart specialist</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="{{ asset('') }}img/doctor/doctor_4.png" alt="doctor">
                            <div class="social_icon">
                                <a href="#"> <i class="ti-facebook"></i> </a>
                                <a href="#"> <i class="ti-twitter-alt"></i> </a>
                                <a href="#"> <i class="ti-instagram"></i> </a>
                                <a href="#"> <i class="ti-skype"></i> </a>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3>DR Adam Billiard</h3>
                                <p>Medicine specialist</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="{{ asset('') }}img/doctor/doctor_2.png" alt="doctor">
                            <div class="social_icon">
                                <a href="#"> <i class="ti-facebook"></i> </a>
                                <a href="#"> <i class="ti-twitter-alt"></i> </a>
                                <a href="#"> <i class="ti-instagram"></i> </a>
                                <a href="#"> <i class="ti-skype"></i> </a>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3>DR Fred Macyard</h3>
                                <p>CHeart specialist</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            <img src="{{ asset('') }}img/doctor/doctor_3.png" alt="doctor">
                            <div class="social_icon">
                                <a href="#"> <i class="ti-facebook"></i> </a>
                                <a href="#"> <i class="ti-twitter-alt"></i> </a>
                                <a href="#"> <i class="ti-instagram"></i> </a>
                                <a href="#"> <i class="ti-skype"></i> </a>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3>DR Justin Stuard</h3>
                                <p>Heart specialist</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section-->
<!--::doctor_part end::-->

<!-- intro_video_bg start-->
<!--section class="intro_video_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro_video_iner text-center">
                        <h2>View Our History</h2>
                        <div class="intro_video_icon">
                            <a id="play-video_1" class="video-play-button popup-youtube" href="https://www.youtube.com/watch?v=pBFQdxA-apI">
                                <span class="ti-control-play"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section-->
<!-- intro_video_bg part start-->

<!--::blog_part start::-->
<section class="blog_part section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="section_tittle text-center">
                    <h2>Últimas noticias</h2>
                    <p>Enterate de las últimas noticias sobre el manejo de Urgencias Médicas</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4 col-xl-4">
                <div class="single-home-blog">
                    <div class="card">
                        <img src="{{ asset('img/blog/blog_1.png') }}" class="card-img-top" alt="blog">
                        <div class="card-body">
                            <ul>
                                <li> <span class="ti-user"></span>Admin</li>
                                <li> <span class="ti-bookmark"></span>Urgencias Médicas</li>
                            </ul>
                            <a href="blog.html">
                                <h5 class="card-title">Inmovilización y su utilidad actuálmente</h5>
                            </a>
                            <a href="#" class="genric-btn primary">Más</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-4">
                <div class="single-home-blog">
                    <div class="card">
                        <img src="{{ asset('img/blog/blog_2.png') }}" class="card-img-top" alt="blog">
                        <div class="card-body">
                            <ul>
                                <li> <span class="ti-user"></span>Admin</li>
                                <li> <span class="ti-bookmark"></span>Urgencias Médicas</li>
                            </ul>
                            <a href="blog.html">
                                <h5 class="card-title">Stop the bleed</h5>
                            </a>
                            <a href="#" class="genric-btn primary">Más</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-4">
                <div class="single-home-blog">
                    <div class="card">
                        <img src="{{ asset('img/blog/blog_3.png') }}" class="card-img-top" alt="blog">
                        <div class="card-body">
                            <ul>
                                <li> <span class="ti-user"></span>Admin</li>
                                <li> <span class="ti-bookmark"></span>Urgencias Médicas</li>
                            </ul>
                            <a href="blog.html">
                                <h5 class="card-title">DEAs en lugares públicos</h5>
                            </a>
                            <a href="#" class="genric-btn primary">Más</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--::blog_part end::-->
@endsection
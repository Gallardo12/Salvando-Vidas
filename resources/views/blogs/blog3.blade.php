@extends('layouts.app')
@section('title', ' - DEAs en lugares públicos')

@section('content')
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>DEAs en lugares públicos</h2>
                        <p>Inicio<span>/</span>deas-en-lugares-publicos</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->
<!--================Blog Area =================-->
<section class="blog_area single-post-area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <div class="feature-img">
                        <img class="img-fluid" src="img/blog/single_blog_3.png" alt="">
                    </div>
                    <div class="blog_details">
                        <h2>El uso generalizado de desfibriladores en lugares públicos salva vidas.
                        </h2>
                        <p class="excert">
                            Un estudio halla que las probabilidades de sobrevivir a un paro cardiaco son mayores si lo causa una arritmia "desfibrilable" y si los transeúntes pueden administrar reanimación cardiopulmonar (RCP) y un choque con un desfibrilador externo automático (DEA) que esté a mano.
                            Por esta razón una persona es más propensa a sobrevivir si el paro cardiaco ocurre en un lugar público muy concurrido, donde hayan testigos que respondan a la emergencia y un desfibrilador externo automático disponible, señalaron los investigadores.
                        </p>
                        <div class="quote-wrapper">
                            <div class="quotes">
                                "La mayoría de las veces que los pacientes sufren un paro cardiaco en un lugar público, como aeropuertos, edificios públicos, eventos deportivos o instalaciones para hacer ejercicio, la causa de su paro cardiaco responde al choque de un desfibrilador externo automático que salva su vida", explicó el investigador principal, el Dr. Myron L. Weisfeldt, director del Departamento de medicina de la Facultad de medicina de la Universidad de Johns Hopkins en Baltimore. "La frecuencia de esta irregularidad cardiaca que responde al choque de un desfibrilador externo automático entre las personas que sufren un paro cardiaco en su casa es mucho menor".
                            </div>
                        </div>
                        <p>
                            Los desfibriladores externos automáticos que están disponibles y se usan en lugares públicos salvan vidas si son fáciles de encontrar y un transeúnte está dispuesto a usarlos, agregó Weisfeldt.
                        </p>
                        <div class="quote-wrapper">
                            <div class="quotes">
                                    "El uso del desfibrilador externo automático en el hogar beneficiará a algunos pacientes pero no tanto como en lugares públicos", agregó. "En el hogar es mucho más importante llamar al 911 para activar los servicios de emergencia y llevar a cabo la reanimación cardiopulmonar".
                            </div>
                        </div>
                        <p>
                                El informe aparece en la edición del 27 de enero de la New England Journal of Medicine. Para el estudio, el equipo de Weisfeldt recopiló datos sobre 12,930 paros cardiacos. De éstos, 2,042 ocurrieron en un lugar público y 9,564 en el hogar.
                                De estos paros cardiacos, el 79 por ciento eran arritmias desfibrilables tales como taquicardia ventricular o fibrilación ventricular. En estas arritmias, las cámaras inferiores del corazón, conocidas como ventrículos, se contraen de forma caótica y demasiado rápido. El resultado es que la sangre no circula por todo el cuerpo.
                        </p>
                        <p>
                            Dar un choque al corazón con un desfibrilador externo automático puede, en muchos casos, hacer que el ritmo cardiaco vuelva a la normalidad.
                            De hecho, entre estos tipos de paros cardiacos, el 34 por ciento de las personas que fueron tratadas con un DEA usado por un espectador en un lugar público sobrevivieron y fueron dadas de alta del hospital.
                        </p>
                        <p>
                            Un número mucho más bajo de pacientes (36 por ciento) sufrió taquicardia ventricular o fibrilación ventricular en el hogar. Entre los que recibieron el choque de un desfibrilador externo automático por parte de un espectador o familiar, el 11.6 por ciento abandonó el hospital, apuntaron los autores.
                        </p>
                        <div class="quote-wrapper">
                            <div class="quotes">
                                "A pesar de la reducción general en la frecuencia de causas desfibrilables de paro cardiaco, los desfibriladores externos automáticos son potencialmente de gran valor en un lugar público. Tanto en el hogar como en un lugar público, llamar al 911 y realizar la reanimación cardiopulmonar salva vidas", señaló Weisfeldt.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navigation-top">
                    <div class="navigation-area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                <div class="thumb">
                                    <a href="/stop-the-bleed">
                                        <img height="60px" width="60px" class="img-fluid" src="img/post/blog_2.png" alt="">
                                    </a>
                                </div>
                                <div class="arrow">
                                    <a href="/stop-the-bleed">
                                        <span class="lnr text-white ti-arrow-left"></span>
                                    </a>
                                </div>
                                <div class="detials">
                                    <p>Anterior</p>
                                    <a href="/stop-the-bleed">
                                        <h4>Stop the bleed</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                <div class="detials">
                                    <p>Siguiente</p>
                                    <a href="/el-fin-del-yeso-para-inmovilizar-extremidades">
                                        <h4>El fin del yeso para inmovilizar extremidades</h4>
                                    </a>
                                </div>
                                <div class="arrow">
                                    <a href="/el-fin-del-yeso-para-inmovilizar-extremidades">
                                        <span class="lnr text-white ti-arrow-right"></span>
                                    </a>
                                </div>
                                <div class="thumb">
                                    <a href="/el-fin-del-yeso-para-inmovilizar-extremidades">
                                        <img height="60px" width="60px" class="img-fluid" src="img/post/blog_1.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-author">
                    <div class="media align-items-center">
                        <img src="img/blog/author.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>Jesús Soto</h4>
                            </a>
                            <p>Pasante de la Primera Generación de Técnico en Urgencias Médicas por el Instituto La Luz, Delegación Durango de la Cruz Roja Mexicana.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!--================Blog Area end =================-->
@endsection
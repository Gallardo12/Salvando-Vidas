@extends('layouts.app')

@section('title', ' - Proyectos')

@section('content')
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>Proyectos</h2>
                        <p>Home<span>/</span>Proyectos</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->


<!--================Blog Area =================-->
<section class="blog_area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">

                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0" src="img/blog/pdf10.png" alt="">
                            <a href="#" class="blog_item_date">
                                <h3>1</h3>
                                <p>PDF</p>
                            </a>
                        </div>
                        <div class="blog_details">
                            <a class="d-inline-block" href="pdf/proyectos/6-acciones-para-salvar-una-vida.pdf">
                                <h2>6 Acciones para salvar una vida</h2>
                            </a>
                            <p>
                                Se entienden por primeros auxilios, los cuidados inmediatos, adecuados y provisionales prestados a las personas accidentadas o con enfermedad antes de ser atendidos en un centro hospitalario.
                            </p>
                        </div>
                    </article>

                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0" src="img/blog/pdf11.png" alt="">
                            <a href="#" class="blog_item_date">
                                <h3>2</h3>
                                <p>PDF</p>
                            </a>
                        </div>
                        <div class="blog_details">
                            <a class="d-inline-block" href="pdf/proyectos/reanimacion-cardiopulmonar-basico.pdf">
                                <h2>Reanimación Cardio Pulmonar Básico</h2>
                            </a>
                            <p>La reanimación cardiopulmonar, o reanimación cardiorrespiratoria, abreviado RCP es un conjunto de maniobras temporales y normalizadas intencionalmente destinadas a asegurar la oxigenación de los órganos.</p>
                        </div>
                    </article>

                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->

@endsection
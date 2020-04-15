@extends('layouts.app')

@section('title', ' - Generales')

@section('content')
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>Generales</h2>
                        <p>Home<span>/</span>Generales</p>
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
                            <img class="card-img rounded-0" src="img/blog/pdf5.png" alt="">
                            <a href="#" class="blog_item_date">
                                <h3>1</h3>
                                <p>PDF</p>
                            </a>
                        </div>
                        <div class="blog_details">
                            <a class="d-inline-block" href="pdf/generales/el-bienestar-de-tum.pdf">
                                <h2>El Bienestar de TUM</h2>
                            </a>
                            <p>Son los procedimientos inmediatos y temporales que se le dan a una persona accidentada o que ha sufrido una enfermedad repentina.</p>
                        </div>
                    </article>

                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0" src="img/blog/pdf6.png" alt="">
                            <a href="#" class="blog_item_date">
                                <h3>2</h3>
                                <p>PDF</p>
                            </a>
                        </div>
                        <div class="blog_details">
                            <a class="d-inline-block" href="pdf/generales/evaluacion-del-paciente.pdf">
                                <h2>Evaluación del paciente</h2>
                            </a>
                            <p>Cuando la víctima de un accidente no está consciente, lo más indicado es seguir la técnica ABC (Airway, Breath, Circulation) que consiste en: Apertura de la vía aérea. Búsqueda de la respiración. Circulación.</p>
                        </div>
                    </article>

                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0" src="img/blog/pdf7.png" alt="">
                            <a href="#" class="blog_item_date">
                                <h3>3</h3>
                                <p>PDF</p>
                            </a>
                        </div>
                        <div class="blog_details">
                            <a class="d-inline-block" href="pdf/generales/evaluacion-inicial.pdf">
                                <h2>Evaluación Inicial</h2>
                            </a>
                            <p>La evaluación inicial de un accidentado consiste en realizar una valoración global de su estado, con el objetivo de determinar el alcance de sus lesiones, para establecer las prioridades de actuación y adoptar las medidas necesarias en cada caso.</p>
                        </div>
                    </article>

                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0" src="img/blog/pdf8.png" alt="">
                            <a href="#" class="blog_item_date">
                                <h3>4</h3>
                                <p>PDF</p>
                            </a>
                        </div>
                        <div class="blog_details">
                            <a class="d-inline-block" href="pdf/generales/manejo-basico-de-la-via-aerea.pdf">
                                <h2>Manejo básico de la vía aerea</h2>
                            </a>
                            <p>En anatomía, y en medicina en general, se conoce como vías aéreas a la parte superior del aparato respiratorio. Es la parte por la que discurre el aire en dirección a los pulmones, donde se realizará el intercambio gaseoso.</p>
                        </div>
                    </article>

                    <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="img/blog/pdf9.png" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>5</h3>
                                    <p>PDF</p>
                                </a>
                            </div>
                            <div class="blog_details">
                                <a class="d-inline-block" href="pdf/generales/signologia.pdf">
                                    <h2>Signología</h2>
                                </a>
                                <p>La rápida actuación ante un accidente puede salvar la vida de una persona o evitar el empeoramiento de las posibles lesiones que padezca.</p>
                            </div>
                        </article>

                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->

@endsection
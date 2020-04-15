@extends('layouts.app')

@section('title', ' - PHTLS')

@section('content')
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>PHTLS</h2>
                        <p>Home<span>/</span>PHTLS</p>
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
                            <img class="card-img rounded-0" src="img/blog/pdf1.png" alt="">
                            <a href="#" class="blog_item_date">
                                <h3>1</h3>
                                <p>PDF</p>
                            </a>
                        </div>
                        <div class="blog_details">
                            <a class="d-inline-block" href="pdf/phtls/cinematica-de-trauma.pdf">
                                <h2>Cinemática de Trauma</h2>
                            </a>
                            <p>Cinemática= es la ciencia que analiza los mecanismos de lesión. Ayuda a predecir el tipo y extensión de las lesiones.</p>
                        </div>
                    </article>

                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0" src="img/blog/pdf2.png" alt="">
                            <a href="#" class="blog_item_date">
                                <h3>2</h3>
                                <p>PDF</p>
                            </a>
                        </div>
                        <div class="blog_details">
                            <a class="d-inline-block" href="pdf/phtls/shock.pdf">
                                <h2>Shock</h2>
                            </a>
                            <p>Los signos y síntomas de una conmoción pueden ser sutiles y no manifestarse inmediatamente. Los síntomas pueden durar días, semanas o incluso más tiempo.</p>
                        </div>
                    </article>

                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0" src="img/blog/pdf3.png" alt="">
                            <a href="#" class="blog_item_date">
                                <h3>3</h3>
                                <p>PDF</p>
                            </a>
                        </div>
                        <div class="blog_details">
                            <a class="d-inline-block" href="pdf/phtls/trauma-abdominal.pdf">
                                <h2>Trauma Abdominal</h2>
                            </a>
                            <p>Todo trauma abdominal presenta un riesgo grave de pérdida de sangre e infección. El diagnóstico puede implicar la ecografía, tomografía computarizada y el lavado peritoneal, y el tratamiento con frecuencia incluye la cirugía.</p>
                        </div>
                    </article>

                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="card-img rounded-0" src="img/blog/pdf4.png" alt="">
                            <a href="#" class="blog_item_date">
                                <h3>4</h3>
                                <p>PDF</p>
                            </a>
                        </div>
                        <div class="blog_details">
                            <a class="d-inline-block" href="pdf/phtls/trauma-musculoesqueletico.pdf">
                                <h2>Trauma Musculoesquelético</h2>
                            </a>
                            <p>Son lesiones que afectan a los músculos, tendones, huesos, ligamentos o discos intervertebrales. La mayoría de las lesiones músculo-esqueléticas no se producen por accidentes o agresiones únicas o aisladas, sino como resultado de traumatismos pequeños y repetidos.</p>
                        </div>
                    </article>

                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->

@endsection
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
                            <p>Inicio<span>/</span>Generales</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- our_ability part start-->
    <section class="our_ability section_padding">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 col-lg-6">
                    <div class="our_ability_img">
                        <img src="img/ability_img.png" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="our_ability_member_text">
                        <h2>Our Patients
                            Are at the Centre of
                            Everything We Do</h2>
                        <p>Kind lesser bring said midst they're created signs made the beginni years
                            created Beast upon whales herb seas evening she'd day green dominion
                            evening in moved have fifth in won't in darkness fruitful god behold
                            whos without bring created creature.</p>
                        <ul>
                            <li><span class="ti-mouse"></span>Modern Technology</li>
                            <li><span class="ti-heart-broken"></span>Worldclass Facilities</li>
                            <li><span class="ti-package"></span>Experienced Nurse</li>
                            <li><span class="ti-headphone-alt"></span>24 Hours Support</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our_ability part end-->

    @endsection

@section('javascript')
    <script src="https://cdn.jsdelivr.net/npm/pdfjs-dist@2.2.228/build/pdf.min.js"></script>
@endsection
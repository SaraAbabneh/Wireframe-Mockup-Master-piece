@extends('front.layout.master')

@section('Titel')
    Home
@endsection

@section('keywords')
    Orange,Coding,Irbid
@endsection

@section('Description')
@endsection

@section('contant')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative mb-5">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/achiv.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Irbid Coding Academy
                                </h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Second <span
                                        class="text-primary"> Cohort</span> Graduation</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2"><span class="text-primary">100%</span>
                                    Graduates <span class="text-primary">100%</span> get full stack Certificates <span
                                        class="text-primary">80%</span> get job offer (after <span
                                        class="text-primary">2</span> months).</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/orange.jpg" alt="orange">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Irbid Coding Academy
                                </h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">As we commemorate the <span
                                        class="text-primary">5th year</span> of Orange Jordan Coding Academy,</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">"Among our accomplishments that we take
                                    pride in is our graduates'<span class="text-primary">employment rate, which has
                                        exceeded 80%.</span> "</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    @include('front.index.sections.About')

    @include('front.index.sections.Fact')

    @include('front.index.sections.Cohort')

    @include('front.index.sections.Tranning')

    @include('front.index.sections.Team')

    @include('front.index.sections.Testimonial')
    
@endsection

@extends('layouts.main')

@push('title')
    <title>Lawyers - About</title>
@endpush

@section('content')

@section('slide_title_main')
    <h3>Leading push on your city <br>
        Advice and Support</h3>
    <p>Leading Polish Lawyer in your city</p>
    <a href="#" class="boxed-btn4 ">Learn More</a>
@endsection

<!-- about_area _start  -->
<div class="about_area">
    <div class="opacity_icon d-none d-lg-block">
        <i class="flaticon-balance"></i>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-md-6">
                <div class="single_about_info text-center">
                    <div class="about_thumb">
                        <img src="img/about/1.png" alt="">
                    </div>
                    <h3>Finest And Strongest Law <br>
                        Firm Win The World</h3>
                    <p>There are many variations of passages of Lorem Ipsum <br> available, but the majority have
                        suffered alteration in <br> some form, by injected humour, or randomised words <br> which
                        don't look even slightly believable. </p>
                    <div class="signature">
                        <img src="img/about/signature.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6">
                <div class="single_about_info text-center">
                    <div class="about_thumb">
                        <div class="image_hover">
                            <div class="hover_inner">
                                <h2>93%</h2>
                                <span>Success Case</span>
                            </div>
                        </div>
                    </div>
                    <h3>About Lawyer Justice</h3>
                    <p>There are many variations of passages of Lorem Ipsum <br> available, but the majority have
                        suffered alteration in <br> some form, by injected humour, or randomised words <br> which
                        don't look even slightly believable. </p>
                    <div class="total_cases">
                        <div class="single_cases">
                            <h4>879</h4>
                            <p>Total Cases</p>
                        </div>
                        <div class="single_cases">
                            <h4>787</h4>
                            <p>Case Won</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about_area _end -->

 <!-- our_loyers-start  -->
    <div class="our_loyers">
        <div class="container">
                <div class="row">
                        <div class="col-xl-12">
                            <div class="section_title text-center mb-60">
                                <h3>Our Lawyers</h3>
                                <p>Many variations of passages of Lorem Ipsum available, but the majority have <br> suffered alteration in some.</p>
                            </div>
                        </div>
                    </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_loyers text-center">
                        <div class="thumb">
                            <img src="img/lawyers/1.png" alt="">
                        </div>
                        <h3>Henry Miller</h3>
                        <span>Family Lawyer</span>
                        <div class="social_links">
                            <ul>
                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_loyers text-center">
                        <div class="thumb">
                            <img src="img/lawyers/2.png" alt="">
                        </div>
                        <h3>Jon Anderson</h3>
                        <span>Consumer Lawyer</span>
                        <div class="social_links">
                            <ul>
                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_loyers text-center">
                        <div class="thumb">
                            <img src="img/lawyers/3.png" alt="">
                        </div>
                        <h3>Jaky Nadan</h3>
                        <span>Criminal Lawyer</span>
                        <div class="social_links">
                            <ul>
                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our_loyers-end  -->

     <div class="practice_hover text-center">
                            <div class="hover_inner">
                                <i class="flaticon-case"></i>
                                <h3>Business Law</h3>
                                <p>There are many variations of passages of <br> Lorem Ipsum available, <br> but the
                                    majority have suffered</p>
                                <a href="#" class="lern_more">Learn More</a>
                            </div>

@endsection

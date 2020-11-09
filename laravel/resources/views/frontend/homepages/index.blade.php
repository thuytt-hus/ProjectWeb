@extends('frontend.layouts.partner')
@section('title')
    Trang chủ
@endsection


@section('content')
    <!-- Slider -->
    <div class="w3-banner-info-w3ltd position-relative">

        <div class="slider">
            <ul class="rslides" id="slider">
                <li>
                    <div class="d-flex banner-w3pvt-bg1 common-bg">
                        <div class="d-flex mx-auto align-items-center justify-content-center flex-column">
                            <div class="bnr-w3pvt">
                                <h3>global recruitment</h3>
                                <div class="d-flex justify-content-between bnr-sub-txt align-items-center">
                                    <span></span>
                                    <p class="text-uppercase text-white">allowing you to expand quickly</p>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- //Slider -->
    <!--partners  -->
    <div class="w3ltdits-partners bg-theme" id="partners">
        <div class="container pt-4">
            <div class="title-wthree text-center">
                <h3 class="w3ltd-title">
                    find the one that’s right for you.
                </h3>
                <span></span>
            </div>
            <ul class="list-unstyled py-md-5 py-3 partners-icon text-center">
                <li>
                    <span class="fa fa-lastfm-square" aria-hidden="true"></span>
                </li>
                <li>
                    <span class="fa fa-meanpath" aria-hidden="true"></span>
                </li>
                <li>
                    <span class="fa fa-behance-square" aria-hidden="true"></span>
                </li>
                <li>
                    <span class="fa fa-cc-discover" aria-hidden="true"></span>
                </li>
                <li>
                    <span class="fa fa-cc-stripe" aria-hidden="true"></span>
                </li>
                <li>
                    <span class="fa fa-cc-jcb" aria-hidden="true"></span>
                </li>
            </ul>
        </div>
    </div>
    <!-- //partners -->
    <!-- about -->
    <section class="about-wthree py-3">
        <div class="container  py-sm-5">
            <div class="title-sec-w3layouts_pvt text-center">
                <span class="title-wthree">a world full of possibilities</span>
                <h4 class="w3layouts_pvt-head">allowing you to expand quickly.</h4>
            </div>
            <div class="row head-row-home">
                <div class="col-md-4 my-4 home-grid">
                    <span class="head-line"></span>
                    <span class="fa fa-info-circle" aria-hidden="true"></span>
                    <h4 class="home-title my-3">why choose us</h4>
                    <p> Pellentesque in ipsum id orci porta dapibus roined magna orem ipsum dolor sit
                        amet,consetetur.</p>
                    <a href="about.html" class="btn wthree-bnr-btn">Read more</a>
                </div>
                <div class="col-md-4 my-4 home-grid">
                    <span class="head-line"></span>
                    <span class="fa fa-connectdevelop" aria-hidden="true"></span>
                    <h4 class="home-title my-3">what we do</h4>
                    <p> Pellentesque in ipsum id orci porta dapibus roined magna orem ipsum dolor sit
                        amet,consetetur.</p>
                    <a href="about.html" class="btn wthree-bnr-btn">Read more</a>
                </div>
                <div class="col-md-4 my-4 home-grid">
                    <span class="fa fa-users" aria-hidden="true"></span>
                    <h4 class="home-title my-3">explore yourself</h4>
                    <p> Pellentesque in ipsum id orci porta dapibus roined magna orem ipsum dolor sit
                        amet,consetetur.</p>
                    <a href="about.html" class="btn wthree-bnr-btn">Read more</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //about -->
    <!-- services -->
    <section class="bg-theme position-relative" id="services">
        <div class="container">
            <div class="title-sec-w3layouts_pvt text-center">
                <span class="title-wthree text-white">a world full of possibilities</span>
                <h4 class="w3layouts_pvt-head">allowing you to expand quickly.</h4>
            </div>
            <div class="row head-row-home">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-6 service-title my-sm-5 my-4">
                            <h4 class="home-title text-white">Job by Category</h4>
                            <p class="sec-4">Itaque earum rerum hic tenetur a sapiente delectusum hic
                                tenetur a
                                sapiente delectus reiciendis maiores alias consequatur.
                            </p>
                        </div>
                        <div class="col-md-6 service-title my-md-5">
                            <h4 class="home-title text-white">Job by Company</h4>
                            <p class="sec-4">Itaque earum rerum hic tenetur a sapiente delectusum hic
                                tenetur a
                                sapiente delectus reiciendis maiores alias consequatur.
                            </p>
                        </div>
                        <div class="col-md-6 service-title mt-md-0 mt-sm-5 mt-4">
                            <h4 class="home-title text-white">Job by Skill</h4>
                            <p class="sec-4">Itaque earum rerum hic tenetur a sapiente delectusum hic
                                tenetur a
                                sapiente delectus reiciendis maiores alias consequatur.
                            </p>
                        </div>
                        <div class="col-md-6 service-title mt-md-0 mt-sm-5 mt-4">
                            <h4 class="home-title text-white">Job by Opening</h4>
                            <p class="sec-4">Itaque earum rerum hic tenetur a sapiente delectusum hic
                                tenetur a
                                sapiente delectus reiciendis maiores alias consequatur.
                            </p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="job_list.html" class="btn wthree-bnr-btn">Read more</a>
                    </div>
                </div>
                <div class="offset-lg-4"></div>
            </div>
        </div>
        <img src="{{ asset('frontend_assets/images') }}/services.jpg" alt="" class="img-fluid">
    </section>
    <!-- //services -->
    <!-- job roles -->
    <div class="wthreepvt-pos py-md-5 py-5" id="positions">
        <div class="container py-lg-5">
            <div class="wthreepvt-pos-row row  text-center">
                <div class="col-lg-4 col-sm-6 wthreepvt-pos-grids">
                    <div class="p-md-5 p-sm-3">
                        <span class="fa fa-check-square" aria-hidden="true"></span>
                        <h4 class="mt-2 mb-3">Computer & IT</h4>
                        <p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur
                            aut</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wthreepvt-pos-grids  border-left border-right my-sm-0 my-5">
                    <div class="p-md-5 p-sm-3">
                        <span class="fa fa-suitcase" aria-hidden="true"></span>
                        <h4 class="mt-2 mb-3">Marketing</h4>
                        <p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur
                            aut</p>
                    </div>
                </div>
                <div class="col-lg-4 wthreepvt-pos-grids">
                    <div class="p-md-5 p-sm-3">
                        <span class="fa fa-thumbs-up" aria-hidden="true"></span>
                        <h4 class="mt-2 mb-3">Insurance</h4>
                        <p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur
                            aut</p>
                    </div>
                </div>
            </div>
            <div class="wthreepvt-pos-row border-top row text-center pb-lg-5 pt-md-0 pt-5 mt-md-0 mt-sm-5 mt-4">
                <div class="col-lg-4 col-sm-6 wthreepvt-pos-grids">
                    <div class="p-md-5 p-sm-3 col-label">
                        <span class="fa fa-thumb-tack" aria-hidden="true"></span>
                        <h4 class="mt-2 mb-3">Customer Service</h4>
                        <p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur
                            aut</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 wthreepvt-pos-grids mt-lg-0 mt-md-3 border-left border-right pt-sm-0 pt-5">
                    <div class="p-md-5 p-sm-3 col-label">
                        <span class="fa fa-external-link" aria-hidden="true"></span>
                        <h4 class="mt-2 mb-3">health care</h4>
                        <p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur
                            aut</p>
                    </div>
                </div>
                <div class="col-lg-4 wthreepvt-pos-grids pt-md-0 pt-5">
                    <div class="p-md-5 p-sm-3 col-label">
                        <span class="fa fa-cog" aria-hidden="true"></span>
                        <h4 class="mt-2 mb-3">automotive</h4>
                        <p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur
                            aut</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //job roles -->
    <!-- services bottom -->
    <section class="bg-theme position-relative" id="services-bot">
        <div class="container-fluid px-0">
            <div class="title-sec-w3layouts_pvt text-center">
                <span class="title-wthree text-white">a world full of possibilities</span>
                <h4 class="w3layouts_pvt-head">allowing you to expand quickly.</h4>
            </div>
            <img src="{{ asset('frontend_assets/images') }}/services.jpg" alt="" class="img-fluid">
            <div class="row head-row-home mx-0">
                <div class="offset-5"></div>
                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-md-6 service-title my-sm-5 my-4">
                            <h4 class="home-title text-white">Job by Category</h4>
                            <p class="sec-4">Itaque earum rerum hic tenetur a sapiente delectusum hic
                                tenetur a
                                sapiente delectus reiciendis maiores alias consequatur.
                            </p>
                        </div>
                        <div class="col-md-6 service-title my-md-5">
                            <h4 class="home-title text-white">Job by Company</h4>
                            <p class="sec-4">Itaque earum rerum hic tenetur a sapiente delectusum hic
                                tenetur a
                                sapiente delectus reiciendis maiores alias consequatur.
                            </p>
                        </div>
                        <div class="col-md-6 service-title mt-md-0 mt-sm-5 mt-4">
                            <h4 class="home-title text-white">Job by Skill</h4>
                            <p class="sec-4">Itaque earum rerum hic tenetur a sapiente delectusum hic
                                tenetur a
                                sapiente delectus reiciendis maiores alias consequatur.
                            </p>
                        </div>
                        <div class="col-md-6 service-title mt-md-0 mt-sm-5 mt-4">
                            <h4 class="home-title text-white">Job by Opening</h4>
                            <p class="sec-4">Itaque earum rerum hic tenetur a sapiente delectusum hic
                                tenetur a
                                sapiente delectus reiciendis maiores alias consequatur.
                            </p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="job_list.html" class="btn wthree-bnr-btn">Read more</a>
                    </div>
                </div>
                <div class="offset-2"></div>
            </div>
        </div>
    </section>
    <!-- //services bottom-->
    <!-- blog -->
    <section class="blog_w3ls py-lg-5">
        <div class="container py-5">
            <div class="title-sec-w3layouts_pvt text-center">
                <span class="title-wthree">a world full of possibilities</span>
                <h4 class="w3layouts_pvt-head">allowing you to expand quickly.</h4>
            </div>
            <div class="row head-row-home">
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-sm-0 mt-4">
                    <div class="card border-0">
                        <div class="card-header p-0">
                            <a href="#exampleModal2" data-toggle="modal" aria-pressed="false"
                               data-target="#exampleModal2"
                               role="button">
                                <img class="card-img-bottom" src="{{ asset('frontend_assets/images') }}/b1.jpg" alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body border-0 px-0">
                            <div class="blog_w3icon d-flex justify-content-between">
                                <span>
                                    By: Admin</span>
                                <span>
                                    20/6/2018</span>
                            </div>
                            <div class="pt-4">
                                <h5 class="blog-title card-title font-weight-bold">
                                    <a href="#exampleModal2" data-toggle="modal" aria-pressed="false"
                                       data-target="#exampleModal2"
                                       role="button">Cras ultricies ligula sed magna dictum porta auris blandita.</a>
                                </h5>
                                <p>At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit
                                    ametLorem ipsum dolor sit amet,sed diam nonumy.</p>
                            </div>
                            <button type="button" class="btn blog-btn wthree-bnr-btn" data-toggle="modal"
                                    aria-pressed="false"
                                    data-target="#exampleModal2">
                                Read more
                            </button>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-md-0 mt-sm-5 mt-4">
                    <div class="card border-0">
                        <div class="card-header p-0">
                            <a href="#exampleModal3" data-toggle="modal" aria-pressed="false"
                               data-target="#exampleModal3"
                               role="button">
                                <img class="card-img-bottom" src="{{ asset('frontend_assets/images') }}/b2.jpg" alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body border-0">
                            <div class="blog_w3icon d-flex justify-content-between">
                                <span>
                                    By: Admin</span>
                                <span>
                                    20/6/2018</span>
                            </div>
                            <div class="pt-4">
                                <h5 class="blog-title card-title font-weight-bold">
                                    <a href="#exampleModal3" data-toggle="modal" aria-pressed="false"
                                       data-target="#exampleModal3"
                                       role="button">Cras ultricies ligula sed magna dictum porta auris blandita.</a>
                                </h5>
                                <p>At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit
                                    ametLorem ipsum dolor sit amet,sed diam nonumy.</p>
                            </div>
                            <button type="button" class="btn blog-btn wthree-bnr-btn" data-toggle="modal"
                                    aria-pressed="false"
                                    data-target="#exampleModal3">
                                Read more
                            </button>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
                <!-- blog grid -->
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-5 mx-auto">
                    <div class="card border-0">
                        <div class="card-header p-0">
                            <a href="#exampleModal4" data-toggle="modal" aria-pressed="false"
                               data-target="#exampleModal4"
                               role="button">
                                <img class="card-img-bottom" src="{{ asset('frontend_assets/images') }}/b3.jpg" alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body border-0">
                            <div class="blog_w3icon d-flex justify-content-between">
                                <span>
                                    By: Admin</span>
                                <span>
                                    20/6/2018</span>
                            </div>
                            <div class="pt-4">
                                <h5 class="blog-title card-title font-weight-bold">
                                    <a href="#exampleModal4" data-toggle="modal" aria-pressed="false"
                                       data-target="#exampleModal4"
                                       role="button">Cras ultricies ligula sed magna dictum porta auris blandita.</a>
                                </h5>
                                <p>At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit
                                    ametLorem ipsum dolor sit amet,sed diam nonumy.</p>
                            </div>
                            <button type="button" class="btn blog-btn wthree-bnr-btn" data-toggle="modal"
                                    aria-pressed="false"
                                    data-target="#exampleModal4">
                                Read more
                            </button>
                        </div>
                    </div>
                </div>
                <!-- //blog grid -->
            </div>
        </div>
    </section>
    <!-- //blog -->
@endsection
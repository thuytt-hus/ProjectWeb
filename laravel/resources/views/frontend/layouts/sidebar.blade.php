
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('frontend.partials.head')
<body>
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
                        <div class="row justify-content-between bnr-form-w3ls">
                            <div class="col-lg-4">
                                <h4>A better career is out there. We'll help you find it to use.</h4>
                            </div>
                            <div class="col-lg-8">
                                <form action="job_list.html" method="post" class="bnr-field">
                                    <div class="row">
                                        <div class="col-md-5 form-group mb-md-0">
                                            <label class="text-capitalize">
                                                looking for job
                                            </label>
                                            <input class="form-control" type="text" name="name" required=""
                                                   placeholder="Job title,Keywords">
                                        </div>
                                        <div class="col-md-5 mb-md-0 form-group">
                                            <label class="text-capitalize">
                                                place to work
                                            </label>
                                            <input class="form-control" type="text" name="place" required=""
                                                   placeholder="City,State,zip">
                                        </div>
                                        <div class="col-md-2 d-flex align-items-end">
                                            <button type="submit" class="btn btn-w3ltd btn-block w-100 bg-theme font-weight-bold text-uppercase"><span
                                                        class="fa fa-search"></span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="d-flex banner-w3pvt-bg2 common-bg">
                    <div class="d-flex mx-auto align-items-center justify-content-center flex-column">
                        <div class="bnr-w3pvt">
                            <h3>global recruitment</h3>
                            <div class="d-flex justify-content-between bnr-sub-txt align-items-center">
                                <span></span>
                                <p class="text-uppercase text-white">allowing you to expand quickly</p>
                                <span></span>
                            </div>
                        </div>
                        <div class="row justify-content-between bnr-form-w3ls">
                            <div class="col-lg-4">
                                <h4>A better career is out there. We'll help you find it to use.</h4>
                            </div>
                            <div class="col-lg-8">
                                <form action="job_list.html" method="post" class="bnr-field">
                                    <div class="row">
                                        <div class="col-md-5 form-group mb-md-0">
                                            <label class="text-capitalize">
                                                looking for job
                                            </label>
                                            <input class="form-control" type="text" name="name" required=""
                                                   placeholder="Job title,Keywords">
                                        </div>
                                        <div class="col-md-5 mb-md-0 form-group">
                                            <label class="text-capitalize">
                                                place to work
                                            </label>
                                            <input class="form-control" type="text" name="place" required=""
                                                   placeholder="City,State,zip">
                                        </div>
                                        <div class="col-md-2 d-flex align-items-end">
                                            <button type="submit" class="btn btn-w3ltd bg-theme btn-block w-100 font-weight-bold text-uppercase"><span
                                                        class="fa fa-search"></span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="d-flex banner-w3pvt-bg3 common-bg">
                    <div class="d-flex mx-auto align-items-center justify-content-center flex-column">
                        <div class="bnr-w3pvt">
                            <h3>global recruitment</h3>
                            <div class="d-flex justify-content-between bnr-sub-txt align-items-center">
                                <span></span>
                                <p class="text-uppercase text-white">allowing you to expand quickly</p>
                                <span></span>
                            </div>
                        </div>
                        <div class="row justify-content-between bnr-form-w3ls">
                            <div class="col-lg-4">
                                <h4>A better career is out there. We'll help you find it to use.</h4>
                            </div>
                            <div class="col-lg-8">
                                <form action="job_list.html" method="post" class="bnr-field">
                                    <div class="row">
                                        <div class="col-md-5 form-group mb-md-0">
                                            <label class="text-capitalize">
                                                looking for job
                                            </label>
                                            <input class="form-control" type="text" name="name" required=""
                                                   placeholder="Job title,Keywords">
                                        </div>
                                        <div class="col-md-5 mb-md-0 form-group">
                                            <label class="text-capitalize">
                                                place to work
                                            </label>
                                            <input class="form-control" type="text" name="place" required=""
                                                   placeholder="City,State,zip">
                                        </div>
                                        <div class="col-md-2 d-flex align-items-end">
                                            <button type="submit" class="btn btn-w3ltd bg-theme  btn-block w-100 font-weight-bold text-uppercase"><span
                                                        class="fa fa-search"></span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    @include('frontend.partials.header')
</div>
<!-- //Slider -->

<div class="inner-banner-w3ls">
</div>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb d-flex justify-content-center bg-theme">
        <li class="breadcrumb-item">
            <a href="index.html" class="text-white">Home</a>
        </li>
        <li class="breadcrumb-item active text-white font-weight-bold" aria-current="page">Job List</li>
    </ol>
</nav>
<div class="container">
    <div class="title-sec-w3layouts_pvt text-center pb-4">
        <span class="title-wthree">a world full of possibilities</span>
        <h4 class="w3layouts_pvt-head">allowing you to expand quickly.</h4>
    </div>
    <div class="row pt-lg-5">
        @include('frontend.partials.sidebar')
        @yield('content')

    </div>
    <div class="d-flex justify-content-center">
        <ul class="pagination pt-4">
            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
            <li class="active"><a href="#" class="text-white bg-theme">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li> <a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a>
            </li>
        </ul>
    </div>
</div>


@include('frontend.partials.footer')

@include('frontend.partials.main-js')
</body>

</html>
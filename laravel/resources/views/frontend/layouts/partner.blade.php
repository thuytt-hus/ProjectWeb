<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('frontend.partials.head')
<body>
<!-- Slider -->
<div class="w3-banner-info-w3ltd position-relative">
    @include('frontend.partials.header')
</div>
<!-- //Slider -->
@yield('content')

@include('frontend.partials.footer')
{{--
<!-- blog modal1 -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-theme1">
                <h5 class="modal-title" id="exampleModalLabel2">Cras ultricies ligula sed magna dictum porta auris
                    blandita.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <img src="images/b1.jpg" class="img-fluid" alt="" />
                <p class="text-left my-4">
                    Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur non nulla sit amet nisl
                    tempus convallis quis ac
                    lectus. Cras ultricies ligula sed magna dictum porta.
                </p>


            </div>
        </div>
    </div>
</div>
<!-- //blog modal1 -->
<!-- blog modal2 -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-theme1">
                <h5 class="modal-title" id="exampleModalLabel3">Cras ultricies ligula sed magna dictum porta auris
                    blandita.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <img src="images/b2.jpg" class="img-fluid" alt="" />
                <p class="text-left my-4">
                    Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur non nulla sit amet nisl
                    tempus convallis quis ac
                    lectus. Cras ultricies ligula sed magna dictum porta.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- //blog modal2 -->
<!-- blog modal3 -->
<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-theme1">
                <h5 class="modal-title" id="exampleModalLabel4">Cras ultricies ligula sed magna dictum porta auris
                    blandita.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <img src="images/b3.jpg" class="img-fluid" alt="" />
                <p class="text-left my-4">
                    Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur non nulla sit amet nisl
                    tempus convallis quis ac
                    lectus. Cras ultricies ligula sed magna dictum porta.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- //blog modal3-->
<!-- login modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-theme1">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="post" class="p-3">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Username</label>
                        <input type="text" class="form-control" placeholder=" " name="Name" id="recipient-name"
                               required="">
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-form-label">Password</label>
                        <input type="password" class="form-control" placeholder=" " name="Password" id="password"
                               required="">
                    </div>
                    <div class="right-w3l">
                        <input type="submit" class="form-control bg-theme" value="Login">
                    </div>
                    <div class="row sub-w3l my-3">
                        <div class="col sub-w3ltd">
                            <input type="checkbox" id="brand1" value="">
                            <label for="brand1" class="text-dark">
                                <span></span>Remember me?</label>
                        </div>
                        <div class="col forgot-w3l text-right">
                            <a href="#" class="text-dark">Forgot Password?</a>
                        </div>
                    </div>
                    <p class="text-center dont-do">Don't have an account?
                        <a href="#" data-toggle="modal" data-target="#exampleModal1" class="text-dark">
                            <strong>Register Now</strong></a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- //login modal -->
<!-- register modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-theme1">
                <h5 class="modal-title" id="exampleModalLabel1">Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="post" class="p-3">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Username</label>
                        <input type="text" class="form-control" placeholder=" " name="Name" id="recipient-rname"
                               required="">
                    </div>
                    <div class="form-group">
                        <label for="recipient-email" class="col-form-label">Email</label>
                        <input type="email" class="form-control" placeholder=" " name="Email" id="recipient-email"
                               required="">
                    </div>
                    <div class="form-group">
                        <label for="password1" class="col-form-label">Password</label>
                        <input type="password" class="form-control" placeholder=" " name="Password" id="password1"
                               required="">
                    </div>
                    <div class="form-group">
                        <label for="password2" class="col-form-label">Confirm Password</label>
                        <input type="password" class="form-control" placeholder=" " name="Confirm Password" id="password2"
                               required="">
                    </div>
                    <div class="sub-w3l">
                        <div class="sub-w3ltd">
                            <input type="checkbox" id="brand2" value="">
                            <label for="brand2" class="mb-3 text-dark">
                                <span></span>I Accept to the Terms & Conditions</label>
                        </div>
                    </div>
                    <div class="right-w3l">
                        <input type="submit" class="form-control bg-theme" value="Register">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- //register modal -->
--}}

@include('frontend.partials.main-js')
</body>

</html>
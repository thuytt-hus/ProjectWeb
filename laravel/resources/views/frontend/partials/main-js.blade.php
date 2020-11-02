
<!-- js -->
<script src="{{ asset('frontend_assets/js/jquery-2.2.3.min.js') }}"></script>
<!-- Slider-JavaScript -->
<script src="{{ asset('frontend_assets/js/responsiveslides.min.js') }}"></script>
<script>
    $(function () {
        $("#slider, #slider1").responsiveSlides({
            auto: true,
            nav: false,
            speed: 1500,
            namespace: "callbacks",
            pager: true,
        });
    });
</script>
<!-- //Slider-JavaScript -->
<!-- script for password match -->
<script>
    window.onload = function () {
        document.getElementById("password1").onchange = validatePassword;
        document.getElementById("password2").onchange = validatePassword;
    }

    function validatePassword() {
        var pass2 = document.getElementById("password2").value;
        var pass1 = document.getElementById("password1").value;
        if (pass1 != pass2)
            document.getElementById("password2").setCustomValidity("Passwords Don't Match");
        else
            document.getElementById("password2").setCustomValidity('');
        //empty string means no validation error
    }
</script>
<!-- script for password match -->
<!-- //js -->
<script src="{{ asset('frontend_assets/js/js/move-top.js') }}"></script>
<script src="{{ asset('frontend_assets/js/js/easing.js') }}"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
<script>
    $(document).ready(function () {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<script src="{{ asset('frontend_assets/js/SmoothScroll.min.js') }}"></script>
<!-- //smooth-scrolling-of-move-up -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('frontend_assets/js/bootstrap.min.js') }}"></script>
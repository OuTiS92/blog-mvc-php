
<!-- Footer  -->

<div class="footer-top-bg">
    <div class="row">
        <!-- Linkset -->
        <div class="footer-links small-12 medium-3 large-3 columns">
            <!-- Heading -->
            <div class="footer-links-heading">صحفه ها  </div>
            <!-- End Heading -->
            <!-- Links -->
            <li><a href="index.php?c=user&a=login">ورود  </a></li><br>
                <li><a href="index.php?c=user&a=login">ثبت نام </a></li><br>
                
            <!-- End Links -->
        </div>
        <!-- End Linkset -->

        <!-- Linkset -->
        <div class="footer-links small-12 medium-3 large-3 columns">
            <!-- Heading -->
            <div ></div>
            <!-- End Heading -->
            <!-- Links -->
            <ul class="flinks">
               
            </ul>
            <!-- End Links -->
        </div>
        <!-- End Linkset -->

        <!-- Linkset -->
        <div class="footer-links small-12 medium-3 large-3 columns">
            <!-- Heading -->
            <div ></div>
            <!-- End Heading -->
            <!-- Links -->
            <ul class="flinks">
                
            </ul>
            <!-- End Links -->
        </div>
        <!-- End Linkset -->

        <!-- Linkset -->
        <div class="footer-links small-12 medium-3 large-3 columns">
            <!-- Heading -->
            <div "></div>
            <!-- End Heading -->
            <!-- Links -->
            <ul class="flinks">
                
            </ul>
            <!-- End Links -->
        </div>
        <!-- End Linkset -->


    </div>
</div>
<!-- End Footer Links -->
<!-- Footer Copleft -->
<div class="footer-copyleft-bg">
    <!-- Content Row -->
    <div class="row">

        <!-- Copyleft Info -->
        <div class="small-12 small-centered large-uncentered medium-uncentered medium-6 large-10 copyleft columns">
            کپی رایت@2020 تمام حقوق مادی و معنوی این سایت متعلق به AmiRhoseiN میباشد

        </div>
        <!-- End Copyleft Info -->

       <div class="small-10 small-centered  medium-uncentered medium-3 large-2  columns">
            <!-- Social icons -->
            <div class="socialicons">
                <a href="https://t.me/vincent_2017"><i class="fa fa-telegram"></i></a>
                <a href="https://twitter.com/98Outis"><i class="fa fa-twitter"  ></i></a>                
                <a href="https://www.instagram.com/amir_guilt/"><i class="fa fa-instagram" ></i></a>
                <a href="amirhoseinalahdadi76@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i></a>
            </div>
            <!-- End Social Icons -->
        </div>
            <!-- End Social Icons -->
        </div>

    </div>
    <!-- End Row -->

</div>
<!-- End Footer Copyleft Bg -->
<!-- End Footer -->

<script type="text/javascript" src="public/default/javascripts/vendor/jquery.js">
</script>
<script src="public/default/javascripts/foundation/foundation.js"></script>

<script type="text/javascript" src="public/default/javascripts/nexx.js"></script>

<!-- FlexSlider -->
<script type="text/javascript" src="public/default/javascripts/vendor/jquery.flexslider-min.js"></script>
<script type="text/javascript">

    // Main Slider
    var $ = jQuery.noConflict();
    $(window).load(function() {

        $('.flexslider').flexslider();

    });

</script>

<!-- Jquery Selectric (Custom Selecbox Styling ) -->
<script type="text/javascript" src="public/default/javascripts/jquery.selectric.js"></script>
<script type="text/javascript">
    $(function(){
        $('select').selectric(); // this function turn all <select> to custom Styling for specific select box use $("#selectbox").selectric();
    });
</script>
<!-- Owl Carousel -->
<script src="public/default/owl-carousel/owl.carousel.min.js"></script>

<!--  Image Zoom Plugin -->
<script src="public/default/javascripts/zoomsl-3.0.min.js"></script>
<script>
    jQuery(function(){

        $(".p-photo").imagezoomsl({


            zoomrange: [1.68, 10],
            zoomstart: 1.68,
            cursorshadeborder: "10px solid black",
            magnifiereffectanimate: "fadeIn",
        });


        $(".item img").click(function(){

            var that = this;
            $(".p-photo").fadeOut(600, function(){

                $(this).attr("src", 	   $(that).attr("data-medium"))
                    .attr("data-large", $(that).attr("data-tmb-large"))
                    .fadeIn(1000);
            });

            return false;
        });

    });
</script>


</body>
</html>
